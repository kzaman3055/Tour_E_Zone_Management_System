@extends('front.front_master')
@section('front')


<div class="privacy wow zoomIn animated animated">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Profile</h3>
        <form name="chngpwd" action="{{route('userprofile.edit')}}">

            <p style="width: 350px;">

                <b>Name: </b> {{$editdata->name}}
            </p>

            <p style="width: 350px;">
                <b>Email: </b>
                {{$editdata->email}}
            </p>

            <p style="width: 350px;">
                <b>Mobile Number: </b>
                {{$editdata->contact}}
            </p>
            <p style="width: 350px;">
                <b>Address: </b>
               {{$editdata->address}}
            </p>

            <p style="width: 350px;">
                <b>NID Number: </b>
              {{$editdata->nid}}
            </p>
            <p style="width: 350px;">
                <button   class="btn-primary btn">Edit Profile</button>
            </p>
           
        </form>


    </div>
</div>
@endsection