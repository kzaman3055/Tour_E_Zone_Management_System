


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                            <div class="login-left">
                                    <ul>
                                        <li><a class="fb" href="#"><i></i>Facebook</a></li>
                                        <li><a class="goog" href="#"><i></i>Google</a></li>
                                        
                                    </ul>
                                </div>
                        <div class="login-right">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <h3>Sign in with your account  </h3>
<input type="email" id="email" name="email"  placeholder="Enter your Email"  required="">	
<input type="password" name="password" id="password" placeholder="Password" required="">	
                                
                                <input type="submit" name="signin" value="Log In">
                            </form>
                        </div>
                        <div class="clearfix"></div>								
                    </div>
                    <p>By logging in you agree to our <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>






