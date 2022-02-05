@extends('front.front_master')
@section('front')
<div class="privacy wow zoomIn animated animated">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3>
        <form method="post" action="{{route('userpassword.update')}}">

            @csrf
          
            <p style="width: 350px;">

                <b>Current Password</b> <input type="password"  id="current_password"  name="current_password" class="form-control"
                    placeholder="Current Password" required="true">
                    @error('current_password')
                    <div class="error">{{ $message }}</div>
                    @enderror

                

            </p>

            <p style="width: 350px;">
                <b>New Password</b>
                <input type="password"  id="password" name="password" class="form-control" 
                    placeholder="New Password" required="true">

                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                
            </p>

            <p style="width: 350px;">
                <b>Confirm Password</b>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" 
                    placeholder="Confrim Password" required="true">
                    


                    @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                    @enderror
           


            </p>

            <p style="width: 350px;">
                <button type="submit"  value="Submit" class="btn-primary btn">Change</button>
            </p>
        </form>


    </div>
</div>





@endsection