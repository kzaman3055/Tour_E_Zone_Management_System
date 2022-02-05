@extends('admin.admin_master')
@section('admin')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
     

      <!-- Main content -->

	  <section class="content">
        <div class="row">

          <div class="col-12">



	  <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
						<label class="toggler toggler-danger text-white">
						  <input type="checkbox">
						</label>
						<a href="{{route('profile.edit')}}" style="float: right"
                                    class="btn btn-rounded btn-success mb-5 ">Edit Profile </a>
					  </div>

					  <div class="box-body text-center pb-50">
						<a href="#">
						  <img class="avatar avatar-xxl avatar-bordered" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}"alt="User Avatar"  style =" width: 100px; height: 100px; border: 3px solid white;" >
						</a>
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" >{{$user->name}}</a></h4>
						<span><i class="fa fa-envelope w-20"></i> {{$user->email}}</span>
					  </div>

					  <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
						<li>
						  <span class="opacity-60">Address</span><i class="fa fa-map-marker w-20"></i><br>
						  <span class="font-size-20">{{$user->address}}</span>
						</li>
						<li>
						  <span class="opacity-60">Contact</span><i class="fa fa-mobile w-20"></i><br>
						  <span class="font-size-20">{{$user->contact}}</span>
						</li>
						<li>
						  <span class="opacity-60">NID</span><i class="fa fa-address-card-o w-20"></i><br>
						  <span class="font-size-20">{{$user->nid}}</span>
						</li>
					  </ul>
					</div>			
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->





         
</div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>








@endsection