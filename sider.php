<div class="benner">
				<!-- slider -->
				<!--- img-slider --->
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides1.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img class="img-responsive" src="images/slide.jpeg" alt="">
					          <div class="slider-caption">
					          	<h1><span style="color:red ">QUALITY </span>SERVICE</h1><h2 style="color:#FFFFFF">A HOME FOR QUALITY REPAIR</h2>
					         	 <p align="right"></p>
								 <div align="left"><a class="more-btna" href="login.php"> <b>BOOK YOUR SERVICE</b></a>
			                       </div>
					          </div>
					        </li>
					        <li>
					          <img src="images/slide2.jpg" alt="">
					           <div class="slider-caption">
					          	<h1><span style="color:red" >SKILLED </span>TECHNICIANS</h1><h2 style="color:#FFFFFF">YOUR CAR IN GOOD HANDS</h2>
					          	<p></p>
								<div align="justify"><a class="more-btna" href="login.php">BOOK YOUR SERVICE</a>
	                             </div>
					           </div>
					        </li>
					        <li>
					          <img src="images/wheel.jpg" alt="">
					           <div class="slider-caption">
					           	<h1>WHEEL CARE & <b style="color:red">MAINTENANCE </b></h1>
					           <p>
							   
							   </p>
							   <div align="left"><a class="more-btna" href="login.php">BOOK YOUR SERVICE</a>
		                         </div>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>