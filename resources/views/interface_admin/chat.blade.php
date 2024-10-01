@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1 class="mb-0 pb-0 display-4" id="title">
                            Chat Gemini
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
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="col h-100 d-flex" id="chatView">
                        <div class="flex-column h-100 w-100 d-flex" id="chatMode">
                            <div class="card h-100 mb-2">
                                <div class="card-body d-flex flex-column h-100 w-100 position-relative">
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="row g-0 sh-6 align-self-start" id="contactTitle">
                                            <div class="col-auto">
                                                <div class="sh-6 sw-6 d-inline-block position-relative">
                                                    <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground profile" alt="thumb">
                                                    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 status"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body d-flex flex-row pt-0 pb-0 pe-0 pe-0 ps-2 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div class="name">gemini</div>
                                                        <div class="text-small text-muted last">{{ date('d-m-y H:i:s') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator-light mb-3"></div>

                                    {{-- box massage --}}
                                    <div class="h-100 mb-n2 scroll-out">
                                        <div class="h-100 os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-host-transition">
                                            <div class="os-resize-observer-host observed">
                                                <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                                            </div>
                                            <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                                                <div class="os-resize-observer"></div>
                                            </div>
                                            <div class="os-content-glue" style="margin: 0px -15px; width: 1011px; height: 339px;"></div>
                                            <div class="os-padding">
                                                <div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;">
                                                    <div class="os-content" style="padding: 0px 15px; height: 100%; width: 100%;" id="kotakPesan">
                                                        <div class="mb-2 card-content"></div>
                                                        {{--
                                                        <div class="mb-2 card-content">
                                                            <div class="row g-2">
                                                                <div class="col-auto d-flex align-items-end order-1">
                                                                    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                                        <img src="/assets/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
                                                                    </div>
                                                                </div>
                                                                <div class="col d-flex justify-content-end align-items-end content-container">
                                                                    <div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
                                                                        <span class="text">Toffee croissant icing toffee. Sweet roll chupa chups marshmallow.</span>
                                                                        <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:10</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2 card-content">
                                                            <div class="row g-2">
                                                                <div class="col-auto d-flex align-items-end">
                                                                    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                                        <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
                                                                    </div>
                                                                </div>
                                                                <div class="col d-flex align-items-end content-container">
                                                                    <div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
                                                                        <span class="text">And I see you soon!</span>
                                                                        <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">21:22</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                                                <div class="os-scrollbar-track os-scrollbar-track-off">
                                                    <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                                                </div>
                                            </div>
                                            <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                                                <div class="os-scrollbar-track os-scrollbar-track-off">
                                                    <div class="os-scrollbar-handle" style="height: 29.5909%; transform: translate(0px, 234.656px);"></div>
                                                </div>
                                            </div>
                                            <div class="os-scrollbar-corner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- input kirim --}}
                            <div class="card">
                                <div class="card-body p-0 d-flex flex-row align-items-center px-3 py-3">
                                    <input class="form-control me-3 border-0 ps-2 py-2" placeholder="Message" rows="1" id="inputGemini" style="overflow: hidden; overflow-wrap: break-word; height: 37px;"></input>
                                    <div class="d-flex flex-row">

                                        <button class="btn btn-icon btn-icon-only btn-primary mb-1 rounded-xl ms-1" id="kirimPesan" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-chevron-right undefined">
                                                <path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(".card-content:last-of-type")[0].scrollIntoView()

            function responseMassage(res) {
                $('#kotakPesan').append(`
                    <div class="mb-2 card-content">
                        <div class="row g-2">
                            <div class="col-auto d-flex align-items-end">
                                <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                    <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
                                </div>
                            </div>
                            <div class="col d-flex align-items-end content-container">
                                <div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
                                    <span class="text">` + res.pesan + `</span>
                                    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">{{ date('d-m-y H:i:s') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `);

                var scrollableDiv = $(".card-content:last-of-type")[0];
                scrollableDiv.scrollIntoView({
                    block: 'end'
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
                    success: function(response) {
                        if (response.param == 'chat') {
                            responseMassage(response)
                        }
                    }
                });
            }

            var callback = function() {
                var pesan = $('#inputGemini').val();
                var data = {
                    pesan: pesan,
                }

                $('#kotakPesan').append(`
                    <div class="mb-2 card-content">
                        <div class="row g-2">
                            <div class="col-auto d-flex align-items-end order-1">
                                <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                    <img src="/assets/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-end content-container">
                                <div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
                                    <span class="text">` + pesan + `</span>
                                    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">{{ date('d-m-y H:i:s') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
                $("#inputGemini").val('');
                $(".card-content:last-of-type")[0].scrollIntoView();
                ajaxRequest('/chat/ai/update', 'post', data);
            };

            $("#inputGemini").keypress(function() {
                if (event.which == 13) callback();
            });

            $('#kirimPesan').click(callback);
        });
    </script>
@endpush
