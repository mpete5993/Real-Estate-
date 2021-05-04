
{{-- 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@include('layouts.header')

<div class="register-container" style="background-image:url(Images/main-slider/4.jpg
    )"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-4 register-form">
                    <div class="">
                        <h6>REGISTER</h6>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="">
                            <!--- Name --->
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-validation">
                                Name must be between 2 and 10 characters
                            </div>
                            <!--- Name --->

                            <!--- Email --->
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Email">
                            <div class="email-validation">
                                Enter a valid email
                              </div>

                            <!--- Email --->


                            <!--- Password --->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="password-validation">
                                Enter a valid password
                              </div>
                            <!--- Password --->

                              <!--- Password --->
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <div class="passwordConfirm-validation">
                                Enter a valid password
                              </div>
                              <!--- Password --->
                        </div>
                        <div class="">
                            <button>Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---===== register container   ====== ---->

    <script>

        // Form Blur Event Listeners
        document.getElementById('name').addEventListener('blur', validateName);
        document.getElementById('email').addEventListener('blur', validateEmail);
        document.getElementById('password').addEventListener('blur', validatePassword);
        document.getElementById('password-confirm').addEventListener('blur', validatePasswordConfirm);
        
    
        // Name validation
        function validateName() {
        const name = document.getElementById('name');
        const re = /^[a-zA-Z]([-']?[a-z]+)*( [a-zA-Z]([-']?[a-z]+)*)+$/;
    
            if(!re.test(name.value)){
                name.classList.add('is-invalid');
                document.querySelector('.input-validation').style.display = "block";
            } else {
                name.classList.remove('is-invalid');
                name.classList.add('is-valid');
                document.querySelector('.input-validation').style.display = "none";
            }
        }
    
        // Email validation
        function validateEmail() {
            const email = document.getElementById('email');
            const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    
            if(!re.test(email.value)){
                email.classList.add('is-invalid');
                document.querySelector('.email-validation').style.display = "block";
            } else {
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
                document.querySelector('.email-validation').style.display = "none";
            }
        }
    
        // password validation
        function validatePassword() {
            const password = document.getElementById('password');
            //const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})$/;
    
            if(password.value === ''){
                password.classList.add('is-invalid');
                document.querySelector('.password-validation').style.display = "block";
            } else {
                password.classList.remove('is-invalid');
                password.classList.add('is-valid');
                document.querySelector('.password-validation').style.display = "none";
            }
        }
    
        // Confirm password validation
        function validatePasswordConfirm() {
            const passwordconfirm = document.getElementById('password-confirm');
            //const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    
            if(passwordconfirm.value === ''){
                passwordconfirm.classList.add('is-invalid');
                document.querySelector('.passwordConfirm-validation').style.display = "block";
            } else {
                passwordconfirm.classList.remove('is-invalid');
                passwordconfirm.classList.add('is-valid');
                document.querySelector('.passwordConfirm-validation').style.display = "none";
    
            }
        }
    
    
        </script>