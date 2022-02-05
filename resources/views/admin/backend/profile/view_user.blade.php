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
              <h3 class="box-title">Client List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Client ID</th>

                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>NID</th>


                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alldata as $key => $user)

                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$user->id}}</td>

                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->address}}</td>
                      <td>{{$user->contact}}</td>


                      <td>{{$user->nid}}</td>
<td><a href="{{route('user.delete',$user->id)}}" class="btn btn-danger btn-flat mb-5" id="delete" >Delete</a>
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