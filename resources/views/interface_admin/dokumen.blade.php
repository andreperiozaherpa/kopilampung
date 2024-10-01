@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1 class="mb-0 pb-0 display-4" id="title">
                            Integrated Drive Google
                            <input type="text" id="folderData" value="dokumen_baru" readonly hidden>
                        </h1>
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
                </div>
            </div>

            {{-- <div class="card mb-5">
                <div class="card-body"> --}}
            <div class="d-flex">
                <div class="me-auto">
                    <button class="btn btn-primary mb-3 py-0" id="backs" data-backs="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </button>
                </div>
                <div class="gap-3">
                    <button class="btn btn-primary mb-3 py-0" id="btnFolder" data-folder="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                            <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z" />
                        </svg>
                    </button>

                    <button class="btn btn-primary mb-3 py-0" id="btnUpload" data-folder="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- <div id="addCardOverlaySpinner"> --}}
            <div class="card addCardOverlaySpinner">
                <div class="card-body">
                    <div class="row g-2 mb-5">
                        <span class="text-medium text-primary">Folder</span>
                        <div id="kotakDriveFolder"></div>
                    </div>
                    <div class="row g-2">
                        <span class="text-medium text-primary">FIle</span>
                        <div id="kotakDrive"></div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            {{-- </div>
            </div> --}}
        </div>
    </main>

    {{-- modal --}}
    <div class="modal fade modal-close-out bg-transparent" id="closeButtonOutExample" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg bg-transparent border-0">
            <div class="modal-content bg-transparent border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body bg-transparent p-0 m-0">
                    <div class="boxImage"></div>
                </div>
                <div class="modal-footer py-2">
                    <div class="boxText"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-close-out" id="modalUpload" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body addCardOverlaySpinner">
                    <section class="scroll-section" id="floatingLabel">
                        <div class="card">
                            <form>
                                <div class="form-floating">
                                    <div class="dropzone dropzone-floating-label" id="dropzoneFloatingLabelImage"></div>
                                    <label>Upload File disini</label>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="uploadClose">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-close-out" id="modalFolder" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body addCardOverlaySpinner">
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">Nama folder</span>
                        <input type="text" class="form-control" placeholder="Nama Folder" id="namaFolder">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="folderClose">Save And Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        var dropzone = new Dropzone('#dropzoneFloatingLabelImage', {
            url: '/dokumen/store',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("param", "uploads");
                    formData.append("folder", $('#btnUpload').data('folder'));
                });

                this.on('success', function(file, responseText) {

                });
                this.on('resetFiles', function() {
                    this.removeAllFiles();
                });
            },
            // acceptedFiles: 'image/*',
            thumbnailWidth: 160,
            dictDefaultMessage: '',
            previewTemplate: DropzoneTemplates.previewTemplate,
        });

        function responseDrive(res) {
            $('#btnUpload').attr('data-folder', res.folder)
            $('#btnFolder').attr('data-folder', res.folder)
            if (res.back != null) {
                $('#backs').attr('data-backs', res.back)
            }
            $.each(res.data, function(indexInArray, valueOfElement) {
                // console.log($.inArray(valueOfElement.mime_type, image));
                if (valueOfElement.type == 'dir') {
                    //     $('#kotakDriveFolder').append(`
                //       <div class="col-3">
                //         <div class="card addCardOverlaySpinner" style="height:300px;" data-param="dir" data-path="` + valueOfElement.path + `">
                //             <div class="card-header p-3 text-wrap">
                //                 ` + valueOfElement.extra_metadata.dirname + `
                //             </div>
                //             <img class="card-img-top" src="/assets/img/folder.webp" alt="">
                //         </div>
                //       </div>
                // `);
                    $('#kotakDriveFolder').append(`
                        <div class="col-3">
                            <div class="card addCardOverlaySpinner" data-param="dir" data-path="` + valueOfElement.path + `">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between g-0">
                                        <div>
                                            <span class="card-text text-wrap">
                                                ` + valueOfElement.extra_metadata.dirname + `
                                             </span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);

                } else {
                    var image_mime = ["image/gif", "image/jpeg", "image/png"]
                    var pdf_mime = ["application/pdf"]
                    var xlsx_mime = ["application/vnd.ms-excel", "application/vnd.ms-excel.sheet.macroEnabled.12", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.google-apps.spreadsheet"]
                    var doc_mime = ["application/msword", "application/vnd.ms-word.document.macroEnabled.12", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", ""]

                    if ($.inArray(valueOfElement.mime_type, image_mime) != -1) {
                        $('#kotakDrive').append(`
                          <div class="col-3">
                            <div class="card addCardOverlaySpinner" style="height:300px;">
                                <div class="card-header p-3 text-wrap">
                                    <div class="d-flex mb-3">
                                        <div class="col-8 text-nowrap overflow-hidden">` + valueOfElement.extra_metadata.name + `</div>
                                        <div class="col-2">
                                            <button class="btn btn-primary p-2 downloadItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-danger p-2 deleteItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img style="max-height:200px;" class="openImage img-thumbnail  mx-auto d-block border-0 p-2" src="https://drive.google.com/thumbnail?id=` + valueOfElement.extra_metadata.id + `" alt=" ` + valueOfElement.extra_metadata.name + `">
                            </div>
                          </div>
                        `);
                    } else if ($.inArray(valueOfElement.mime_type, xlsx_mime) != -1) {
                        $('#kotakDrive').append(`
                          <div class="col-3">
                            <div class="card addCardOverlaySpinner" style="height:300px;">
                                <div class="card-header p-3 text-wrap">
                                    <div class="d-flex mb-3">
                                        <div class="col-8 text-nowrap overflow-hidden">` + valueOfElement.extra_metadata.name + `</div>
                                        <div class="col-2">
                                            <button class="btn btn-primary p-2 downloadItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-danger p-2 deleteItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img style="max-height:200px;" class="img-thumbnail  mx-auto d-block border-0 p-2" src="/assets/img/spreadsheet.png" alt="">
                            </div>
                          </div>
                        `);
                    } else if ($.inArray(valueOfElement.mime_type, pdf_mime) != -1) {
                        $('#kotakDrive').append(`
                          <div class="col-3">
                            <div class="card addCardOverlaySpinner" style="height:300px;">
                                <div class="card-header p-3 text-wrap">
                                    <div class="d-flex mb-3">
                                        <div class="col-8 text-nowrap overflow-hidden">` + valueOfElement.extra_metadata.name + `</div>
                                        <div class="col-2">
                                            <button class="btn btn-primary p-2 downloadItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-danger p-2 deleteItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img style="max-height:200px;" class="img-thumbnail  mx-auto d-block border-0 p-2" src="/assets/img/pdf.png" alt="">
                            </div>
                          </div>
                        `);
                    } else if ($.inArray(valueOfElement.mime_type, doc_mime) != -1) {
                        $('#kotakDrive').append(`
                          <div class="col-3">
                            <div class="card addCardOverlaySpinner" style="height:300px;">
                                <div class="card-header p-3 text-wrap">
                                    <div class="d-flex mb-3">
                                        <div class="col-8 text-nowrap overflow-hidden">` + valueOfElement.extra_metadata.name + `</div>
                                        <div class="col-2">
                                            <button class="btn btn-primary p-2 downloadItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-danger p-2 deleteItem" data-path="` + valueOfElement.path + `">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img style="max-height:200px;" class="img-thumbnail mx-auto d-block border-0 p-2" src="/assets/img/doc.png" alt="">
                            </div>
                          </div>
                        `);
                    }
                }
            });

            $(window).on('load', function() {
                $('.addCardOverlaySpinner').removeClass('overlay-spinner');
            });
        }

        function ajaxRequest(url, method, data) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: method,
                url: url,
                data: data,
                beforeSend: function() {
                    $('.addCardOverlaySpinner').addClass('overlay-spinner');
                },
                success: function(response) {
                    if (response.param == 'get_all') {
                        responseDrive(response)
                        $('.addCardOverlaySpinner').removeClass('overlay-spinner');
                    }
                }
            });
        }

        ajaxRequest('dokumen/show', 'post', {
            folder: 'dokumen_baru',
            back: 'dokumen_baru'
        })

        $(document).on('click', '.card', function() {
            var param = $(this).data('param');
            if (param == 'dir') {
                var path = $(this).data('path');
                var back = $('#backs').attr('data-backs');
                $('#folderData').val(path)
                $('#kotakDrive').html('')
                $('#kotakDriveFolder').html('')
                ajaxRequest('dokumen/show', 'post', {
                    folder: path,
                    back: back
                })
            }
        });

        $(document).on('click', '#backs', function() {
            var back = $(this).attr('data-backs');
            $('#folderData').val(back)
            $('#kotakDrive').html('')
            $('#kotakDriveFolder').html('')
            ajaxRequest('dokumen/show', 'post', {
                folder: back,
                back: back
            })
        });

        $(document).on('click', '.openImage', function() {
            var url = $(this).attr('src');
            var alt = $(this).attr('alt');
            console.log(alt);
            $('#closeButtonOutExample').modal('show');
            $('.boxImage').html(`
                <div class="d-flex justify-content-center">
                    <img src="` + url + `" style="width:100%;">
                </div>
            `);

            $('.boxText').html(`
                <span class="fs-4 text-white">` + alt + `</span>
            `);
        });

        $(document).on('click', '.deleteItem', function() {
            var path = $(this).data('path');
            Swal.fire({
                title: "Menghapus Data ?",
                text: "Data Akan Dihapus Pada Google Drive Anda",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#kotakDrive').html('')
                    ajaxRequest('dokumen/destroy', 'post', {
                        path: path
                    })
                }
            });
        });

        $(document).on('click', '.downloadItem', function() {
            var path = $(this).data('path');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var xhr = $.ajax({
                url: 'dokumen/download',
                method: 'POST',
                data: {
                    path: path
                },
                xhrFields: {
                    responseType: 'blob'
                },
                beforeSend: function() {
                    $('.addCardOverlaySpinner').addClass('overlay-spinner');
                },
                success: function(data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = xhr.getResponseHeader("Files-Names");
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                    $('.addCardOverlaySpinner').removeClass('overlay-spinner');
                }
            });
        });

        $(document).on('click', '#btnUpload', function() {
            $('#modalUpload').modal('show')
        });

        $(document).on('click', '#btnFolder', function() {
            $('#modalFolder').modal('show')
        });

        $('#uploadClose').click(function(e) {
            e.preventDefault();
            var folder = $('#folderData').val();
            var back = $('#backs').attr('data-backs');
            dropzone.removeAllFiles()
            $('#kotakDrive').html('')
            ajaxRequest('dokumen/show', 'post', {
                folder: folder,
                back: back
            })
            $('#modalUpload').modal('hide')
        });

        $('#folderClose').click(function(e) {
            e.preventDefault();
            var folder = $('#folderData').val();
            var namaFolder = $('#namaFolder').val();
            var back = $('#backs').attr('data-backs');
            $('#kotakDrive').html('')
            $('#kotakDriveFolder').html('')
            ajaxRequest('dokumen/store', 'post', {
                folder: folder,
                nama_folder: namaFolder,
            })
            $('#modalFolder').modal('hide')
        });

        // $(document).on('hidden.bs.modal', function() {
        //     // klick modal hide
        //     var folder = $('#folderData').val();
        //     var back = $('#backs').attr('data-backs');
        //     dropzone.removeAllFiles()
        //     $('#kotakDrive').html('')
        //     ajaxRequest('dokumen/show', 'post', {
        //         folder: folder,
        //         back: back
        //     })
        // });
    </script>
@endpush
