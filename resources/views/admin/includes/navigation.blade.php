<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="{{ URL::to('admin/home') }}" class="logo">Trek <span class="lite">Nepal</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">                    
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>                    
            <li style="margin-left: 40px;">
                <a href="{{ URL::to('/') }}" target="__blank">Visit Site</a>
            </li>
        </ul>
        <!--  search form end -->                
    </div>

    <div class="top-nav notification-row">                
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="profile-ava">
                        <i class="icon-user"></i>
                    </span>
                    <span class="username">&nbsp;&nbsp;admin</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> My Profile</a>
                    </li>
                    <li>
                       {!! Form::open(array('url' => '/admin/logout')) !!}
                        <!-- <a href="#"><i class="icon_key_alt"></i> Log Out</a> -->
                        {!! Form::Submit('Logout',['class'=>'btn btn-logout']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>