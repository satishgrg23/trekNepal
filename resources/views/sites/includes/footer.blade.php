	<!-- Footer Section Begin  -->
<section class="footer">
  <div class="container">
    <div class="top-text">Connect with Us</div>
    <div class="col-md-12 col-sm-12 links">
      <ul>
        <li class="social-icons">
          <a href="#" data-toggle="tooltip" title="Some tooltip text!">
            <div class="circle">
              <i class="icon icon-facebook"></i>
            </div>
          </a>
          <a href="#">
            <div class="circle">
              <i class="icon icon-twitter"></i>
            </div>
          </a>
          <a href="#">
            <div class="circle">
              <i class="icon icon-google-plus"></i>
            </div>
          </a>
          <a href="#">
            <div class="circle">
              <i class="icon icon-linkedin"></i>
            </div>
          </a>
          <a href="#">
            <div class="circle">
              <i class="icon icon-pinterest"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div class="col-md-12 col-sm-12 copyright">
      <h6>&copy; 2016 All right reserved. Designed by Satish Gurung</h6>
    </div>
  </div><!--/.container -->
</section>
<!-- Footer Section End  -->
  <!--
		|**************************************************************************
		| Javascript
		|**************************************************************************
	-->
	<!-- JQuery -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<!-- Main JS -->
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
	<!-- Slick Slider JS -->
	<script type="text/javascript" src="{{ URL::asset('slick/slick.min.js') }}"></script>
	<!-- Goole Map JS -->
    

    <script type="text/javascript">
    $(document).ready(function(){
      $('.ts-gallery').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
      });
    });
      
  </script>
	
