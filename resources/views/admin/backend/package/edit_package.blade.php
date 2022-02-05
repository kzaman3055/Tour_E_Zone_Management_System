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
                    <h4 class="box-title">Update Package Information</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('package.update',$editData->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Picture <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="controls">

                                            <img id="showimage" src="{{(!empty($editData->image))? url('upload/package_images/'.$editData->image): url('upload/no_image.jpg') }}"
                                            style ="width: 100px; width: 100px; border: 1px solid #000000;">

                                        </div>
                                        </div>

















                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{$editData->name}}" required="">

                                            </div>
                                        </div>
                                        


                                        <div class="form-group">
                                            <h5>Destination<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="place" class="form-control" required="true"
                                                    aria-invalid="false">
                                                   
                                                    <option value="" selected="" disabled="">Select Destination</option>
                                                    
                                                    @foreach ($destination as $key => $destinations)
                                                    <option value= "{{ $destinations->name }}"{{($editData->place== "$destinations->name" ?"selected":"")}}>{{ $destinations->name }}</option>
                                                    @endforeach




                                                </select>
                                            </div>
                                        </div>

                
                                        <div class="form-group">
                                            <h5>Type <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="type" class="form-control" required="true"
                                                    aria-invalid="false">
                                                   
                                                    <option value="" selected="" disabled="">Select  Type</option>
                                                    
                                                    @foreach ($packagedata as $key => $package_types)
                                                    <option value= "{{ $package_types->name }}"{{($editData->type== "$package_types->name" ?"selected":"")}}>{{ $package_types->name }}</option>
                                                    @endforeach




                                                </select>
                                            </div>
                                        </div>
                                        






                                        <div class="form-group">
                                            <h5>Price <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price" class="form-control"
                                                    value="{{$editData->price}}" required="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Transport <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="transport" class="form-control" required="true"
                                                    aria-invalid="false">
                                                   
                                                    <option value="" selected="" disabled="">Select Transport Type</option>
                                                    
                                                    @foreach ($transportdata as $key => $transport_types)
                                                    <option value= "{{ $transport_types->name }}"{{($editData->transport== "$transport_types->name" ?"selected":"")}}>{{ $transport_types->name }}</option>
                                                    @endforeach




                                                </select>
                                            </div>
                                        </div>















                                    </div>


                                    <div class="col-md-6">




                                      













                                        <div class="form-group">
                                            <label>Feature  <span class="text-danger">*</span></label>
                                            <textarea rows="5" cols="5" name="feature" class="form-control" required='true' >{{$editData->feature}}</textarea>
                                        </div>                                      
  
                                        <div class="form-group">
                                            <label>Detail <span class="text-danger">*</span></label>
                                            <textarea  rows="5" cols="5" name="detail" class="form-control"   required='true' > {{$editData->detail}}</textarea>
                                        </div>  



                                        <div class="form-group">
                                            <h5>Availability<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="availability" class="form-control" required="true"
                                                    aria-invalid="false">
                                                   
                                                    <option value="" selected="" disabled="">Select Availability</option>
                                                    <option value="Available" {{($editData->availability== "Available" ?"selected":"")}} >Available</option>
                                                    <option value="Not Available" {{($editData->availability== "Not Available" ?"selected":"")}} >Not Available</option>

                                                   




                                                </select>
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