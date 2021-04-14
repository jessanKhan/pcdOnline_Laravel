@extends('layouts.app')

@section('content')

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">

                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="name" type="text" class="textInput" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <!-- <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                            <input id="phone" type="text" class="textInput" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone Number" autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> -->


                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-group ">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input id="password" type="password" class="textInput" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group ">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>


                            <input id="password-confirm" type="password" class="textInput" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">

                            <!-- <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button> -->
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />

                        </div>


                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('images/signup-image.jpg')}}" alt="sing up image"></figure>
                    <a href="/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>



</div>




@endsection