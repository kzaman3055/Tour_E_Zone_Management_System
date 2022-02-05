<title>TMS - Log in </title>

<head>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/login.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/js/login.css') }}">

</head>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign Up </h2>
        <h5>Register For New Account </h5>

        <!-- Icon 
        <div class="fadeIn first">
            <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
        </div>-->
        @if (isset(Auth::user()->email))
            <script>
                window.location = "/main/successregister";
            </script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger" style="color:red">
                <h5>
                    @foreach ($errors->all() as $error)
                        <h5>{{ $error }}</h5>
                    @endforeach
                </h5>
            </div>
        @endif

        <!-- reg Form -->

        <form method="POST" action="{{ route('register') }}">
            @csrf





            <input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name"
                class="fadeIn first" placeholder="Name">
            <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" class="fadeIn second"
                placeholder="Email">
            <input type="password" id="password"  name="password" required autocomplete="new-password"
                class="fadeIn third" placeholder="password">
            <input type="password" id="password_confirmation"  name="password_confirmation" required
                autocomplete="new-password" class="fadeIn fourth" placeholder="Confirm password">

            <input type="submit" class="fadeIn fifth" value="{{ __('Register') }}">
        </form>





        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="{{ route('login') }}">Have An Account?</a>
         
        </div>

    </div>
</div>
