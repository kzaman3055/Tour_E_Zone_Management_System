<title>TMS - Log in </title>

<head>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/login.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/js/login.js') }}">


</head>
<div class="wrapper fadeInDown">
    <div id="formContent">


        <!-- Icon -->
        <!-- <div class="fadeIn first">
        <img src="{{ asset('backend/images/mec.png') }}" id="icon" alt="User Icon" style="width:100px;height:100px;" />

        
      </div>-->

        <!-- Tabs Titles -->
        <h2 class="active"> Sign In </h2>
        <h5>Welcome to TMS </h5>



        @if (isset(Auth::user()->email))
            <script>
                window.location = "/main/successlogin";
            </script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger" style="color: red">
                <h5>
                    @foreach ($errors->all() as $error)
                        <h5>{{ $error }}  </h5>
                    @endforeach
                </h5>
            </div>
        @endif




        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" id="email" name="email" class="fadeIn second" placeholder="login">
            <input type="password" id="password" name="password" class="fadeIn third" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="{{ route('register') }}">Register</a>
            

            
        </div>

    </div>
</div>
