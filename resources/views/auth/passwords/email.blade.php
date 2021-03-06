@extends('layouts.app')

@section('content')
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <img src="/Images/forgetpassword.jpg" alt="forget password image">
                        <a href="/login" class="signup-image-link">Already have an account</a>
                        <a href="/register" class="signup-image-link">Create new account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group ">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                {{-- <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" placeholder="E-mail" autofocus> --}}
                                <input id="email" type="email" class="textInput @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-button ">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="  {{ __('Send Password Reset Link') }}" />

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
