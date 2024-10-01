@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Manajemen Tugas</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item">
                                    <a href="Dashboards.Default.html">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="Dashboards.html">Dashboards</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-md-5 d-flex align-items-start justify-content-end" data-bs-toggle="modal" data-bs-target="#addEditModal">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-plus undefined">
                                <path d="M10 17 10 3M3 10 17 10"></path>
                            </svg>
                            <span>Add New</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row g-2" id="listBidang">
                @foreach ($data as $d)
                    @if ($d->status == 1)
                        @php
                            $text = '<del>' . $d->nama_tugas . '</del>';
                        @endphp
                    @else
                        @php
                            $text = $d->nama_tugas;
                        @endphp
                    @endif
                    <div class="col-12 col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="circle-text">
                                        <div class="heading mb-0 sh-4 lh-1-25 text-uppercase">{!! $text !!}</div>
                                        <div class="text-medium text-muted mb-2 text-uppercase">Penyelesaian Tugas</div>
                                    </div>
                                    @if ($d->status == 0)
                                        <div class="circle align-content-center">
                                            <div type="button" class="uploadFile btn btn-primary" data-id_tugas="{{ $d->id }}">UPLOAD FILE</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Tugas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Tugas</label>
                            <input name="nama_tugas" id="nama_tugas" type="text" class="form-control">
                            <input name="id_bidang" id="id_bidang" type="text" class="form-control" value="{{ $id_bidang }}" hidden>
                            <input name="nama_bidang" id="nama_bidang" type="text" class="form-control" value="{{ $nama_bidang }}" hidden>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-left fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Upload Tugas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" id="inputUploadId" value="" readonly hidden>
                        {{-- <input type="text" id="inputUploadFileName" value="" readonly hidden> --}}
                        <div class="form-floating">
                            <div class="dropzone dropzone-floating-label" id="dropzoneFloatingLabelImage"></div>
                            <label class="align-content-center text-uppercase">Upload Excel disini</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        var dropzone = new Dropzone('#dropzoneFloatingLabelImage', {
            url: '/managemen_tugas/tugas/store',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("param", "uploads");
                    formData.append("id_tugas", $('#inputUploadId').val());
                });

                this.on('success', function(file, responseText) {
                    location.reload();
                });
                this.on('resetFiles', function() {
                    this.removeAllFiles();
                });
            },
            maxFiles: 1,
            acceptedFiles: 'application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            thumbnailWidth: 160,
            dictDefaultMessage: '',
            previewTemplate: DropzoneTemplates.previewTemplate,
        });


        $(document).ready(function() {
            var getListBidangChildren = document.getElementById('listBidang').children

            var buttonAdd = document.getElementById("addEditConfirmButton");
            buttonAdd.addEventListener('click', function(event) {
                $(".modal-content").addClass("overlay-spinner");
                var namaTugas = document.getElementById('nama_tugas').value;
                var idBidang = document.getElementById('id_bidang').value;

                var data = {
                    id_bidang: idBidang,
                    nama_tugas: namaTugas
                };

                (async () => {
                    try {
                        const rawResponse = await fetch("/managemen_tugas/tugas/store", {
                            method: "POST",
                            headers: {
                                Accept: "application/json",
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                ),
                            },
                            body: JSON.stringify(data),
                        });
                        const content = await rawResponse.json();
                        console.log(content);
                        if (rawResponse.status === 200) {
                            $(".modal-content").removeClass("overlay-spinner");

                            // add new element for bidang
                            var listTugas = document.getElementById('listBidang');
                            var createListTugas = document.createElement('div');
                            createListTugas.className = 'col-12 col-xxl-12 col-lg-12';
                            createListTugas.innerHTML = `
                                <div class="col-12 col-xxl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="circle-text">
                                                    <div class="heading mb-0 sh-4 lh-1-25 text-uppercase">` + content.data.nama_tugas + `</div>
                                                    <div class="text-medium text-muted mb-2 text-uppercase">Penyelesaian Tugas</div>
                                                </div>
                                                <div class="circle align-content-center">
                                                    <div type="button" class="uploadFile btn btn-primary" data-id_tugas="` + content.data.id + `">UPLOAD FILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            listTugas.appendChild(createListTugas);
                            $('#addEditModal').modal('hide');
                            document.getElementById('nama_tugas').value = '';
                        }
                    } catch (error) {
                        console.log(error);
                        $(".modal-content").removeClass("overlay-spinner");
                    }
                })();
            })

            $(document).on('click', '.uploadFile', function() {
                $('#uploadModal').modal('show')
                $('#inputUploadId').val($(this).data('id_tugas'))
                // console.log();
            });
        });
    </script>
@endpush
