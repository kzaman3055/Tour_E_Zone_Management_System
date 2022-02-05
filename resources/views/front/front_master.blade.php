
<!DOCTYPE HTML>
<html>
<head>

<title>Tour E Zone Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tour E Zome Managemnt System" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
<!-- Custom Theme files -->
<script src="{{ asset('frontend/js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!--animate-->
<link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css')}}" />
<script src="{{ asset('frontend/js/jquery-ui.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<script>
    new WOW().init();
</script>
<script>
    $(function() {
    $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<style>
.errorWrap {
padding: 10px;
margin: 0 0 20px 0;
background: #fff;
border-left: 4px solid #dd3d36;
-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
padding: 10px;
margin: 0 0 20px 0;
background: #fff;
border-left: 4px solid #b2bed4;
-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
</style>	

<!--//end-animate-->
</head>
<body>

    <div class="pageContent">
      @include('front.body.header')
      @yield('front')
    </div>
    @include('front.body.footer')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript">
      $(function(){
  
  $(document).on('click','#delete',function(e){
  
  e.preventDefault();
  var link = $(this).attr("href");
  
  
  
  
  Swal.fire({
    title: 'Are you sure?',
    text: "Cancel This Booking???",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes !!!'
  }).then((result) => {
    if (result.isConfirmed) {
  
      window.location.href = link
      Swal.fire(
        'Canceled!',
        'Booking has been Canceled.',
        'success'
      )
    }
  })
  
  
  
  
  
  });
  
  
      });
  
    </script>
    
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

   
 }
 @endif 
  </script>

</body>
</html>

