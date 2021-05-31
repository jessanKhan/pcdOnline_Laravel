<!------ Include the above in your HEAD tag ---------->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="{{ asset('maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet"
        id="bootstrap-css">
    <script src="{{ asset('maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <link href="{{ asset('/assets/css/admin_auth.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{ asset('/assets/images/newlogo.png') }}" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            {{-- <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div> --}}

        </div>
    </div>
</body>

</html>
