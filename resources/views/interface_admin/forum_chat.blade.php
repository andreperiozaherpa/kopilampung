@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1 class="mb-0 pb-0 display-4" id="title">
                            Forum Chat
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
                    <div class="col-12 col-md d-flex align-items-start justify-content-md-end">
                        <button type="button" class="btn btn-icon btn-icon-only btn-outline-primary ms-1 d-none" id="backButton">
                            <i data-acorn-icon="arrow-left"></i>
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-1 w-100 w-md-auto">
                            <i data-acorn-icon="plus"></i>
                            <span>Add Contact</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card mb-3 h-100">
                        <div class="d-flex justify-content-center card-header border-0 pb-0">
                            <ul class="nav nav-tabs nav-tabs-line card-header-tabs responsive-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#forumList" role="tab" type="button" aria-selected="true">Forum</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active show scroll-out" id="forumList" role="tabpanel">
                                    {{-- <a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item active" data-id="1">
                                        <div class="col-auto">
                                            <div class="sw-5 d-inline-block position-relative">
                                                <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
                                                <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div class="mb-1" id="contactName">Blaine Cottrell</div>
                                                    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Today 10:40</div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="badge bg-primary d-none" id="contactUnread">1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="col h-100 d-flex" id="chatView">
                        <div class="flex-column h-100 w-100 d-flex" id="chatMode">
                            <div class="card h-100 mb-2">
                                <div class="card-body d-flex flex-column h-100 w-100 position-relative">
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <div class="row g-0 sh-6 align-self-start" id="contactTitle">
                                            <div class="col-auto">
                                                <div class="sh-6 sw-6 d-inline-block position-relative">
                                                    <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground profile" alt="thumb">
                                                    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 status d-none"></i>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body d-flex flex-row pt-0 pb-0 pe-0 pe-0 ps-2 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div class="name">Buka Chat</div>
                                                        {{-- <div class="text-small text-muted last">{{ date('d-m-y H:i:s') }}</div> --}}
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

                                                        {{-- <div class="mb-2 card-content">
                                                            <div class="row g-2">
                                                                <div class="col-auto d-flex align-items-end">
                                                                    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                                        <img src="/assets/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
                                                                    </div>
                                                                </div>
                                                                <div class="col d-flex align-items-end content-container">
                                                                    <div class="d-inline-block sh-11 me-2 position-relative pb-4 rounded-md bg-separator-light text-alternate">
                                                                        <a href="/assets/img/product/large/product-1.webp" data-caption="cupcake.webp" class="lightbox h-100 attachment">
                                                                            <img src="/assets/img/product/large/product-1.webp" class="h-100 rounded-md-top">
                                                                        </a>
                                                                        <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
                                                                    </div>
                                                                    <div class="d-inline-block sh-11 me-2 position-relative pb-4 rounded-md bg-separator-light text-alternate">
                                                                        <a href="/assets/img/product/large/product-2.webp" data-caption="cupcake.webp" class="lightbox h-100 attachment">
                                                                            <img src="/assets/img/product/large/product-2.webp" class="h-100 rounded-md-top">
                                                                        </a>
                                                                        <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
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
                                    <input data-forum_id="1" data-name_id="{{ Auth::user()->id }}" data-name="{{ Auth::user()->name }}" data-thumb="{{ Auth::user()->thumb }}" class="form-control me-3 border-0 ps-2 py-2" placeholder="Message" rows="1" id="inputGemini" style="overflow: hidden; overflow-wrap: break-word; height: 37px;"></input>
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

            // function responseMassage(res) {
            //     $('#kotakPesan').append(`
        //         <div class="mb-2 card-content">
        //             <div class="row g-2">
        //                 <div class="col-auto d-flex align-items-end">
        //                     <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
        //                         <img src="`+res.+`" class="img-fluid rounded-xl chat-profile" alt="thumb">
        //                     </div>
        //                 </div>
        //                 <div class="col d-flex align-items-end content-container">
        //                     <div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
        //                         <span class="text">` + res.pesan + `</span>
        //                         <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">{{ date('d-m-y H:i:s') }}</span>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     `);

            //     $(".card-content:last-of-type")[0].scrollIntoView()
            // }

            function responseGetAll(res) {
                $('#kotakPesan').html('');
                $.each(res.data, function(indexInArray, valueOfElement) {
                    if (valueOfElement.unread > 1) {
                        $('#forumList').append(`
                        <a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-forum_id="` + valueOfElement.forum_id + `">
                            <div class="col-auto">
                                <div class="sw-5 d-inline-block position-relative">
                                    <img src="/assets/img/brand/dhl.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
                                    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <div class="mb-1 contactName">` + valueOfElement.forum + `</div>
                                        <div class="text-small text-muted clamp-line contactLastSeen" data-line="1">` + moment(valueOfElement.last).locale("id").format('LLL') + `</div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="badge bg-primary" id="contactUnread"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `);
                    } else {
                        $('#forumList').append(`
                        <a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-forum_id="` + valueOfElement.forum_id + `">
                            <div class="col-auto" >
                                <div class="sw-5 d-inline-block position-relative" >
                                    <img src="/assets/img/brand/dhl.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
                                    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between" >
                                    <div class="d-flex flex-column" >
                                        <div class="mb-1 contactName" >` + valueOfElement.forum + `</div>
                                        <div class="text-small text-muted clamp-line contactLastSeen" data-line="1">` + moment(valueOfElement.last).locale("id").format('LLL') + `</div>
                                    </div>
                                    <div class="d-flex" >
                                        <div class="badge bg-primary d-none" id="contactUnread"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        `)
                    }
                })

                var listForum = $('.contact-list-item');
                var titleForum = $('.contact-list-item .contactName').first().text()
                var titleDate = $('.contact-list-item .contactLastSeen').first().text()
                var linkImage = listForum.first().find('img').attr('src')

                $('.contact-list-item .contactName').first().click()
                listForum.first().addClass('active');
                baguetteBox.run('.lightbox');
            }

            function responseGetOne(res) {
                // console.log(res.count);
                $('#kotakPesan').html('');
                $.each(res.data, function(index, value) {
                    $.each(value.messages, function(indexMessages, valueMessages) {
                        if (valueMessages.attachments != '') {
                            var attachment;
                            $.each(valueMessages.attachments, function(indexAttachments, valueAttachments) {
                                attachment = `
                                        <div class="d-inline-block sh-11 me-2 position-relative pb-4 rounded-md bg-separator-light text-alternate">
                                            <a href="` + valueAttachments + `" data-caption="" class="lightbox h-100 attachment">
                                                <img src="` + valueAttachments + `" class="h-100 rounded-md-top">
                                            </a>
                                            <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
                                        </div>
                                     `
                            });

                            $('#kotakPesan').append(`
                                    <div class="mb-2 card-content">
                                        <div class="row g-2">
                                            <div class="col-auto d-flex align-items-end">
                                                <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                    <img src="` + valueMessages.thumb + `" class="img-fluid rounded-xl chat-profile" alt="thumb">
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-end content-container">
                                               ` + attachment + `
                                            </div>
                                        </div>
                                    </div>
                                `);
                        } else {
                            var timeSparator = $('.sparator_time');

                            if (moment(valueMessages.time).locale("id").format('LL') != timeSparator.last().text()) {
                                $('#kotakPesan').append(`
                                    <div class="d-flex justify-content-center">
                                        <span class="badge bg-quaternary sparator_time">` + moment(valueMessages.time).locale("id").format('LL') + `</span>
                                    </div>
                                `);
                            }

                            if (valueMessages.id == {{ Auth::user()->id }}) {
                                $('#kotakPesan').append(`
                                    <div class="mb-2 card-content">
                                        <div class="row g-2">
                                            <div class="col-auto d-flex align-items-end order-1">
                                                <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                    <img src="` + valueMessages.thumb + `" class="img-fluid rounded-xl" alt="thumb">
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-end content-container">
                                                <div class="card p-0 m-0">
                                                    <div class="card-header p-0 m-0 d-flex justify-content-end">
                                                        <span>` + valueMessages.name + `</span>
                                                    </div>
                                                    <div class="card-body p-0 m-0 border-3">
                                                        <div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
                                                            <span class="text">` + valueMessages.text + `</span>
                                                            <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">` + moment(valueMessages.time).format("HH:mm") + `</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            } else {
                                $('#kotakPesan').append(`
                                    <div class="mb-2 card-content">
                                        <div class="row g-2">
                                            <div class="col-auto d-flex align-items-end">
                                                <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                                    <img src="` + valueMessages.thumb + `" class="img-fluid rounded-xl chat-profile" alt="thumb">
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-end content-container">
                                                <div class="card p-0 m-0">
                                                    <div class="card-header p-0 m-0">
                                                        <span>` + valueMessages.name + `</span>
                                                    </div>
                                                    <div class="card-body p-0 m-0 border-3">
                                                        <div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
                                                            <span class="text">` + valueMessages.text + `</span>
                                                            <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">` + moment(valueMessages.time).format("HH:mm") + `</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            }
                        }
                    });
                });

                // console.log($(".card-content:last-of-type").getBoundingClientRect());
                if ($(".card-content:last-of-type").length == 1) {
                    // $(".card-content:last-of-type")[0].scrollIntoView()
                    var scrollableDiv = $(".card-content:last-of-type")[0];
                    scrollableDiv.scrollIntoView({
                        block: 'end'
                    });
                }
                baguetteBox.run('.lightbox');
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
                        if (response.param == 'get_all') {
                            responseGetAll(response)
                        } else if (response.param == 'chat') {
                            responseMassage(response)

                        } else if (response.param == 'get_one') {
                            responseGetOne(response)
                        }
                    }
                });
            }

            ajaxRequest('forum/show', 'post', {
                param: 'get_all'
            })

            var callback = function(forumId) {
                // console.log(forumId);
                var forumId = $('#inputGemini').attr('data-forum_id');
                var nameId = $('#inputGemini').attr('data-name_id');
                var pesan = $('#inputGemini').val();
                var name = $('#inputGemini').attr('data-name');
                var thumb = $('#inputGemini').attr('data-thumb');
                var time = moment().format();
                // console.log(time);
                var data = {
                    forumId: forumId,
                    nameId: nameId,
                    pesan: pesan,
                    name: name,
                    thumb: thumb
                }

                if (!pesan == '') {
                    var timeSparator = $('.sparator_time');

                    if (moment(time).locale("id").format('LL') != timeSparator.last().text()) {
                        $('#kotakPesan').append(`
                            <div class="d-flex justify-content-center">
                                <span class="badge bg-quaternary sparator_time">` + moment(time).locale("id").format('LL') + `</span>
                            </div>
                        `);
                    }

                    $('#kotakPesan').append(`
                        <div class="mb-2 card-content">
                            <div class="row g-2">
                                <div class="col-auto d-flex align-items-end order-1">
                                    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
                                        <img src="` + thumb + `" class="img-fluid rounded-xl" alt="thumb">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end align-items-end content-container">
                                    <div class="card p-0 m-0">
                                        <div class="card-header p-0 m-0 d-flex justify-content-end">
                                            <span>` + name + `</span>
                                        </div>
                                        <div class="card-body p-0 m-0 border-3">
                                            <div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
                                                <span class="text">` + pesan + `</span>
                                                <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">` + moment(time).format("HH:mm") + `</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);

                    $("#inputGemini").val('');
                    if ($(".card-content:last-of-type").length == 1) {
                        $(".card-content:last-of-type")[0].scrollIntoView();
                    }

                    ajaxRequest('forum/store', 'post', data);
                }

            };

            $("#inputGemini").keypress(function() {
                if (event.which == 13) callback();
            });
            $('#kirimPesan').click(callback);

            $(document).on('click', '.contact-list-item', function() {
                var forumId = $(this).data('forum_id');
                var nameId = $(this).data('name_id');
                var badge = $(this).find('i');

                $('#forumList .contact-list-item').removeClass('active');
                $(this).addClass('active');
                badge.addClass('d-none');

                var profile = $(this).find('#contactImage').attr('src')
                var name = $(this).find('.contactName').text()
                var last = $(this).find('.contactLastSeen').text()

                $('#inputGemini').attr('data-forum_id', forumId);
                $('#inputGemini').attr('data-name_id', nameId);

                $('#chatView .name').text(name)
                $('#chatView .last').text(last)
                $('#chatView .profile').attr('src', profile)

                ajaxRequest('forum/create', 'post', {
                    forumId: forumId,
                    param: 'get_one'
                })
            });
        });
    </script>
@endpush
