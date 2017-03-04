<header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        	</button>
        	<a class="navbar-brand" href="{{ URL::to('/')}}">
            <!-- <img src="img/logo.png" alt="logo" width="180" height="80"> --> 
            Trek Nepal
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav id="main-menu" class="collapse navbar-collapse navbar-right">
          <div class="signin-section" id="ss-box">
            @if (Auth::guard('user')->user())
              <ul class="right-data">
                    <li><a href="{{ URL::to('user/home') }}">My Profile</a></li>
                    <li>|</li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Username  :  {{ Auth::guard('user')->user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/user/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" style="color: #000!important;">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
              @else
              <button class="btn btn-primary btn-top" data-toggle="modal" data-target="#sign-up">
              Sign up</button>
              <label style="color: #ffffff; float: right; margin-top: 10px;">|</label>
              <button class="btn btn-primary btn-top" data-toggle="modal" data-target="#sign-in">
              Signin</button>
            @endif


          </div>
          <!-- sign in pop up box -->
          <div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
              aria-hidden="true" style="margin-top: 120px;">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              ×</button>
                          <h4 class="modal-title" id="myModalLabel">
                              Login</h4>
                      </div>
                      <div class="modal-body">
                          <div id="loginbox" style="margin-top:0px;" class="mainbox">                    
                      
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                              {!! Form::open(array('url' => 'user/login','class'=>'form-horizontal','role'=>'form')) !!}
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email','required','autofocus']) !!}
                                </div>                                               
                                <div style="margin-bottom: 15px" class="input-group">
                                  <span class="input-group-addon"><i class="icon-lock"></i></span>
                                  {!! Form::password('password',['class'=>'form-control','placeholder'=>'password','required','autofocus']) !!}
                                </div>
                                <div class="input-group">
                                    <div class="checkbox">
                                      <label>
                                        {!! Form::checkbox('remember',1,['id'=>'login-remember']) !!}
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                      </label>
                                    </div>
                                  </div>
                                <div style="margin-top:0px" class="form-group">
                                          <!-- Button -->                
                                    <div class="col-sm-12 controls">
                                      {!! Form::Submit('Login',['class'=>'btn btn-primary control-label btn-login']) !!}
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                        <span class="help-block" style="color:red;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" data-toggle="modal" data-target="#sign-up">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div> 

                              {!! Form::close() !!}
                                                
                          </div>                     
           
           
                      </div>
                  </div>
              </div>
          </div>

          <!-- sign up pop up box -->
          <div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
              aria-hidden="true" style="margin-top: 120px;">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              ×</button>
                          <h4 class="modal-title" id="myModalLabel">
                              Sign up</h4>
                      </div>
                      <div class="modal-body">
                          <div id="signupbox" class="mainbox">
                                      {!! Form::open(array('url' => 'user/register','class'=>'form-horizontal','id'=>'signupform','role'=>'form')) !!}
                                          <div id="signupalert" style="display:none" class="alert alert-danger">
                                              <p>Error:</p>
                                              <span></span>
                                          </div>

                                          <div class="form-group">
                                              <label for="fullname" class="col-md-3 control-label">Full Name</label>
                                              <div class="col-md-9">
                                                {!! Form::text('fullname',null,['class'=>'form-control','placeholder'=>'Fullname','required','autofocus']) !!}
                                              </div>
                                          </div>
                                          
                                                                          
                                          <div class="form-group">
                                              <label for="email" class="col-md-3 control-label">Email</label>
                                              <div class="col-md-9">
                                                {!! Form::email('emil',null,['class'=>'form-control','placeholder'=>'Email','required','autofocus']) !!}
                                              </div>
                                          </div>
                                              

                                          <div class="form-group">
                                              <label for="password" class="col-md-3 control-label">Password</label>
                                              <div class="col-md-9">
                                                  {!! Form::password('password',['class'=>'form-control','placeholder'=>'password','required','autofocus']) !!}
                                              </div>
                                          </div>
                                              

                                          <div class="form-group">
                                              <!-- Button -->                                        
                                              <div class="col-md-offset-3 col-md-9">
                                                  {!! Form::submit('Signup',['class'=>'btn btn-info btn-login','id'=>'btn-signup']) !!}
                                              </div>
                                          </div>
                                      {!! Form::close() !!}
                                   
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="/trekkingSitesList">Trekking Sites</a></li>
            <li><a href="#">Maps</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav><!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </nav><!-- nav -->
</header>