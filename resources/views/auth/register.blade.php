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
                                <input id="name" type="text" class="textInput" name="name" value="{{ old('name') }}"
                                    required autocomplete="name" placeholder="First Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="last_name" type="text" class="textInput" name="last_name"
                                    value="{{ old('last_name') }}" required autocomplete="last_name"
                                    placeholder="Last Name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" class="textInput" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" placeholder="E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input id="phone" type="text" class="textInput" name="phone" value="{{ old('phone') }}"
                                    required autocomplete="phone" placeholder="Phone Number" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home material-icons-name"></i></label>
                                <input id="address" type="text" class="textInput" name="address"
                                    value="{{ old('address') }}" required autocomplete="address" placeholder="address"
                                    autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="dob"><i class="zmdi  zmdi-calendar-check material-icons-name"></i></label>
                                <input id="dob" type="date" class="textInput" name="dob" value="{{ old('dob') }}"
                                    required autocomplete="dob" placeholder="Date of Birth" autofocus>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="gender"><i class="zmdi zmdi-male-female material-icons-name"></i></label>
                                <select class="textInput{{ $errors->has('gender') ? ' is-invalid' : '' }}" id="gender"
                                    name="gender">
                                    <option value="" selected>Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                {{-- <input id="gender" type="text" class="textInput" name="gender" value="{{ old('gender') }}"
                                    required autocomplete="gender" placeholder="gender" autofocus> --}}
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <div class="form-group">
                                <label for="nationality"><i class="zmdi zmdi-globe material-icons-name"></i></label>
                                {{-- <input id="nationality" type="text" class="textInput" name="nationality"
                                    value="{{ old('nationality') }}" required autocomplete="nationality"
                                    placeholder="Nationality" autofocus> --}}
                                <select class="textInput{{ $errors->has('nationality') ? ' is-invalid' : '' }}"
                                    id="nationality" name="nationality">
                                    <option value="" selected>Choose country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="qualification"><i class="zmdi zmdi-book material-icons-name"></i></label>
                                {{-- <input id="qualification" type="text" class="textInput" name="qualification"
                                    value="{{ old('qualification') }}" required autocomplete="qualification"
                                    placeholder="Qualification" autofocus> --}}
                                <select class="textInput{{ $errors->has('qualification') ? ' is-invalid' : '' }}"
                                    id="qualification" name="qualification">
                                    <option value="" selected>Choose Your Category</option>
                                    <option value="BUSINESS & MANAGEMENT">BUSINESS & MANAGEMENT</option>
                                    <option value="CODING & COMPUTING">CODING & COMPUTING</option>
                                    <option value="APPLIED SCI-TECH">APPLIED SCI-TECH</option>
                                    <option value="LANGUAGES & CULTURE">LANGUAGES & CULTURE</option>
                                </select>
                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>








                            <div class="form-group ">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password" type="password" class="textInput" name="password" required
                                    autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group ">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>


                                <input id="password-confirm" type="password" class="textInput" name="password_confirmation"
                                    required autocomplete="new-password" placeholder="Confirm Password">

                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the
                                     <a href="{{ route('terms') }}" target="_blank" class="term-service">Privacy Policy</a></label>
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
                        <figure><img src="{{ asset('Images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">Already Registered ?</a>
                    </div>
                </div>
            </div>
        </section>



    </div>




@endsection

@section('scripts')


@endsection
