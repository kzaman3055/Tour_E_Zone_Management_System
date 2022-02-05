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
                    <h4 class="box-title">Add Transport Information</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('transport.store')}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Transport Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="true">

                                            </div>
                                        </div>


                                        
                                        <div class="form-group">
                                            <h5>Type <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="type" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($transporttype as $key => $transport_types)
                                                    <option value= "{{ $transport_types->name }}">{{ $transport_types->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Category <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="category" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($transportcategory as $key => $transport_categories)
                                                    <option value= "{{ $transport_categories->name }}">{{ $transport_categories->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>




  
                                        <div class="form-group">
                                            <h5>Destination <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="destination" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($destination as $key => $destinations)
                                                    <option value= "{{ $destinations->name }}">{{ $destinations->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <h5>Availability <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="availability" class="form-control" required="true"
                                                    aria-invalid="false">
                                                    <option value="" selected="" disabled="">Select Availability</option>
                                                    <option value= "Available">Available</option>
                                                    <option value= "Not Available">Not Available</option>
                                                </select>
                                            </div>
                                        </div>

                                       



                                    </div>


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Registratin No<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="rag_no" class="form-control"
                                                    required="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Driver Name <span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="driver_name" class="form-control"
                                                    required="false">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Contact <span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="driver_contact" class="form-control" required="false">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Price(B to B) <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price_BtoB" class="form-control" required="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Price(B to C) <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price_BtoC" class="form-control" required="true">
                                            </div>
                                        </div>

                                      



                                        


                                        <div class="text-xs-right">
                                            <input type="submit" value="Submit" style="float: right"
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