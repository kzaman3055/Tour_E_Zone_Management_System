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
                    <h4 class="box-title">Update Rooms Data</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('resortroom.update',$editData->id)}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Total Room <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="totalroomno" class="form-control"
                                                    value="{{$editData->totalroomno}}" required="">

                                            </div>
                                        </div>

										
                                        <div class="form-group">
                                            <h5> Feature<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="feature" class="form-control"
                                                    value="{{$editData->feature}}" required="">

                                            </div>
                                        </div>
                                        

                                    </div>


                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <h5> B2B Price<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="B2B" class="form-control"
                                                    value="{{$editData->B2B}}" required="">

                                            </div>
                                        </div>


										<div class="form-group">
                                            <h5>B2C Price <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="B2C" class="form-control"
                                                    value="{{$editData->B2C}}" required="">

                                            </div>
                                        </div>
                                        








                                        <div class="text-xs-right">
                                            <input type="submit" value="Update" style="float: right"
                                                class="btn btn-outline btn-rounded btn-success mb-5">
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