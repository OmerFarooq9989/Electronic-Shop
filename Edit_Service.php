	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Repair</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/new1.css">
			<link rel="stylesheet" type="text/css" href="css/newses.css">

		</head>
<!-- 		<script>
        function InsertData(){
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: jQuery("form1").serialize()
            });
        }
    	</script> -->
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+953 012 3654 896">+953 012 3654 896</a>
				  				<a href="mailto:support@colorlib.com">support@colorlib.com</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
				<center>
			    <div class="container1 align-items-center main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			</center>
			  </header><!-- #header -->

			  			<!-- Start service Area -->
			<section class="service-area section-gap1" id="service">
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8 form">
						<?php
						session_start();
						echo '
						<form action="edit.php" method="POST">
                          <div class="top-row">
                                          <div class="field-wrap">
                                  <input type="text" id="service" name ="service" value='.$_SESSION["Description"].' required autocomplete="off" />
                              </div>
        
                              <div class="field-wrap">
                                <input type="text" id="provider" value = '.$_SESSION["Provider"].' name = "provider"required autocomplete="off"/>
                              </div>

                            <div class="field-wrap">
                              <input type="text" id="Price" name="price" value = '.$_SESSION["Price"].' required autocomplete="off"/>
                            </div>
          
                            <div class="field-wrap " style="display: none">
                              <input type="text" id="u_id" name="u_id" value = '.$_SESSION["id"].' class="disable" autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                              <input type="text" id="img" name="img" value = '.$_SESSION["image"].' required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                              <label>

                              </label>
                              <input type="text" id="type" name="type" value = '.$_SESSION["Type"].' required autocomplete="off"/>
                            </div>
                            <button class="button button-block" type="Submit">Edit</button>
                          </div>
                  </form>'
                  ?>
              </div>
              <div class="col-md-2">
              </div>
          </div>
			</section>
			<!-- End service Area -->

	
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Agency</h6>
								<p>
									The world has become so fast paced that people don???t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Team</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.									
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/mn-accordion.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
    		<script src="js/jquery.circlechart.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			      <script>
          $('.form').find('input, textarea').on('keyup blur focus', function (e) {
            var $this = $(this),
              label = $this.prev('label');
              if (e.type === 'keyup') {
                  if ($this.val() === '') {
                      label.removeClass('active highlight');
                  }  
                  else {
                      label.addClass('active highlight');
                    }
                } 
            else if (e.type === 'blur') {
                      if( $this.val() === '' ) {
                        label.removeClass('active highlight'); 
                        }
                        else {
                        label.removeClass('highlight');   
                        }   
                                     } 
                    else if (e.type === 'focus') {
                        if( $this.val() === '' ) {
                        label.removeClass('highlight'); 
                      } 
                      else if( $this.val() !== '' ) {
                        label.addClass('highlight');
                      }
                  }
            });

          $('.tab a').on('click', function (e) {
                e.preventDefault();
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
                target = $(this).attr('href');
                $('.tab-content > div').not(target).hide();
                $(target).fadeIn(600);
             });
  </script> 
		</body>
	</html>