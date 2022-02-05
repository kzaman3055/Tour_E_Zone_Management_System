@extends('front.front_master')
@section('front')



@php
    $packages= DB::table('packages')->where('availability','Available')->take(3)->get();
	$availabepackages= DB::table('packages')->where('availability','Available')->count();

	$totalpackages= DB::table('packages')->count();
	$totalplace= DB::table('destinations')->count();

@endphp

	<div class="banner wow zoomIn animated animated">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> </h1>
		</div>
	</div>
	

	<div class="container wow zoomIn animated animated">
		<div class="rupes">
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a><i class="fa fa-credit-card	"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 50% OFF</h3>
					<h4><a>TRAVEL SMART</a></h4>
					
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a><i class="fa fa-h-square"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 70% OFF</h3>
					<h4><a>ON RESORTS AND RESTAURENTS</a></h4>
					
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a><i class="fa fa-mobile"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>EASY HELP</h3>
					<h4><a>24/7 HOTLINE</a></h4>
				
				</div>
					<div class="clearfix"></div>
			</div>
		
		</div>
	</div>

	<div class="rooms wow zoomIn animated animated">
		<div class="container">
		
	
			<div class="room-bottom">

	
		
		<h3>Package List</h3>
		@if($availabepackages>=1)

		@foreach ($packages as $package)

	
				<div class="rom-btm">

					<div  class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
						<br>
						<img src="{{(!empty($package->image))? url('upload/package_images/'.$package->image): url('upload/no_image.jpg') }}" class="img-responsive" alt="">
						<br>

					</div>
					<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
						<h4>Package Name: {{$package->name}} </h4>
						<h6>Package Type: {{$package->type}} </h6>
						<p><b>Package Location: </b>{{$package->place}}</p>
						<p><b>Transports: </b>{{$package->transport}}</p>

						<p style="text-align:justify"><b>Features: </b>{{$package->feature}}</p>
					</div>
					<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
						<h5>{{$package->price}} BDT</h5>
						<a href="{{route('package.details',$package->id)}}" class="view">Details</a>
					</div>
				<div class="clearfix"></div>
				
				</div>
	
				@endforeach
			
	<div><a href="{{route('packagelist.view')}}" class="view">View More Packages</a></div>
	</div>
				<div class="clearfix"></div>
				@else
<br>
<label class="inputLabel wow fadeInDown animated animated"> There are no package vailable right. Please visit later. Thank you.</label>

@endif
		</div>
	</div>

	
	
	<!--- routes ---->
	<div class="routes wow zoomIn animated animated">
		<div class="container">
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a ><i class="fa fa-map-marker"></i></a>
				</div>
				<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
					<h3>3000</h3>
					<p>Place We Manage</p>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left wow fadeInDown animated">
				<div class="rou-left">
					<a ><i class="fa fa-user"></i></a>
				</div>
				<div class="rou-rgt">
					<h3>500000</h3>
					<p>Regestered users
					</p>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a ><i class="fa fa-ticket"></i></a>
				</div>
				<div class="rou-rgt">
					<h3>7,00,00,000+</h3>
					<p>Booking</p>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	

	@endsection
