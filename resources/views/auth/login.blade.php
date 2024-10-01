@extends('layout.master')
@section('login')
    <div id="root" class="h-100">
        <!-- Background Start -->
        <div class="fixed-background"></div>
        <!-- Background End -->

        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                <!-- Left Side Start -->
                <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                    <div class="min-h-100 d-flex align-items-center">
                        <div class="w-100 w-lg-75 w-xxl-50">
                            <div>
                                <div class="mb-5">
                                    <h1 class="display-3 text-white">Kopi Lampung</h1>
                                    <h1 class="display-6 text-white">Koordinasi pintar dalam pengelolaan keuangan daerah</h1>
                                </div>
                                <p class="h6 text-white lh-1-5 mb-5">
                                    Koordinasi pintar dalam pengelolaan keuangan daerah merupakan dashboard pendukung pegelolaan keuangan daerah, sekaligus aplikasi koordinasi pintar dalam pengelolaan keuangan daerah melalui forum yang di sediakan di dalam aplikasi dan terhubung langsung dengan AI
                                </p>
                                {{-- <div class="mb-5">
                                    <a class="btn btn-lg btn-outline-white" href="index.html">Learn More</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left Side End -->

                <!-- Right Side Start -->
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                        <div class="sw-lg-50 px-5">
                            <div class="sh-11">
                                {{-- <a href="index.html">
                                    <div class="logo-default"></div>
                                </a> --}}
                                <div class="w-50">
                                    <img class="img-thumbnail border-0" src="/assets/img/kopigold.png" alt="">
                                </div>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">Selamat Datang,</h2>
                                <h2 class="cta-1 text-primary">Silahkan Masuk!</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">Gunakan email dan password login yang valid.</p>
                            </div>
                            <div>
                                <form id="loginForm" class="tooltip-end-bottom" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <i data-acorn-icon="email"></i>
                                        <input class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <i data-acorn-icon="lock-off"></i>
                                        <input class="form-control pe-7" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->get('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Side End -->
            </div>
        </div>
    </div>
@endsection
