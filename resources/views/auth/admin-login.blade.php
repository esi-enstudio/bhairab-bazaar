<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
    <meta name="keywords" content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">
    <title>Admin Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/img/apple-touch-icon.png') }}">

    <!-- Vite CSS & JS -->
    @vite(['resources/css/backend.css', 'resources/js/backend.js'])

    @livewireStyles
</head>
<body class="account-page bg-white">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper login-new">
                <div class="row w-100">
                    <div class="col-lg-5 mx-auto">
                        <div class="login-content user-login">
                            <div class="login-logo">
                                <img src="{{ asset('backend/assets/img/logo.svg') }}" alt="img">
                                <a href="index.html" class="login-logo logo-white">
                                    <img src="{{ asset('backend/assets/img/logo-white.svg') }}"  alt="Img">
                                </a>
                            </div>

                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf

                                <div class="card">
                                    <div class="card-body p-5">
                                        <div class="login-userheading">
                                            <h3>Sign In</h3>
                                            <h4>Access the Bhairab Bazaar panel using your email and passcode.</h4>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Email Address') }} <span class="text-danger"> *</span></label>
                                            <div class="input-group">
                                                <input
                                                    type="email"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    class="form-control border-end-0 @error('email') is-invalid @enderror"
                                                    required autocomplete="email"
                                                    autofocus
                                                    placeholder="Email Address"
                                                >
                                                <span class="input-group-text border-start-0 @error('email') is-invalid @enderror">
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Password') }} <span class="text-danger"> *</span></label>
                                            <div class="pass-group">
                                                <input
                                                    type="password"
                                                    class="pass-input form-control @error('password') is-invalid @enderror"
                                                    placeholder="Password"
                                                    name="password"
                                                    required
                                                    autocomplete="current-password"
                                                >
                                                <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="form-login authentication-check">
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <label for="remember" class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                            <input
                                                                type="checkbox"
                                                                class="form-control"
                                                                name="remember"
                                                                id="remember"
                                                                {{ old('remember') ? 'checked' : '' }}
                                                            >
                                                            <span class="checkmarks"></span>{{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                    <div class="text-end">
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}" class="text-orange fs-16 fw-medium">{{ __('Forgot Your Password?') }}</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-login">
                                            <button type="submit" class="btn btn-primary w-100">{{ __('Sign In') }}</button>
                                        </div>
                                        <div class="signinform">
                                            <h4>New on our platform?<a href="register.html" class="hover-a"> Create an account</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                            <p>Copyright &copy; 2025 Tasneem Creation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

@livewireScripts
</body>
</html>
