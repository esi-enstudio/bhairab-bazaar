<div class="main-wrapper">
    <div class="account-content">
        <div class="login-wrapper login-new">
            <div class="row w-100">
                <div class="col-lg-5 mx-auto">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="{{ asset('backend/assets/img/logo.svg') }}" alt="img">
                            <a href="#" class="login-logo logo-white">
                                <img src="{{ asset('backend/assets/img/logo-white.svg') }}"  alt="Img">
                            </a>
                        </div>

                        {{-- Form ট্যাগ পরিবর্তন করা হয়েছে --}}
                        <form wire:submit="login">
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
                                                {{-- wire:model ব্যবহার করা হয়েছে --}}
                                                wire:model="email"
                                                class="form-control border-end-0 @error('email') is-invalid @enderror"
                                                autocomplete="email"
                                                autofocus
                                                placeholder="Email Address"
                                            >
                                            <span class="input-group-text border-start-0 @error('email') border-danger @enderror">
                                                <i class="ti ti-mail"></i>
                                            </span>
                                        </div>
                                        @error('email')
                                        {{-- এরর মেসেজ দেখানোর জন্য সহজ পদ্ধতি --}}
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">{{ __('Password') }} <span class="text-danger"> *</span></label>
                                        <div class="pass-group">
                                            <input
                                                type="password"
                                                {{-- wire:model ব্যবহার করা হয়েছে --}}
                                                wire:model="password"
                                                class="pass-input form-control @error('password') is-invalid @enderror"
                                                placeholder="Password"
                                                autocomplete="current-password"
                                            >
                                            <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                        </div>
                                        @error('password')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-login authentication-check">
                                        <div class="row">
                                            <div class="col-12 d-flex align-items-center justify-content-between">
                                                <div class="custom-control custom-checkbox">
                                                    <label for="remember" class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                        <input
                                                            type="checkbox"
                                                            {{-- wire:model ব্যবহার করা হয়েছে --}}
                                                            wire:model="remember"
                                                            class="form-control"
                                                            id="remember"
                                                        >
                                                        <span class="checkmarks"></span>{{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                                {{-- Forgot Password লিঙ্ক এখানে রাখা যেতে পারে --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-login">
                                        {{-- বাটন পরিবর্তন করা হয়েছে --}}
                                        <button type="submit" class="btn btn-primary w-100">
                                            <span wire:loading.remove wire:target="login">
                                                {{ __('Sign In') }}
                                            </span>
                                            {{-- লোডিং স্পিনার --}}
                                            <span wire:loading wire:target="login">
                                                Processing...
                                            </span>
                                        </button>
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
