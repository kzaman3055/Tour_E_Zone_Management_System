@extends('front.front_master')
@section('front')


<div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Update Profile</h3>
        <form name="chngpwd" method="post" action="{{route('userprofile.update')}}">
            @csrf

            <p style="width: 350px;">

                <b>Name</b> <input type="text" name="name"  value="{{$editdata->name}}" class="form-control" required="">
            </p>

            <p style="width: 350px;">
                <b>Email</b>
                <input type="email" class="form-control" name="email" maxlength="10"    value="{{$editdata->email}}"  required="">
            </p>

            <p style="width: 350px;">
                <b>Mobile Number</b>
                <input type="text" class="form-control" name="contact" maxlength="10" value="{{$editdata->contact}}"
                    required="">
            </p>
            <p style="width: 350px;">
                <b>Address</b>
                <input type="text" class="form-control" name="address" maxlength="10" value="{{$editdata->address}}"
                    required="">
            </p>

            <p style="width: 350px;">
                <b>NID Number</b>
                <input type="text" class="form-control" name="nid" maxlength="10" value="{{$editdata->nid}}"
                    required="">
            </p>

            <p style="width: 350px;">
                <button type="submit" name="submit6" value="Submit" class="btn-primary btn">Updtae</button>
            </p>
        </form>


    </div>
</div>
@endsection