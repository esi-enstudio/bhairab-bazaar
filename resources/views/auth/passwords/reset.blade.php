<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairab Bazaar">
    <meta name="keywords" content="Bhairab Bazaar">
    <meta name="author" content="Bhairab Bazaar">
    <link rel="icon" href="{{ asset('frontend/images/favicon/1.png') }}" type="image/x-icon">
    <title>Reset Password</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    @vite(['resources/css/frontend.css', 'resources/js/frontend.js'])

    @livewireStyles
</head>

<body>

<!-- log in section start -->
<section class="log-in-section section-b-space forgot-section">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                <div class="image-contain">
                    <img src="{{ asset('frontend/images/inner-page/forgot.png') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Bhairab Bazaar</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @else
                                <h4>{{ __('Reset Password') }}</h4>
                            @endif
                        </div>

                        <div class="input-box">
                            <form class="row g-4" method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ $email ?? old('email') }}"
                                            required
                                            autocomplete="email"
                                            autofocus
                                            id="email"
                                            placeholder="Email Address"
                                        >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <label for="email">{{ __('Email Address') }}</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="password"
                                            placeholder="Password"
                                            name="password"
                                            required
                                            autocomplete="current-password"
                                        >

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="password">{{ __('Password') }}</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="password-confirm"
                                            placeholder="Password"
                                            name="password_confirmation"
                                            required
                                            autocomplete="new-password"
                                        >
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- log in section end -->

@livewireScripts
</body>
</html>
