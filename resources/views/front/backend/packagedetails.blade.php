@extends('front.front_master')
@section('front')
<div class="selectroom wow zoomIn animated animated">
	<div class="container">



		<form name="book" method="post" action="{{route('booking.store')}}">
			@csrf

			<div class="selectroom_top">
				<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="{{(!empty($data->image))? url('upload/package_images/'.$data->image): url('upload/no_image.jpg') }}" class="img-responsive" alt=""" class="img-responsive" alt="">
				</div>
				<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
					<h2> Package Name: {{$data->name}}</h2>
					<p><b>Package Type:</b>  {{$data->type}}</p>
					<p><b>Package Location:</b>  {{$data->place}}</p>
					<p><b>Transports:</b> {{$data->transport}}</p>

					<p style="text-align:justify"><b>Features:</b> {{$data->feature}}</p>

					<p style="text-align:justify"> <b> Package Details:</b> {{$data->detail}}</p>

					<p>
						<b>Package Price: {{$data->price}} BDT </b>
					</p>

					@if (!Auth::guest())
					@if(Auth::user()->is_admin==0)


					@php
					$user =Auth::user();
					@endphp

					<input type="hidden" name="user_id" value="{{$user->id}}" required="" readonly>

					<input type="hidden" name="user_name" value="{{$user->name}}" required="" readonly>
					<input type="hidden" name="user_email" value="{{$user->email}}" required="" readonly>
					<input type="hidden" name="user_contact" value="{{$user->contact}}" required="" readonly>
					<input type="hidden" name="package_id" value="{{$data->id}}" class="form-control">
					<input type="hidden" name="status"  value="Pending" class="form-control" >



					<div class="ban-bottom">
						<div class="bnr-right">
							<label class="inputLabel">From</label>
							<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy" name="fromdate"
								required="">
						</div>
					
					</div>

					@endif

					@endif


					<div class="clearfix"></div>
					
				</div>
			
				<div class="clearfix"></div>
			</div>



			@if (!Auth::guest())
			@if(Auth::user()->is_admin==0)
			<div class="selectroom_top">
				<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms"
					data-wow-delay="500ms"
					style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
					<ul>
						<li class="spe">






							<label class="inputLabel">Any Comment??</label>
							<input class="special" type="text" name="user_comment" required="">
						</li>
						<li class="spe" align="center">
							<button type="submit" name="submit" class="btn-primary btn">Book</button>
						</li>
						@endif
						@else


						<a href="#" style="float: right;" data-toggle="modal" data-target="#myModal4"
							class="btn-primary btn">
							Book</a>
						</li>




						<div class="modal fade" id="myModal4" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content modal-info">

									<div class="modal-body modal-spa">


										<p style="text-align:center">Please Sign In / Sign Up before Bookig any Package,
											Thank You. </p>





									</div>
								</div>
							</div>
						</div>














						@endif

						<div class="clearfix"></div>



					</ul>
				</div>

			</div>
		</form>


	</div>
</div>
@endsection