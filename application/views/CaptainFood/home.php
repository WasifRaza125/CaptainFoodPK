<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('CaptainFood/includes/header')?>

<body>

    <!-- Navigation -->
    <?php $this->load->view('CaptainFood/includes/navbar')?>

	<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
		
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo base_url()?>assets/img/banner-1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url()?>assets/img/banner2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url()?>assets/img/menu-parallax-bg.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>
		
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
		
    </header>
	
	
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->

            <section  id="HWW" >
				  <div class="inner-menu" style="margin-top:1%">
					<div class="container">
						        <div class="row">
							<div class="col-lg-12 text-center">
								<h1 class="section-heading" >How it works</h1>
								<hr class="primary">
							</div>
					</div>
						<div class="row " >
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/searchChef.png" height="170px" alt=""/>  
								   </div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
								<img src="<?php echo base_url()?>assets/img/select menu.png" height="170px" alt=""/>
							</div> 
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/order.png" height="170px" alt=""/>
									  
								   </div>
							</div>
							<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
									<img src="<?php echo base_url()?>assets/img/deliver.png" height="170px" alt=""/>
								</div>
							</div>
						</div>
					</div>
				   </div>
				</section>
        
    </div>
    <!-- /.container -->
        <!-- Portfolio Section -->
        
            <section id="chefs" style="background-image: url(<?php echo base_url()?>assets/img/menu4.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed;">
					<div class="inner-menu" style="margin-top:5%;">
						<div class="container">
							<div class="row">
							 <div class="col-lg-12 text-center">
								<h1 class="section-heading" style="color:#fff;">Our Super Chefs</h1>
								
							</div>	
							<?php 
								foreach ($results as $row)
								{
							?>
								<div class="col-md-4 col-sm-6">
									<!-- Inner page menu list -->
									<div class="menu-list">
										<!-- Menu item heading -->
										<h3><?php echo $row["Name"]?></h3>
										<!-- Image for menu list -->
										<img src="<?php echo base_url()?>assets/img/chefIntial.png" alt="" style="border:none;"/>
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Minimum Person Limit</h4>
											<!-- Dish price -->
											<span class="price pull-right">3 persons</span>
											<div class="clearfix"></div>
										</div>
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Currently Serving</h4>
											<!-- Dish price -->
											<span class="price pull-right">49 persons</span>
											<div class="clearfix"></div>
										</div>
																			<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<h4 class="pull-left">Cuisines</h4>
											<!-- Dish price -->
											<span class="price pull-right">Pakistani/Fast Food/Chineese</span>
											<div class="clearfix"></div>
										</div>
										
										<!-- Menu list items -->
										<div class="menu-list-item">
											<!-- Heading / Dish name -->
											<a href="<?php echo base_url().'Home/menu/'.$row["ChefID"]?>" class="btn btn-sm" 
											style="color:#fff;background-color:#F16521;">View Menus</a>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</section>
        
        <!-- /.row -->

        <!-- Features Section -->
    
        <section id="about" >
		<div class="inner-menu" >
			<div class="container">
					  <div class="row">
					  <div class="col-lg-12 text-center">
							<h1 class="section-heading">About Us</h1>
							
						</div>
						<br/>
						<div class="col-md-6"> 
						  <h2 class="lead"><b>Vision</b></h2>
						  <p>Captain Food is an online homemade food bazaar where you can cook, sell, buy or eat. Empowering citizens by providing them an opportunity to start their own cooking business right from home.</p>
						  <h2 class="lead"><b>Mission</b></h2>
						  <p>Captain Food’s mission is to serve freshly cooked homemade food right at your door step. With a number of Super Chefs of your city in our alliance, Captain Food gives you the power to choose, order and eat. Lunch time in offices or whatever the occasion is, order from anywhere because we serve everywhere.</p>
						  <h2 class="lead"><b>EAT</b></h2>
						  <p>If you are missing the taste of homemade food, if you want your food to be healthy and hygienic, if regularly eating out is affecting your health, then wait no more. Want your desired food for a day, week or a whole month? You just have to order once.</p>
						  <h2 class="lead"><b>COOK</b></h2>
						  <p>Cooking is your passion, make it your profession. Join hands with us and become a Super Chef. You simply cook and earn, while we do the rest.</p>
						</div>
						<div class="col-md-5 col-md-offset-1" style="margin-top:8%;">
						  <p><img src="<?php echo base_url()?>assets/img/CF.png" alt="" class="img-responsive"></p>
						</div>
					</div>
			</div>
			        </div>
			</section>
        <!-- Call to Action Section -->
        <!-- Contact Section -->
			<section id="contact" style="background-image: url(<?php echo base_url()?>assets/img/contact1.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed;padding:2%;">
				<div class="inner-menu" >
					<div class="container">
						<div class="row">
						  <div class="col-lg-12 text-center" style="margin-bottom:3%;">
								<h1 class="section-heading" style="color:#fff; !Important">Contact Us</h1>
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<form name="sentMessage" id="contactForm" novalidate action="<?php echo base_url()?>Home/SendEmail" method="Post" >
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
												<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
												<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
												<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<textarea rows="10" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-lg-12 text-center">
											<div id="success"></div>
											<button type="submit" class="btn btn-xl" style="background-color:#F16521;">Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>	
					<!-- Showcase End -->

        

        <!-- Footer -->
			<?php $this->load->view('CaptainFood/includes/footer')?>


    <!-- JS -->
			<?php $this->load->view('CaptainFood/includes/footer_js')?>
			

</body>

</html>
