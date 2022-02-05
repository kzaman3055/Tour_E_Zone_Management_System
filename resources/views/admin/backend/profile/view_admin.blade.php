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

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Admin List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>SL</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Contact</th>
                              <th>NID</th>


                              <th>Photo</th>
                              <th>Action</th>

                            
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($alldata as $key => $user)
                              
                          <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->address}}</td>
                              <td>{{$user->contact}}</td>


                              <td>{{$user->nid}}</td>

                              <td>	<div class="widget-user-image">
					  <img class="rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}" alt="User Avatar"  style =" width: 100px; height: 100px; border: 3px solid white;">
					</div></td>
                              <td>

<a href="{{route('admin.delete',$user->id)}}" class="btn btn-danger btn-flat mb-5" id="delete" >Delete</a>




                              </td>
                          </tr>
                          @endforeach

                      </tbody>
                    
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->












@endsection