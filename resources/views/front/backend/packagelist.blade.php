@extends('front.front_master')
@section('front')

@php
$packages= DB::table('packages')->where('availability','Available')->get();
$availabepackages= DB::table('packages')->where('availability','Available')->count();


@endphp

<div class="banner-3 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
			style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> </h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms wow zoomIn animated animated">
	<div class="container">

		<div class="room-bottom">
			<h3>Package List</h3>

@if($availabepackages>=1)
			@foreach ($packages as $package)



			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<br>
					<img src="{{(!empty($package->image))? url('upload/package_images/'.$package->image): url('upload/no_image.jpg') }}"  alt="" class="img-responsive" >
					<br>
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: {{$package->name}}</h4>
					<h6>Package Type: {{$package->type}} </h6>
					<p><b>Package Location: </b>{{$package->place}}</p>
					<p><b>Transports: </b>{{$package->transport}}</p>
					<p style="text-align:justify"><b>Features: </b>{{$package->feature}}</p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>{{$package->price}} BDT </h5>
					<a href="{{route('package.details',$package->id)}}" class="view">Details</a>
				</div>
				<div class="clearfix"><br>
				</div>
			</div>
			@endforeach
@else
<br>
<label class="inputLabel wow fadeInDown animated animated"> There are no package vailable right. Please visit later. Thank you.</label>

@endif



		</div>
	</div>
</div>
@endsection