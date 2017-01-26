  @extends("layout")
@section("css")

@section("content")

 <section id="about-us">
        <div class="container">
        <title>{{$title}}</title>
			<div class="center wow fadeInDown">
				<h2>About Us</h2>
				<p class="lead">We are team of three members from Gaza City who have decided to create this project 
to help people and raise the awareness of our community towards their health and medcal care
You will find our identification tickets below</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="{{asset('images/maan.jpg')}}" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="{{asset('images/mn.jpg')}}" class="img-responsive" alt=""> 
					   </div> 
					  
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
					<p class="lead">We are an Information Technology Students and we have the next skills
which we have used it to get this project done</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>85%</em></p>
								<p>PHP</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>95%</em></p>
								<p>HTML</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>80%</em></p>
								<p>CSS</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Bootstratp and JQuery</p>                                     
							</div>
						</div>
					</div>
					
				</div>
	
            </div><!--/.our-skill-->
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Team of Onlice Medical Counselling</h2>
					<p class="lead"></p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="{{asset('images/man1.jpg')}}" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Bahaa M. Al-Karriri</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>My name is Bahaa, im the co-founder of the Online Medical Counselling website,my main concentrations is Front-End Develoopper, i have a good skills of Web Developement and Building Websites, I also have some skills within SEO for websites</p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="{!!asset('images/man2.jpg')!!}" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Majed W. Alzainy</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>My name is Majed, im the co-partner of Online Medical Counselling Website, i'm skilled Back-End Developper and  i have skills of creating Databases and Data Structure.  </p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
       @endsection()
@section("scripts")

	
	 <script src="{!!asset('   js/jquery.js  ')!!}"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="{!!asset('   js/bootstrap.min.js  ')!!}"></script>
    <script src="{!!asset('   js/jquery.prettyPhoto.js  ')!!}"></script>
    <script src="{!!asset('   js/jquery.isotope.min.js  ')!!}"></script>
    <script src="{!!asset('   js/main.js"></script>
    <script src="{!!asset('   js/wow.min.js"></script>
@endsection()