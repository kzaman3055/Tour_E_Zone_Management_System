


@if (!Auth::guest())
	@if(Auth::user()->is_admin==1)
	<div class="top-header">
		<div class="container">
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
					<li class="hm"><a href="{{route('admin.home')}}">Admin Dashboard</a></li>
			</ul>
			<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
				<li class="tol">Welcome: {{ Auth::user()->name }}</li>				
				<li class="sig"></li> 
				<li class="sigi"><a href="{{ route('admin.logout') }}" >/ Logout</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	@else
	<div class="top-header">
		<div class="container">
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="prnt"><a href="{{route('userprofile.view')}}">My Profile</a></li>

					<li class="prnt"><a href="{{route('userpassword.view')}}">Change Password</a></li>
					<li class="prnt"><a href="{{route('pendingbooking.view')}}">Booking Pending</a></li>

				<li class="prnt"><a href="{{route('purchasehistory.view')}}">Booking History</a></li>
			</ul>
			<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
				<li class="tol">Welcome: {{ Auth::user()->name }}</li>				
				<li class="sigi"><a href="{{ route('user.logout') }}">/ Logout</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	@endif




@else


<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Contact Us: +88017 00000000 </li>				
			<li class="sig"><a href="{{ route('register') }}" >Sign Up</a></li> 
			<li class="sigi"><a href="{{route('login')}}" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
@endif







<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="{{route('home')}}"><span>Tour E Zone Management System</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li class="lock-icon"><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="{{route('home')}}">Home</a></li>
								<li><a href="{{route('packagelist.view')}}">Tour Packages</a></li>
								<li><a href="{{route('privacy.view')}}">Privacy Policy</a></li>
								<li><a href="{{route('about.view')}}">About</a></li>
								<li><a href="{{route('contact.view')}}">Contact Us</a></li>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>