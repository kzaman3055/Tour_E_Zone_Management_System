@extends('front.front_master')
@section('front')

@php
$datas= DB::table('page_infos')->where('id',1)->get();

@endphp

<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"></h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy wow zoomIn animated animated">
	<div class="container">

		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Contact Us.</h3>

        @foreach ($datas as $data)


        <p style="text-align:justify">
        {{$data->contact}}
        
            </p> 

            @endforeach


<br><br>

            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Inquiry Form</h3>

            <form name="enquiry" method="post" action="{{route('inquiry.store')}}">
                @csrf

                
                <p style="width: 350px;">
               
                   <b>Full name</b>  <input type="text" name="name" class="form-control" id="fname" placeholder="Full Name" required="">
           </p> 
       <p style="width: 350px;">
       <b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
           </p> 
       
           <p style="width: 350px;">
       <b>Mobile No</b>  <input type="text" name="contact" class="form-control" id="mobileno" maxlength="20" placeholder="Mobile No" required="">
           </p> 
       
           <p style="width: 350px;">
       <b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
           </p> 
           <p style="width: 350px;">
       <b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
           </p> 
       
                   <p style="width: 350px;">
       <button type="submit" name="submit1" class="btn-primary btn">Submit</button>






    </p>
</form>





		
        </div>










        
    </div>


@endsection