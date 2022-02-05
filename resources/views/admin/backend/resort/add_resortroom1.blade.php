@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update {{$RoomAddData->name}}'s Rooms</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="">
                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <div class="add_item">



                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{$RoomAddData->name}}" required="">

                                            </div>
                                        </div>

                                  


                                        <div class="form-group">
                                            <h5>Room Type <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="roomtypeid[]" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($roomtype as $key => $room_types)
                                                    <option value= "{{ $room_types->id }}">{{ $room_types->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>










                                            <div class="form-group">
                                              <h5>Full Mark <span class="text-danger">*</span></h5>
                                              <div class="controls">
                                           <input type="text" name="full_mark[]" class="form-control" > 
                                            </div>		 
                                          </div>
                                               </div><!-- End col-md-5 -->


                                       
                                    




                                        <div class="text-xs-right">
                                            <input type="submit" value="Update" style="float: right"
                                                class="btn btn-outline btn-rounded btn-success mb-5">
                                        </div>

                                    </div>





                                </div>



                                </div>














                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>












    </div>
</div>
<!-- /.content-wrapper -->












@endsection