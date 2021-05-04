@include('layouts.header')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="register-container" style="background-image:url(Images/main-slider/4.jpg
    )"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-4 register-form">
                    <div class="">
                        <h6>LOGIN</h6>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" id="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="password-validation">
                                Enter a valid password
                              </div>
                              
                        </div>
                        <div class="">
                            <button>Login</button>
                        </div>
                    </form>
                    <div class="">
                        <span><a href="">Forgot your password?</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---===== register container   ====== ---->

    
    <script>
       

        // Form Blur Event Listeners
        document.getElementById('email').addEventListener('blur', validateEmail);
        document.getElementById('password').addEventListener('blur', validatePassword);
        
    
        // Email validation
        function validateEmail() {
            const email = document.getElementById('email');
            const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    
            if(!re.test(email.value)){
                email.classList.add('invalid');
                document.querySelector('.email-validation').style.display = "block";
            } else {
                email.classList.remove('invalid');
                email.classList.add('valid');
                document.querySelector('.email-validation').style.display = "none";
            }
        }
    
        // password validation
        function validatePassword() {
            const password = document.getElementById('password');
            //const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})$/;
    
            if(password.value === ''){
                password.classList.add('invalid');
                document.querySelector('.password-validation').style.display = "block";
            } else {
                password.classList.remove('is-invalid');
                password.classList.add('valid');
                document.querySelector('.password-validation').style.display = "none";
            }
        }
    
        </script>