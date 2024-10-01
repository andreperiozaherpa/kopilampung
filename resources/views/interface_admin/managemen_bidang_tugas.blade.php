@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Bidang Bidang</h1>
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
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $d)
                    <div class="col-12 col-xxl-12 col-lg-12">
                        <a href="/managemen_tugas/tugas?nama={{ $d['nama_bidang'] }}&id={{ $d['id_bidang'] }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="circle-text">
                                            <div class="heading mb-0 sh-4 lh-1-25 text-uppercase">{{ $d['nama_bidang'] }}</div>
                                            <div class="text-medium text-muted mb-2 text-uppercase">Persentase Penyelesaian Tugas</div>
                                            <div class="cta-3 text-primary sh-3 mb-2 value">{{ $d['jumlah_data_selesai'] . '/' . $d['jumlah_data_total'] }}</div>
                                        </div>
                                        <div class="circle">
                                            <div class="sw-15">
                                                <div role="progressbar" class="progress-bar-circle" id="bidang{{ $i++ }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Bidang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Bidang</label>
                            <input name="nama_bidang" id="nama_bidang" type="text" class="form-control">
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
        function circleProgressBar(id, minVal, maxVal) {
            // console.log(minVal + maxVal);
            new ProgressBar.Circle(document.querySelector(id), {
                color: Globals.primary,
                trailColor: Globals.separator,
                duration: 1000,
                step: function(state, bar) {
                    bar.setText(Math.round(bar.value() * 100) + "%");
                    // bar.setText(Math.round(bar.value() * 2) + "/" + 3);
                },
            }).animate(minVal / maxVal);
            // }).animate(2 / 3);
        }


        $(document).ready(function() {
            var text = document.getElementById('listBidang').children
            var value = 0
            var getId = 0

            for (let i = 0; i < text.length; i++) {
                value = text[i].querySelector('.value').innerText;
                getId = text[i].querySelector('.progress-bar-circle').id;
                var splitValue = value.split('/');
                console.log(splitValue[1][0]);
                circleProgressBar('#' + getId, splitValue[0][0], splitValue[1][0])
                // circleProgressBar('#' + getId, splitValue[0][0], splitValue[1][0])
            }


            var buttonAdd = document.getElementById("addEditConfirmButton");
            buttonAdd.addEventListener('click', function(event) {
                var namaBidang = document.getElementById('nama_bidang').value;
                if (text.length >= 1) {
                    var getLastId = text[text.length - 1].querySelector('.progress-bar-circle').id;
                    var addNewNumber = parseInt(getLastId.match(/\d+/)[0]) + 1;
                    var addNewId = getLastId.replace(/[0-9]/g, '') + addNewNumber;
                } else {
                    var addNewId = 'bidang1';
                }

                var data = {
                    nama_bidang: namaBidang
                };


                $(".modal-content").addClass("overlay-spinner");
                (async () => {
                    try {
                        const rawResponse = await fetch("/managemen_tugas/bidang/store", {
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

                        if (rawResponse.status === 200) {
                            $(".modal-content").removeClass("overlay-spinner");

                            // add new element for bidang
                            var listBidang = document.getElementById('listBidang');
                            var createListBidang = document.createElement('div');
                            createListBidang.className = 'col-12 col-xxl-12 col-lg-12';
                            createListBidang.innerHTML = `
                                <a href="">
                                    <div class="col-12 col-xxl-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="circle-text">
                                                        <div class="heading mb-0 sh-4 lh-1-25 text-uppercase">` + content.nama_bidang + `</div>
                                                        <div class="text-medium text-muted mb-2 text-uppercase">Persentase Penyelesaian Tugas</div>
                                                        <div class="cta-3 text-primary sh-3 mb-2 value">0%</div>
                                                    </div>
                                                    <div class="circle">
                                                        <div class="sw-15">
                                                            <div role="progressbar" class="progress-bar-circle" id="` + addNewId + `"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `;
                            listBidang.appendChild(createListBidang);
                            circleProgressBar('#' + addNewId, '0', '100')
                            $('#addEditModal').modal('hide');
                            document.getElementById('nama_bidang').value = '';
                        }
                    } catch (error) {
                        $(".modal-content").removeClass("overlay-spinner");
                    }
                })();
            })
        });
    </script>
@endpush
