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

		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">About</h3>

        @foreach ($datas as $data)


        <p style="text-align:justify">
        {{$data->about}}
        






		
        </div>
    </div>
@endforeach


@endsection