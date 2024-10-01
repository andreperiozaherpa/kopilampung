<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <div class="logo position-relative">
            {{-- <a href="Dashboards.Default.html">
                <div class="img"></div>
            </a> --}}
            <a href="">
                <div class="d-flex">
                    <img src="/assets/img/kopi.png" alt="">
                </div>
            </a>
        </div>
        <div class="language-switch-container">
            <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                EN
            </button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">DE</a>
                <a href="#" class="dropdown-item active">EN</a>
                <a href="#" class="dropdown-item">ES</a>
            </div>
        </div>
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="profile" alt="profile" src="{{ Auth::user()->thumb }}" />
                <div class="name">{{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
                <div class="row mb-3 ms-0 me-0">
                    <div class="col-12 ps-1 mb-2">
                        <div class="text-extra-small text-primary">ACCOUNT</div>
                    </div>
                    <div class="col-6 ps-1 pe-1">
                        <ul class="list-unstyled">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-link p-1 m-1" href="#">
                                        <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                        <span class="align-middle">Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled list-inline text-center menu-icons">
            <li class="list-inline-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                    <i data-acorn-icon="search" data-acorn-size="18"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" id="pinButton" class="pin-button">
                    <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                    <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" id="colorButton">
                    <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                    <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                    <div class="position-relative d-inline-flex">
                        <i data-acorn-icon="bell" data-acorn-size="18"></i>
                        <span class="position-absolute notification-dot rounded-xl"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                    <div class="scroll">
                        <ul class="list-unstyled border-last-none">
                            <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                <img src="/assets/img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                <div class="align-self-center">
                                    <a href="#">Joisse Kaycee just sent a new comment!</a>
                                </div>
                            </li>
                            <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                <img src="/assets/img/profile/profile-2.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                <div class="align-self-center">
                                    <a href="#">New order received! It is total $147,20.</a>
                                </div>
                            </li>
                            <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                <img src="/assets/img/profile/profile-3.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                <div class="align-self-center">
                                    <a href="#">3 items just added to wish list by a user!</a>
                                </div>
                            </li>
                            <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                                <img src="/assets/img/profile/profile-6.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                                <div class="align-self-center">
                                    <a href="#">Kirby Peters just sent a new message!</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    <a href="/dashboard" data-href="home">
                        <i data-acorn-icon="home" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="#chat" data-href="Apps.html">
                        <i data-acorn-icon="messages" class="icon" data-acorn-size="18"></i>
                        <span class="label">chat</span>
                    </a>
                    <ul id="chat">
                        <li>
                            <a href="/chat/ai">
                                <span class="label">Chat AI</span>
                            </a>
                        </li>
                        <li>
                            <a href="/chat/forum">
                                <span class="label">Forum Diskusi dan Informasi</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#dokumen" data-href="Apps.html">
                        <i data-acorn-icon="book" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dokumen</span>
                    </a>
                    <ul id="dokumen">
                        <li>
                            <a href="/dokumen">
                                <span class="label">Dokumen</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="#keuangan" data-href="Apps.html">
                        <i data-acorn-icon="book" class="icon" data-acorn-size="18"></i>
                        <span class="label">Informasi Keuangan</span>
                    </a>
                    <ul id="keuangan">
                        <li>
                            <a href="/keuangan">
                                <span class="label">Dokumen</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="#kalender" data-href="Apps.html">
                        <i data-acorn-icon="calendar" class="icon" data-acorn-size="18"></i>
                        <span class="label">Kalender</span>
                    </a>
                    <ul id="kalender">
                        <li>
                            <a href="/kalendar">
                                <span class="label">Kalender</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#managemen_tugas" data-href="Apps.html">
                        <i data-acorn-icon="office" class="icon" data-acorn-size="18"></i>
                        <span class="label">Managemen Tugas</span>
                    </a>
                    <ul id="managemen_tugas">
                        <li>
                            <a href="/managemen_tugas/bidang">
                                <span class="label">Tugas Bidang</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="mobile-buttons-container">
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-acorn-icon="menu"></i>
            </a>
        </div>
    </div>
    <div class="nav-shadow"></div>
</div>
