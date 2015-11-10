<?php 
class PageContent {

   public function HomePage() {
   	return '
            <div class="row-fluid col-xs-12" xmlns="http://www.w3.org/1999/html">
                <div class="span12" background-color="black">
                  <div id="artCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                      <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#artCarousel" data-slide-to="1"></li>
                      <li data-target="#artCarousel" data-slide-to="2"></li>
                      <li data-target="#artCarousel" data-slide-to="3"></li>

                    </ol>
                    <div class="carousel-inner ">
                      <div class="item active " id="firstSlider"><img src=\''.BASE_URL.'/includes/theme/images/slider/swiper/secondary_edutab1.jpg\'></div>
                      <div class="item"><img src=\''.BASE_URL.'/includes/theme/images/slider/swiper/secondary_edutab2.jpg\' align="right"></div>
                      <div class="item"><img src=\''.BASE_URL.'/includes/theme/images/slider/swiper/secondary_edutab3.jpg\' align=""></div>
                      <div class="item"><img src=\''.BASE_URL.'/includes/theme/images/slider/swiper/secondary_edutab3.jpg\' align="right"></div>
                      <!--<div class="item"><%= image_tag placeholder_image(1140,200) %></div>-->
                      <!--<div class="item"><%= image_tag LoremIpsum.placeholder_image(1140,200) %></div>-->
                      <!--<div class="item"><%= image_tag LoremIpsum.placeholder_image(1140,200)%></div>-->
                    </div>
                    <a class="left carousel-control" data-target="#artCarousel" data-slide="prev">&lsquo;</a>
                    <a class="right carousel-control" data-target="#artCarousel" data-slide="next">&rsquo;</a>
                  </div>
                </div>
              </div>

        
               <hr/>
                <div class="container">
                <p class="text-center font-size=4.5em"><strong>Click on the images for a summary of some of the products we offer and our programming and robotics schoool clubs </strong></p>
                    <hr/>
                    <div class="row">
                        <div class="">
                            <ul class="thumbnails">
                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#chum" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/chumInt1.jpg" alt="" class="img-rounded"></a> </li>

                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#bsk" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/BSK1.jpg" alt="" class="img-rounded"></a> </li>
                
                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#daff" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/daff.jpg" alt="" class="img-rounded"></a> </li>

                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#kinder" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/kinder.jpg" alt="" class="img-rounded"></a> </li>

                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#edutab" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/secondary_edutab1.jpg" alt="" class="img-rounded"></a> </li>

                                <li class="col-lg-4 col-sm-4 col-xs-12"><a href="#little" class="thumbnail" data-toggle="modal">
                                <img src="'.BASE_URL.'/img/thumbs/little.jpg" alt="" class="img-rounded"></a> </li>
                                
                            </ul>
                        </div>
                    </div>
                    <hr/>
                </div>
                
                

                <!--The image modals start here -->


                <div id="chum" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>Chum International school</h3>
                        </div>
                            <div class="modal-body">
                                <p><img src="'.BASE_URL.'/img/chumInt1.jpg" alt="" class="pull-left img-circle">Chum runs the American Accelerated 
                                Christian Education Curriculum whose principles of training are exclusively founded on the 
                                Christian Faith.The TechKids Programming and Robotics 
                                Club fits well within the school values of creating children who are problem solvers.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->



                <div id="bsk" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>British School of Kampala</h4>
                        </div>
                            <div class="modal-body">
                                <p><img src="'.BASE_URL.'/img/BSK1_modal.jpg" alt="" class="pull-left img-circle">
                                            The BSK school administration strongly believe in the urgent need to groom computer scientists 
                                            to manage the challenges of the 21 st century.
                                            We are excited to be working with a hugely ambitious school administration 
                                            that will surely improve us and how we offer our services.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->

                 <div id="daff" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>Daffodils Kololo Kampala</h4>
                        </div>
                            <div class="modal-body">
                                <img src="'.BASE_URL.'/img/daff_modal.jpg" alt="" class="pull-left img-circle">
                                <p>One of the best schools in the country. The children are very enthuased with the concepts of computer
                                 programming. We recently handed out certificates of completion for Light Bot, a software that teaches the basics of computer programming.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->




                 <div id="kinder" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>Kinderkare Kitante-Kampala</h4>
                        </div>
                            <div class="modal-body">
                                <p><img src="'.BASE_URL.'/img/kinder_modal.jpg" alt="" class="pull-left img-circle">Under the careful tutorage of Ms Nakato Jane, KinderKare has risen as a major educator on the Uganda scene.
                                That they invited us to start a club teaching computational thinking skills 
                                show how progressive and attuned to the needs of the 21st century.

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->


                 <div id="edutab" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>The Secondary Edutab</h4>
                        </div>
                            <div class="modal-body">
                                <p><img src="'.BASE_URL.'/img/secondary_edutab1.jpg" alt="" class="pull-left img-circle">
                                We have recently launched the secondary level (O&A levels) Edutab. Its smart and packed with power. 
                                7 inch, 4G LTE, 1GB RAM, 8GB ROM, IPS Screen.
                                 The <a href="http://todidea.org/site/?go=products">secondary EduTab</a> exists for the sole purpose of creating creators of new technology rather
                                 than just users. We believe that with this EduTab , children will be able to increase proficiency in the 
                                 science subjects that have always been a problem.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->

                 <div id="little" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                         <button type="button" data-dismiss="modal" class="close">X</button>
                          <h3>Little bears Kindergaten and Primary Namulanda-Entebbe</h4>
                        </div>
                            <div class="modal-body">
                                <p><img src="'.BASE_URL.'/img/little_modal.jpg" alt="" class="pull-left img-circle">
                                Treasures Christian Preschool and Elementary, Bugolobi
                                We are proud to be associated with Ms Makayi Monalisa and her team at Treasures. Every parent 
                                who would like to raise good God fearing parents should enroll them in Treasures.
                                We enjoy every moment working with those joyful kids!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn-success" data-dismiss="modal">Close</button>
                            </div>
                    </div><!--modal-content-->
                  </div><!--modal-dialog-->
                </div> <!--modal-->


                    		
                    		
         <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                  <div class="fancy-title title-dotted-border">
                        
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                   <a href="'.BASE_URL.'/?go=products#edutab"><i class="icon-tablet i-alt"></i></a>
                            </div>
                            <h3>Edutab</h3>
                            <p>EduTabs are Tablets pre-installed with educational Apps, Videos and e-books customised to suit nursery , primary and secondary school levels. .   <a href="'.BASE_URL.'/?go=products">Read More...</a></p>
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-center fbox-dark fbox-effect">
                            <div class="fbox-icon">
                                <a href="'.BASE_URL.'/?go=products#techkids"><i class="icon-user i-alt"></i></a>
                            </div>
                            <h3>Tech Kids ICT clubs</h3>
                            <p>TechKids is an after school computer programming club where kids use the EduTab to learn how to program computers.    <a href="'.BASE_URL.'/?go=products#techkids">Read More...</a></p>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect">
                            <div class="fbox-icon">
                                <a href="'.BASE_URL.'/?go=events"><i class="icon-briefcase i-alt"></i></a>
                            </div>
                            <h3>Events</h3>
                            <p>We have upcoming events for Tech Kids, follow this link to view these events in December and January for Tech Kids <a href="'.BASE_URL.'/?go=events">Read More...</a></p>
                        </div>
                    </div>

                    <div class="clear"></div>

                   

                    

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocFbox = $("#oc-fbox");

                            ocFbox.owlCarousel({
                                margin: 40,
                                nav: true,
                                navText: [\'<i class="icon-angle-left"></i>\',\'<i class="icon-angle-right"></i>\'],
                                autoplay: true,
                                autoplayHoverPause: true,
                                dots: false,
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 }
                                }
                            });

                        });

                    </script>

                    		
                	
     <!--               		
  <div id="posts" class="post-grid grid-2 clearfix">

                        <div class="entry clearfix">
                         		
                    		
                    <div class="fancy-title title-dotted-border">
                        <h3>Upcoming Events</h3>
                    </div>	
                            
                              <div id="posts" class="events small-thumbs">

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="'.BASE_URL.'/includes/theme/images/tab.jpg" alt="">
                                        <div class="entry-date">10<span>Nov</span></div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">Tech Kids Event</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><span class="label label-warning">Public</span></li>
                                        <li><a href="#"><i class="icon-time"></i> 11:00am - 4:00pm</a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> Kampala, Uganda</a></li>
                                    </ul>
                                    <div class="entry-content">
                                       <p> <a href="#" class="btn btn-default" >RSVP</a> <a href="#" class="btn btn-danger">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    		</div>

                        <div class="entry clearfix">
                            		
                    		
                    <div class="fancy-title title-dotted-border">
                        <h3>From Our Blog</h3>
                    </div>	
                            <div class="entry-title">
                                <h2><a href="'.BASE_URL.'/?go=blog&id=1">Creativity Can Be Taught! A case for Computer programming in Uganda</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10th Nov 2014</li>
                                <li><a href=""><i class="icon-comments"></i>4</a></li>
                               
                            </ul>
                            <div class="entry-content">
                                <p>Creativity, imagination and the drive to question everything is central to the success of many great thinkers, including Einstein, Steve Jobs and our very own African entrepreneur Gordon Wavamunno.
Computer programming is the most important skill we can teach our kids because it fosters creativity a skill that we are all born with but which we lose along the way. Programming reinforces this skill through the following;
                                				
                                        		
                                        		</p>
                                <a href="'.BASE_URL.'/?go=blog&id=1" class="more-link">Read More</a>
                            </div>
                        </div>

                     
                    

                    </div><!-- #posts end -->
          
                    		
                </div>

            </div>

        </section><!-- #content end -->

                   		
                    		
                    		
                    		
                    		
   ';
   }
   
   public function adminPage() {
   	
   	return '  
   			        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_one_third nobottommargin">

                        <div class="well well-lg nobottommargin">
                            <form id="login-form" name="login-form" class="nobottommargin" action="'.BASE_URL.'/?go=doLogin" method="post">

                                <h3>Administrator Login</h3>

                                <div class="col_full">
                                    <label for="login-form-username">Username:</label>
                                    <input type="text" id="login-form-username" name="username" value="" class="required form-control input-block-level" />
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="password" value="" class="required form-control input-block-level" />
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                              
                                </div>

                            </form>
                        </div>

                    </div>
   			</div>
   			</div>
   			</section>
   ';
   }

   
   public function contactProcess() {
   
   	$name = addslashes($_POST['name']);
   	$subject = addslashes($_POST['subject']);
   	$email = addslashes($_POST['email']);
   	$phone = addslashes($_POST['phone']);
   	
   	$message = "Phone : $phone <br />";
   	$message .= addslashes($_POST['message']);
   	
   	  	
   	// multiple recipients
   	$to  = 'info@todidea.org' . ', '; // note the comma
   	$to .= 'alex.shyaka@todidea.org';
   	$to .= 'mbandashyaka@gmail.com';

   	
   	// To send HTML mail, the Content-type header must be set
   	$headers  = 'MIME-Version: 1.0' . "\r\n";
   	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   	
   	// Additional headers
   	$headers .= 'To: Info <info@todidea.org>, Alex <alex.shyaka@todidea.org>,Mbanda<mbandashyaka@gmail.com>' . "\r\n";
   	$headers .= 'From: Tod Website <webmail@todidea.org>' . "\r\n";
  
   	
   	// Mail it
   	mail($to, $subject, $message, $headers);
   	
   	
   	
   	
   	return '
   			        <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   
                    <div class="col_one_third nobottommargin">
   
                        <div class="well well-lg nobottommargin">
                           
                                <h3>Contact Us</h3>
   
                                <div class="col_full">
                                 <p>
   			We\'ve successfully received your message. We shall get back to you soon.
   			</p>
   			</div>
   
                                
                        </div>
   
                    </div>
   			</div>
   			</div>
   			</section>
   ';
   }
    
   
   public function newsletterProcess() {
   	 
   	$email = addslashes($_REQUEST['email']);
   	
   	
   	$sql = "INSERT INTO newsletter VALUES ('','$email')";
   	Database::performQuery($sql);
   
   
   
   
   	return '
   			        <section id="content">
  
            <div class="content-wrap">
  
                <div class="container clearfix">
  
                    <div class="col_one_third nobottommargin">
  
                        <div class="well well-lg nobottommargin">
              
                                <h3>News Letter Subscription</h3>
  
                                <div class="col_full">
                                 <p>
   			You\'ve successfully subscribed to our monthly Newsletter. You\'ll be redirected to the homepage in 5 seconds.
   			</p>
   			</div>
  
   
                        </div>
  
                    </div>
   			</div>
   			</div>
   			</section>
   			<meta http-equiv="refresh" content="5; url='.BASE_URL.'">
   ';
   } 
   
   
   public function contactus() {
   
   	return '  
    <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Contact Form
                    ============================================= -->
                    <div class="col_half">

                        <div class="fancy-title title-dotted-border">
                            <h3>Send us an Email</h3>
                        </div>

                        
                        <form class="nobottommargin"  name="template-contactform" action="'.BASE_URL.'/?go=contactProcess" method="post">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
                            </div>

                        

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <input name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin" />
                            </div>

                        </form>

                

                    </div><!-- Contact Form End -->

                 

                    <div class="clear"></div>

                    <!-- Contact Info
                    ============================================= -->
                    <div class="row clear-bottommargin">

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <h3>Our Headquarters<span class="subtitle">Kati House, Nakasero</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <h3>Speak to Us<span class="subtitle">+256 757 112 376</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="https://www.facebook.com/TheTodIdea"><i class="icon-facebook"></i></a>
                                </div>
                                <h3>Like on Facebook<span class="subtitle">TheTodIdea</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="https://twitter.com/TOD_Idea"><i class="icon-twitter2"></i></a>
                                </div>
                                <h3>Follow on Twitter<span class="subtitle">@TOD_Idea</span></h3>
                            </div>
                        </div>

                    </div><!-- Contact Info End -->

                </div>

            </div>

        </section><!-- #content end -->

       
   ';
   }
   

   public function blog() {
   	return'
   			     <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6915.jpg" alt="Gallery Thumb 1">
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><!--<a href="blog-single.html">-->Creativity Can Be Taught! A case for Computer programming in Uganda<!--</a>--></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 16th January 2015</li>
                                        <!--<li><a href="#"><i class="icon-user"></i> admin</a></li>-->
                                        <!--<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>-->
                                        <!--<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>-->
                                        <!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
                                    </ul>
                                    <div class="entry-content">
                                        <p></p>
                                        <!--<a href="blog-single.html"class="more-link">Read More</a>-->
                                    </div>
                                </div>
                            </div>

                           <!--<div class="entry clearfix">
                                <div class="entry-image">
                                    <iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 16th Feb 2014</li>
                                        <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                        <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
                                        <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
                                        <li><a href="#"><i class="icon-film"></i></a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p></p>
                                        <a href="blog-single-full.html"class="more-link">Read More</a>
                                    </div>
                                </div>
                            </div>-->

                           

                        </div><!-- #posts end -->

                        <!-- Pagination
                        ============================================= -->
                        <ul class="pager nomargin">
                            <li class="previous"><a href="#">&larr; Older</a></li>
                            <li class="next"><a href="#">Newer &rarr;</a></li>
                        </ul><!-- .pager end -->

                    </div><!-- .postcontent end -->

                    

                </div>

            </div>

        </section><!-- #content end -->

     
   			';
   }
   
   
   public function events() {
   	
   	$content = '
   			  <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="postcontent nobottommargin">

                        <div id="posts" class="events small-thumbs">';

                     
                     $sql = "SELECT * FROM events WHERE published=1 ORDER BY id DESC";
   	                 $res = Database::performQuery($sql);
   	                 
   	                 while($data = $res->fetch_assoc())
   	                 {
   	
   	                    $content .='       <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="'.BASE_URL.'/img/'.$data['photo'].'" alt="'.$data['title'].'">
                                        <div class="entry-date">'.$data['days'].'<span>'.$data['month'].'</span>  </div>
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="#">'.$data['title'].'</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><a href="#"><i class="icon-time"></i> '.$data['daytime'].'</a></li>
                                        <li><a href="#"><i class="icon-user"></i> '.$data['target'].'</a></li>
                                        <li><a href="#"><i class="icon-map-marker2"></i> '.$data['venue'].'</a></li>
                                     <li><a href="#"><i class="icon-phone"></i> 0757112376</a></li>
                                        <li><a href="#"><i class="icon-money"></i>'.$data['cost'].'</a></li>		
                                    
                                        		</ul>
                                    <div class="entry-content">
                                        <p>'.$data['description'].'</p>
                                        <a href="'.BASE_URL.'/?go=rsvp&event='.$data['id'].'" class="btn btn-success">RSVP for Event</a> 
                                    </div>
                                </div>
                            </div>';
                                        		
                                        		
   	                 }        		

                        $content .='</div>

                        <!-- Pagination
                        ============================================= -->
                        

                    </div>

                    
                           
                    </div>

                </div>

            </div>

        </section><!-- #content end -->

       
   			';
                        
                        return $content;
   }
   
   
   public function jobs() {
   
   	$content = '
   			  <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   
                    <div class="postcontent nobottommargin">
   
                        <div id="posts" class="events small-thumbs">';
   
   	 
   	$sql = "SELECT * FROM jobs WHERE published=1 ORDER BY id DESC";
   	$res = Database::performQuery($sql);
   	 
   	while($data = $res->fetch_assoc())
   	{
   
   		$content .=' <h4> <ul><li><a href="'.BASE_URL.'/?go=getJob&id='.$data['id'].'">'.$data['title'].'</a>   </li></ul> </h4>';
   
   
   	}
   
   	$content .='</div>
   
                        <!-- Pagination
                        ============================================= -->
   
   
                    </div>
   
   
              
                    </div>
   
                </div>
   
            </div>
   
        </section><!-- #content end -->
   
    
   			';
   
   	return $content;
   }
    
    
   
   
   public function getJob($id) {
   
   	$content = '
   			  <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   
                    <div class="postcontent nobottommargin">
   
                        <div id="posts" class="events small-thumbs">';
   
   
   	$sql = "SELECT * FROM jobs WHERE published=1 AND id=$id";
   	$res = Database::performQuery($sql);
   
   	while($data = $res->fetch_assoc())
   	{
   			
   		$content .=' <h3> <ul><li><a href="'.BASE_URL.'/?go=getJob&id='.$data['id'].'">'.$data['title'].'</a>   </li></ul> </h3>';
   		$content .='<p>'.$data['text'].'</p>';
   			
   			
   	}
   
   	$content .='</div>
   
                        <!-- Pagination
                        ============================================= -->
   
   
                    </div>
   
   
   
                    </div>
   
                </div>
   
            </div>
   
        </section><!-- #content end -->
   
   
   			';
   
   	return $content;
   }

   public function rails(){
    return'
           <!----content
           =============================== -->
    <section id="content">
          <div class="container clearfix">
            <div class="fancy-title title-dotted-border">
              <h3>The Ruby on Rails/bootstrap Training program</h3>
            </div><!--end of title-dotted-border-->

            <div class="row">

              <div class="col-lg-12 col-md-6 col-xs-12">

                <p style="line-height: 22px;"><img src="'.BASE_URL.'/img/TheRailsShop-01.png" class="alignright notopmargin,clearfix visible-xs visible-sm visible-lg"alt="Image" title="Image" data-animate="pulse" />

                <p> <b><a href="http://rubyonrails.org/">Ruby on Rails®</a></b> is an open-source web framework that’s optimized
                  for programmer happiness and sustainable productivity. It lets you
                  write beautiful code by favoring convention over configuration.
                </p>
                <dl class="dl-horizontal">
                  <dt>What you learn</dt>

                  <dd>
                    You learn the <b><a href="http://rubyonrails.org/">ruby on rails</a></b> web development framework . A skill that will make you productive building interactive data-driven websites and prototyping your idea at an amazingly fast pace.
                  </dd>
                  <dd>
                    You learn <b><a href="http://getbootstrap.com/css/">Boostrap</a></b> front-end web development stack developed by twitter. A skill that makes you build beautiful/clean web interfaces that are user friendly.
                  </dd>
                  <dd>
                    You acquire a rewarding skill that will make you productive and employable as soon as you finish the program.
                  </dd>
                  <dd>
                    You dont need prior knowledge of web development at all. All you need is a determination to learn and achieve results
                  </dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Who qualifies ?</dt>

                  <dd>Age: 15 years and above (Vacationists are very welcome)</dd>
                </dl>
                <dl class="dl-horizontal">
                  <dt>How much is it ?</dt>

                  <dd>Amount: 350,000 UGX for the entire course</dd>
                </dl>
                <dl class="dl-horizontal">

                  <dt>Location:</dt>

                  <dd>Namuli Road, Bukoto, Behind Cayenne </dd>
                </dl>
                <dl class="dl-horizontal">

                  <dt>When do we start?</dt>

                  <dd id="now"><b>NOW!</b></dd>
                </dl>
                <dl class="dl-horizontal">

                  <dt>Duration</dt>

                  <dd>30 days/ 2 hours daily including Saturdays. Three sessions a day</dd>
                </dl>
                <dl class="dl-horizontal">
                  <dt>Contact</dt>

                  <dd><b>0752969844</b></dd>
                </dl>
                <dl class="dl-horizontal">
                  <dt>Email</dt>

                  <dd><b>alex.shyaka@todidea.org</b></dd>
                </dl>



              </div>
            </div>
          </div>
</section>


    ';


   }
    
   
   
   public function products() {
   	return'
   			   <!-- Content
        ============================================= -->
        <section id="content">

         

            <div class="container clearfix">

   			
         			        

                        <a id="edutab">&nbsp;</a>

                              <div class="fancy-title title-dotted-border">
                                  <h3>The Edutab-A TodIdea Product</h3>
         			
                              </div>

                        <ul class="nav nav-tabs"> 

                              <li><a href="#secondary_edutab_content" data-toggle="tab">Secondary Edutab </a> </li>

                              <li><a href="#edutab_content" data-toggle="tab">Nursey and Primary Edutab </a> </li>

                             
                              <li><a href="#edutab_gallery" data-toggle="tab">Gallery</a> </li>
                          
                              <li><a href="#edutestimonies" data-toggle="tab">Testimonials</a> </li>

                              
                            
                        </ul>

                        <div class="row">
                                  <div class="tab-content">
                                   <!--Secondary edutab begins here -->
                                    <div class="tab-pane fade active in" id="secondary_edutab_content">
                                      <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                                        <p style="line-height: 22px;"><img src="'.BASE_URL.'/img/thumbs/secondary_edutab1.jpg" class="alignright notopmargin,clearfix visible-xs visible-md visible-sm visible-lg"alt="Image" title="Image" data-animate="pulse" />
                                         
                                         <p>The Secondary EduTab, for O & A levels, was created with the aim of inspiring young people
                                          in Uganda and East Africa as a whole not just to use technology, but to create it.To do so, 
                                          we need more students pursuing sciences and actually being proficient in them.</p>

                                            <p>The Secondary EduTab for the reason above is loaded with Physics, Chemistry, Biology, 
                                            Mathematics , Economics and Entrepreneurship. An emphasis on this collection of subjects 
                                            which are currently poorly performed and yet are pivotal in the development of economies, 
                                            makes the arrival of the Secondary EduTab ever more important.</p>

                                            <p>Most of the content on the EduTab is in form of video tutorials provided by Salman Khan 
                                            of the Khan Academy, the world\'s largest online academy.</p>

                                            <h2>Benefits to Students:</h2>
                                            <ul>
                                                <li>
                                                    Increased proficiency in the subjects: This is mostly due to excellent pedagogy but also because the student 
                                                    is able to learn at their own natural pace of understanding by pausing , 
                                                    rewinding and forwarding as they see fit. This makes for thorough understanding of the topics.
                                                </li>
                                                                            
                                                <li>
                                                    Flexible learning: Because these video tutorials are available to the 
                                                    student who owns the Secondary EduTab, they are able to learn anytime. 
                                                    Some students study better at night so this helps to study whenever they want wherever.
                                                </li>
                                                <li>
                                                    Flipped Classrooms. This is where the students view the video tutorials during homework 
                                                    or prep time and then come to the class with pee-mastered concepts to revise with the 
                                                    teacher and peers, and learn how to apply their knowledge to real world challenges. 
                                                    The best way of ensuring we groom inventors.
                                                </li>
                                                <li>
                                                    Attention and focus: Every student would like to own the Secondary EduTab because 
                                                    they deem it "cool" . This motivates them to pay attention to learning.
                                                </li>
                                                <li>
                                                     Research Skills: The Secondary EduTab with its super-fast internet, 4G LTE ability is the
                                                     ultimate research tool for the student. This enables the student to practice and horn their 
                                                     research skills, vital 21st century skills.
                                                </li>
                                               </ul> 
                                                <h2>Benefits to the Teacher:</h2>
                                                <ul>

                                                    <li>
                                                        Reduced teaching "burden": The students are able to view videos and teach 
                                                        themselves relieving the teacher of the "burden" of teaching which takes over 
                                                        80% of their time. It now means that more time is spent in class revising topics and 
                                                        question approaches.
                                                    </li>
                                                    <li>
                                                        Increased Educational Outcome: Better understanding of the topics will result 
                                                        in better scores in national exams:
                                                    </li>
                                                </ul>

                                                <h2>Benefits to the Nation:</h2>
                                                <ul>
                                                    <li>
                                                        Improved National Entrepreneurial ability: Improved educational outcomes from 
                                                        use of the EduTabs gives rise to students who are able to apply what they have
                                                         learnt to solve real world challenges. This ability to apply knowledge to 
                                                         societal challenges is the bedrock of entrepreneurship, to job creation and 
                                                         value.
                                                     </li>
                                                     <li>
                                                        Increased National Competitiveness: Learning on a Digital platform fosters our 
                                                        students competitiveness 
                                                        because every aspect of the global market is now digitized and those who 
                                                        know how to maneuver it are best placed to 
                                                        succeed.
                                                    </li>
                                                </ul>
                                        
                                      </div>
                                    </div>    

                                      <div class="tab-pane fade active in" id="edutab_content">
                                        <div class="col-lg-12 col-md-6 col-xs-12">

                                             <p style="line-height: 22px;"><img src="'.BASE_URL.'/img/tab_child.png" class="alignright notopmargin,clearfix visible-xs visible-lg"alt="Image" title="Image" data-animate="pulse" />
                                             
                                             <p> EduTabs are Tablet Pcs upon which we have installed educational software (Apps) , 
                                              Videos and e-books customised to suit nursery , primary and secondary school levels. </p>
                                              <p>We hope to impart upon our student force the  21st century skills of communication, collaboration and critical thinking which are ICT based.
                                              We also believe that the EduTabs will increase proficiency and interest in
                                               studies by the students and result in higher examination scores.</p>
                                              <p>The Edutab  presents us with a unique opportunity to give real meaning to student-centred 
                                              education. It enables your child to take responsibility for their own learning.
                                              They can learn anywhere at any time. Digital texts can be interactive, 
                                              thus engaging the kids in learning.</p>
                     
                                              <h2>Educational Video</h2>
                                              <p>These can be customized to suit your child as we possess material from Nursery, through Primary to Senior Secondary school. 
                                              For example;
                                                                 <br />         
                                              1- Jolly Phonics       <br />         
                                              2- Nursery Rhymes <br />      
                                              3- Primary Science       <br />       
                                              3-Primary Mathematics      <br />       
                                                  
                                              <h2>
                                              Educational Apps</h2>
                                              <p>These provide an interactive and engaging learning experience for the kids, for example, some of the apps for nursery school featured are;<br />
                                              <b>Kids Numbers and Math Lite: </b><br />This game effectively teaches preschoolers numbers, addition, subtraction, and more without sensory overload.
                                              <br /><b>AniWorld:</b><br /> Your kids get this app, which lets them pet, feed, see, and hear 36 different animals through 250 pictures.
                                              <br /><b>Kids ABC Letters Lite: </b><br />Teaches forming and identifying letters to children aged 2-7. The downside is parents may have trouble getting their phones back again.

                                              <h2>E-Books</h2>
                                              <p>The EduTab is a fabulously rich and rewarding e-reading experience. With over 500 books spanning different subjects, your child will have a  great time reading and reading and reading!

                                              <p>Combining Educational Apps, Educational Video Tutorials and Educational Reading Books on one awesomely cool device is what makes the Edutab truly remarkable!

                                              <p>The EduTab can be customized to suit Nursery, Primary and Secondary levels!

                                              <p>This is our chance as parents to play our role in shaping our children\'s future. 

                                              <h2>COST: </h2>
                                              <p> UGX 400,000,120,000 Rwandese francs and 13,100 Kenya shillings( Includes all the Apps, Video Tutorials and the whole Reading Library, 8GB external memory card and Screen protection). 

                                              <p> 150,000/= If  you have your own Tablet PC and would like it loaded with our carefully hand-picked educational apps, videos and e-books

                                              <p> 320,000/= , as is from the factory, without our educational content on it

                                              <p> <b>Accessories:</b><br />
                                              Headphones: 40,000/=<br />
                                              Leather Jackets: 40,000/=

                                              <p>This is a brand new offer from the Edutab: For only UGX 50,000, our old clients can be updated
                                              with the best of the best apps to send their kids learning to the stratosphere !</p>
                                                       
                                           </div>

                                          </div><!--end of tab-pane for edutab-->
                                    

                                          
                                                

                                <div class="tab-pane fade" id="edutab_gallery">
                                  <div class="gallery" align="center">
                                    <h1>Edutab exhibition at Chum International school Muyenga</h1>

                                    <h3>Chum International School Muyenga</h3>
                                     <div class="thumbnails">
                                        <img onmouseover="chum_preview.src=chum1.src" name="chum1" src="'.BASE_URL.'/img/chum1.jpg" alt="Techkids exhibition" />
                                        <img onmouseover="chum_preview.src=chum2.src" name="chum2" src="'.BASE_URL.'/img/chum2.jpg" alt="Techkids exhibition" />
                                        <img onmouseover="chum_preview.src=chum3.src" name="chum3" src="'.BASE_URL.'/img/chum3.jpg" alt="Techkids exhibition" />
                                        <img onmouseover="chum_preview.src=chum4.src" name="chum4" src="'.BASE_URL.'/img/chum4.jpg" alt="Techkids exhibition" />
                                        <img onmouseover="chum_preview.src=chum5.src" name="chum5" src="'.BASE_URL
                                        .'/img/chum5.jpg" alt="Techkids exhibition" />
                                        <img onmouseover="chum_preview.src=chum6.src" name="chum6" src="'.BASE_URL
                                        .'/img/chum6.jpg" alt="Techkids exhibition" />
                                        
                                        
                                      </div>
                                      <div class="chum_preview" align="center">
                                        <img name="chum_preview" src="'.BASE_URL.'/img/chum1.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the gallery div-->
                                            <hr>

                                    </div><!--end of tab-pane for edutabgallery-->

                                      <div class="tab-pane fade" id="edutestimonies">
                                       <div class="gallery" align="center">
                                          <h1>Our customers are talking!</h1>

                                          <h3>Edutab Testimonials</h3>
                                           <div class="thumbnails">
                                              <img onmouseover="test_preview.src=test1.src" name="test1" src="'.BASE_URL
                                              .'/img/test1.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test2.src" name="test2" src="'.BASE_URL
                                              .'/img/test2.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test3.src" name="test3" src="'.BASE_URL
                                              .'/img/test3.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test4.src" name="test4" src="'.BASE_URL
                                              .'/img/test4.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test5.src" name="test5" src="'.BASE_URL
                                              .'/img/test5.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test6.src" name="test6" src="'.BASE_URL
                                              .'/img/test6.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test7.src" name="test7" src="'.BASE_URL
                                               .'/img/test7.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test8.src" name="test8" src="'.BASE_URL
                                               .'/img/test8.jpg" alt="Techkids exhibition" />
                                              <img onmouseover="test_preview.src=test9.src" name="test9" src="'
                                              .BASE_URL
                                               .'/img/test9.jpg" alt="Techkids exhibition" />
                                               <img onmouseover="test_preview.src=test10.src" name="test10" src="'
                                               .BASE_URL
                                                .'/img/test10.jpg" alt="Techkids exhibition" />
                                                <img onmouseover="test_preview.src=test11.src" name="test11" src="'.BASE_URL
                                               .'/img/test11.jpg" alt="Techkids exhibition" />


                                            </div>
                                            <div class="test_preview" align="center">
                                              <img name="test_preview" src="'.BASE_URL.'/img/test4.jpg" alt=""/>
                                            </div>

                                        </div><!--close the gallery div-->
                                                  <hr>
                                     

                                    </div><!--end of tab-pane for edutestimonies-->

                           </div><!--end of tab-content for edutab-->

                        </div><!--end of entire row for edutab-->

                    
      
                <div class="row clear-bottommargin">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <h3>Speak to Us<span class="subtitle">+256 757 112 376</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a  target="_blank" href="https://www.facebook.com/TheTodIdea"><i class="icon-facebook"></i></a>
                                </div>
                                <h3>Like on Facebook<span class="subtitle">TheTodIdea</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a  target="_blank" href="https://twitter.com/TOD_Idea"><i class="icon-twitter2"></i></a>
                                </div>
                                <h3>Follow on Twitter<span class="subtitle">@TOD_Idea</span></h3>
                            </div>
                        </div>

                    </div><!-- Contact Info End -->
                        		
                </div>    


                        		
                
                  <div class="container">

                          <div class="col_full clearfix">

                              <div class="fancy-title title-dotted-border">
                              		<a id="techkids">&nbsp;</a>
                                  <h3>TechKids ICT clubs</h3>
                              		
                              </div>
                              

                              
                                  <ul class="nav nav-tabs"> 

                                    <li><a href="#tech" data-toggle="tab">About Techkids </a> </li>
                                
                                    <li><a href="#gallery" data-toggle="tab">Gallery</a> </li>
                                
                                    <li><a href="#testimonies" data-toggle="tab">Testimonials</a> </li>
                                  
                                  </ul>
                              
                          		<div class="clearfix visible-xs visible-lg"></div>

                        <div class="row">
                          <div class="tab-content">
                              <div class="tab-pane fade active in" id="tech">

                                  <div class="col-lg-3">
                                      <p style="line-height: 22px;"><img  src="'.BASE_URL.'/img/techk_kids_uganda_logo.jpg" 
                                      class="alignleft notopmargin" alt="Image" title="Image" data-animate="shake" />
                                    </div>
                                    <div class="col-lg-9">
                                      <p>TechKids is an after school computer programming club where kids use the EduTab to learn how to program computers.
                                         Computer programming skills are highly sought after by employers so this improves children\'s future career prospects.</p>
                                         <p>The critical thinking skills and problem solving skills developed in this club spill over into the children\'s academic performance and are important life skills too.
                                         We are currently operating in Kinderkare Elementary School kitante and look to open up in several other schools and run holiday programmes as well.</p>
                                      </div>
                              
                              </div><!--end of tab-pane for techkids-->

                          <div class="tab-pane fade" id="gallery">
                          <div class="gallery" align="center">
                                    <h1>TechKids launches computer programming clubs</h1>

                                    <h3>The British School of Kampala-Muyenga</h3>
                                     <div class="thumbnails">
                                        <img onmouseover="BSK_preview.src=BSK1.src" name="BSK1" src="'.BASE_URL.'/img/BSK.jpg" alt="computer programming club" />
                                        <img onmouseover="BSK_preview.src=BSK2.src" name="BSK2" src="'.BASE_URL.'/img/BSK1.jpg" alt="computer programming club" />
                                        <img onmouseover="BSK_preview.src=BSK3.src" name="BSK3" src="'.BASE_URL.'/img/BSK2.jpg" alt="computer programming club" />
                                        <img onmouseover="BSK_preview.src=BSK4.src" name="BSK4" src="'.BASE_URL.'/img/BSK3.jpg" alt="computer programming club" />
                                        <img onmouseover="BSK_preview.src=BSK5.src" name="BSK5" src="'.BASE_URL.'/img/BSK4.jpg" alt="computer programming club" />
                                        
                                      </div>
                                      <div class="BSK_preview" align="center">
                                        <img name="BSK_preview" src="'.BASE_URL.'/img/BSK.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the gallery div-->
                                            <hr>



                                      
                                        
                                <div class="gallery" align="center">
                                    <h3>KinderKare Elementary school-Kitante</h3>
                                     <div class="thumbnails">
                                    	<img onmouseover="Kinder_preview.src=Kinder1.src" name="Kinder1" src="'.BASE_URL.'/img/KinderKare8.jpg" alt="computer programming club" />
                                    	<img onmouseover="Kinder_preview.src=Kinder2.src" name="Kinder2" src="'.BASE_URL.'/img/KinderKare7.jpg" alt="computer programming club" />
                                    	<img onmouseover="Kinder_preview.src=Kinder3.src" name="Kinder3" src="'.BASE_URL.'/img/KinderKare3.jpg" alt="computer programming club" />
                                    	<img onmouseover="Kinder_preview.src=Kinder4.src" name="Kinder4" src="'.BASE_URL.'/img/KinderKare4.jpg" alt="computer programming club" />
                                    	<img onmouseover="Kinder_preview.src=Kinder5.src" name="Kinder5" src="'.BASE_URL.'/img/KinderKare5.jpg" alt="computer programming club" />
                                    	
                                      </div>
                                      <div class="Kinder_preview" align="center">
    	                                <img name="Kinder_preview" src="'.BASE_URL.'/img/KinderKare5.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the gallery div-->
    	                                    <hr>
    	                         <div class="gallery" align="center">
                                    <h3>Daffodils-Kololo </h3>
                                     <div class="thumbnails">
                                    	<img onmouseover="daff_preview.src=daff1.src" name="daff1" src="'.BASE_URL.'/img/daffodils1.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff2.src" name="daff2" src="'.BASE_URL.'/img/daffodils2.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff3.src" name="daff3" src="'.BASE_URL.'/img/daffodils3.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff4.src" name="daff4" src="'.BASE_URL.'/img/daffodils4.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff5.src" name="daff5" src="'.BASE_URL.'/img/daffodils5.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff8.src" name="daff8" src="'.BASE_URL.'/img/daffodils8.jpg" alt="computer programming club" />
                                    	<img onmouseover="daff_preview.src=daff10.src" name="daff10" src="'.BASE_URL.'/img/daffodils10.jpg" alt="computer programming club" />
                                      </div>
                                      <div class="daff_preview" align="center">
    	                                <img name="daff_preview" src="'.BASE_URL.'/img/daffodils4.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the daffodils gallery div-->
    	                                              <hr>
    	                         <div class="gallery" align="center">
                                    <h3>Little Bears Kindergaten and primary- Namulanda-Entebbe</h3>
                                     <div class="thumbnails">
                                    	<img onmouseover="ebbs_preview.src=ebbs1.src" name="ebbs1" src="'.BASE_URL.'/img/ebbs1.jpg" alt="computer programming club" />
                                    	<img onmouseover="ebbs_preview.src=ebbs2.src" name="ebbs2" src="'.BASE_URL.'/img/ebbs2.jpg" alt="computer programming club" />
                                    	<img onmouseover="ebbs_preview.src=ebbs3.src" name="ebbs3" src="'.BASE_URL.'/img/ebbs3.jpg" alt="computer programming club" />
                                    	<img onmouseover="ebbs_preview.src=ebbs4.src" name="ebbs4" src="'.BASE_URL.'/img/ebbs4.jpg" alt="computer programming club" />
                                    	<img onmouseover="ebbs_preview.src=ebbs5.src" name="ebbs5" src="'.BASE_URL.'/img/ebbs5.jpg" alt="computer programming club" />
                                    	
                                      </div>
                                      <div class="ebbs_preview" align="center">
    	                                <img name="ebbs_preview" src="'.BASE_URL.'/img/ebbs4.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the little_beares gallery div-->
    	                                          <hr>
    	                         <div class="gallery" align="center">
                                    <h3>Treasures Christian Pre-School and Elementary- Mutungo</h3>
                                     <div class="thumbnails">
                                    	<img onmouseover="treasures_preview.src=treasures1.src" name="treasures1" src="'.BASE_URL.'/img/little_treasures1.jpg" alt="computer programming club" />
                                    	<img onmouseover="treasures_preview.src=treasures2.src" name="treasures2" src="'.BASE_URL.'/img/little_treasures2.jpg" alt="computer programming club" />
                                    	
                                    	
                                      </div>
                                      <div class="treasures_preview" align="center">
    	                                <img name="treasures_preview" src="'.BASE_URL.'/img/little_treasures2.jpg" alt=""/>
                                      </div>
                                              
                                  </div><!--close the little_beares gallery div-->
    	                                    
    	                                    
                           
                               </div><!--end of tab-pane div for gallery-->

                            <div class="tab-pane fade" id="testimonies"> 

                                  <!--<div class="col-lg-3 col-xs-6">
                                   <div class="thumbnail">
                                      <img  src="'.BASE_URL.'/img/holiday2.jpg" class="img-responsive">
                                      <p class="caption">This where the caption will be</p>
                                    </div>
                                  </div>-->
                                  
                                  <div class="col-lg-3 col-xs-6">
                                   <div class="thumbnail">
                                      <img  src="'.BASE_URL.'/img/testimonial_KinderKare.png" class="img-responsive">
                                      <p class="caption">"Digitizing education is a must 
                                          if we are going to ensure our children compete in the global marketplace"</p>
                                          <p><b>Teacher Nakato Jane. Principal kinderkare schools</b></p>
                                    </div>
                                  </div>

                            </div><!--end of tab-pane for testimonies--> 

                        </div><!--end of tab-content div-->
                        </div><!--end of row-->

                  </div><!--end of container for techkids-->
             
            
                  
                        		
                        		
                        		
  <div class="row clear-bottommargin">

                   

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <h3>Speak to Us<span class="subtitle">+256 757 112 376</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a  target="_blank" href="https://www.facebook.com/pages/TechKids-Uganda/299125266933945"><i class="icon-facebook"></i></a>
                                </div>
                                <h3>Like on Facebook<span class="subtitle">Tech Kids Uganda</span></h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin clearfix">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a target="_blank" href="https://twitter.com/TechKidsUg"><i class="icon-twitter2"></i></a>
                                </div>
                                <h3>Follow on Twitter<span class="subtitle">@TechKidsUg</span></h3>
                            </div>
                        </div>

                    </div><!-- Contact Info End -->
                    </div>
               </div>
               </div>     
   			
   			
                        </div>

                    </div>

                </div>

             

            </div>


        </section><!-- #content end -->
        
        <!-- this a modal window -->

                      <div id="bell" class="modal hide fade" tabindex="-1">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">x</button>
                          <h3>This is where the heading will be</h3>
                        </div>
                        <div class="modal-body">

                           <p><img  src="'.BASE_URL.'/img/holiday2.jpg" alt="" class="img-responsive"></a>
                           the text that will accompany the thumbnail
                           </p>
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal">Close</button> 
                        </div>
                      </div>      
       

        
   			';



   }
   
   
   public function rsvp() {
   	return'
   			   <!-- Content
        ============================================= -->
        <section id="content">
   
            <div class="content-wrap">
   
                <div class="container clearfix">
   
   
   
   
         <div class="fancy-title title-dotted-border">
                        <h3>RSVP for Holiday Program</h3>
                    </div>
   
   
   	         <form action"'.BASE_URL.'/?go=doRsvp" method="POST" >
              <table class="table">
   	         		<tr>
   	         		<td width="20%">Parent\'s Name : </td>
   	         		<td width="80%"><input type="text" name="pname" /></td>
   	         		</tr>
   	         		<tr>
   	         		<td>Telephone</td>
   	         		<td><input type="text" name="phone" /></td>
   	         		</tr>
   	         		<tr>
   	         		<td>Email </td>
   	         		<td><input type="text" name="email" /></td>
   	         		</tr>
   	         		<tr>
   	         		<td>Number of Kids </td>
   	         		<td><input type="text" name="numkids" /></td>
   	         		</tr>
   	         		<tr>
   	         		<td>Child\'s Name & Age</td>
   	         		<td><textarea name="kids" cols="50" rows="10"></textarea></td>
   	         		</tr>
   	           		<tr>
   	         		<td colspan=2>
   	         		<input type="hidden" name="event" value="'.$_GET['event'].'" />
   	         				<input type="hidden" name="go" value="doRsvp" />
   	         				<input type="submit" name="Go" value="RSVP" /></td>
   	         		</tr>
   	         		
   	         		</table>
   	         				
             </form>
   
   
   
   
                   
   
                </div>
   
       
   
            </div>
   
        </section><!-- #content end -->
   
   			';
   }
   public function doRsvp() {
   	
   	
   	$parent = $_POST['pname'];
   	$phone = $_POST['phone'];
   	$email = $_POST['email'];
   	$numkids =$_POST['numkids'];
   	$kids = $_POST['kids'];
   	$sql = "INSERT INTO `rsvp`(`id`, `parent`, `phone`, `email`, `numkids`, `kids`) 
   			VALUES ('','$parent','$phone','$email','$numkids','$kids')";
   	Database::performQuery($sql);
   	
   	return'
   			   <!-- Content
        ============================================= -->
        <section id="content">
  
            <div class="content-wrap">
  
                <div class="container clearfix">
  
  
  
  
         <div class="fancy-title title-dotted-border">
                        <h3>RSVP for ToD Event '.$_POST['event'].'</h3>
                    </div>
  
  
   	        <p>Successfully RSVP\'d for Event '.$_POST['event'].'</p> 
  
          
  
                </div>
  
    
  
            </div>
  
        </section><!-- #content end -->
  
   			';
   }
  public function ourstory() {
    return'
           <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_full">

                        <div class="heading-block center nobottomborder">
                            <h2>Who we are</h2>
                            <span>
                               <p>
                                 The TOD idea is an indigenous owned company started in September 2013 
                                  with the aim of integrating technology in Education and Business. </p>
                                  <p>Our Mission is get all Ugandans students learning, Revising and Researching using the EduTab.
                                  We believe in the ability of technology to make quality education available and scalable in 
                                  order to have an impact on the African condition. 
                                  </p>
                             </span>
                        </div>

                       

                    </div>

                      <div class="fancy-title title-border">
                        <h3>Meet our team</h3>
                    </div>  


                    

<div class="row"><!--profile row starts here-->
  <div class="col-lg-6 col-xs-6">
    <div class="thumbnail">
      <div class="caption">
       <div class="team team-list clearfix">
                <div class="team-image">
                    <img src="'.BASE_URL.'/includes/theme/images/team/3.jpg" alt="Mbanda Shyaka">
                </div>
                <div class="team-desc">
                    <div class="team-title"><h4>Mbanda Shyaka</h4><span>Managing Director</span></div>
                    <div class="team-content">
                        <p> A graduate of the school of Food Science and Technology Makerere, 
                        Mbanda Shyaka has vast experience in the business world which he joined 
                        in the year 2000 right after graduating. Areas of business include finance, 
                        agriculture and trade.
                        </p>
                   
                     </div>
                   


                    <a href="https://www.facebook.com/mbanda.shyaka" class="social-icon si-rounded si-small si-light si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>
                </div>
            </div>
          </div>

        <div class="col-md-6 bottommargin">

      </div><!--end of caption div-->

    </div><!--end of the thumbnail div-->

  </div><!--end of grid div-->


            <div class="team team-list clearfix">
  <div class="col-lg-6 col-xs-6">
    <div class="thumbnail">
                <div class="team-image">
                    <img src="'.BASE_URL.'/includes/theme/images/team/2.jpg" alt="Nkusi  Alex Shyaka">
                </div>
                <div class="team-desc">
                    <div class="team-title"><h4>Nkusi  Alex Shyaka</h4><span>CTO/Director Operations</span></div>
                    <div class="team-content">
                        <p>A lifelong student of web technologies and seeks to impact the same knowledge to the younger 
                        generation. A graduate of Applied Information Technology from Sikkim Manipal University India , 
                        diploma in Software engineering from the London School of Computer 
                        technology.
                        
                        </p>
                    </div>
                    <a href="https://www.facebook.com/shyakaster" class="social-icon si-rounded si-small si-light si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-rounded si-small si-light si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-rounded si-small si-light si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>
                </div>
            </div>
        </div>

        </div>

    </div>

     </div>
  </div><!--end of thumbnail for alex profile-->

  </div><!--end of second alex profile grid div-->

</div><!--profile row ends here-->

        </section><!-- #content end -->

       
        ';
   }
   
   
   
   public function adminDashboard()
   {
   	
   	return'
   			   <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Admin Dashboard</h4>
                        </div>
                         <a href="'.BASE_URL.'/?go=manageRsvp" class="button button-desc button-rounded button-red center">Manage RSVPs<span></span></a>
   			
                        <a href="'.BASE_URL.'/?go=manageEvents" class="button button-desc button-rounded button-green center">Manage Events<span></span></a>

                        <a href="'.BASE_URL.'/?go=manageBlog" class="button button-desc button-rounded button-teal center">Manage Blogs<span></span></a>
   			
   			</div>
   			</div>
   			</section>
   			';
   }
    public function gallery()
   {
    
    return'
           <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
        <div class="fancy-title title-border topmargin">
                            <h4>Techkids Uganda organises the hour of code with parents and National Information Technology Authority at KinderKare  Elementary School</h4>
                        </div>
                             <div class="col_full nobottommargin clearfix">

                      

                        <div class="masonry-thumbs col-5" data-big="3" data-lightbox="gallery">
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6915.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6915.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6920.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6920.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6921.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6921.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6922.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6922.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6923.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6923.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6926.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6926.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6927.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6927.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6928.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6928.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6929.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6929.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6930.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6930.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6931.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6931.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6932.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6932.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6933.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6933.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6934.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6934.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6935.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6935.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6936.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6936.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6937.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6937.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6938.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6938.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6939.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6939.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6940.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6940.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6941.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6941.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6942.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6942.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6943.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6943.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6944.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6944.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6945.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6945.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6946.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6946.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6947.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6947.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6948.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6948.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6949.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6949.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6950.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6950.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6951.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6951.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6952.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6952.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6953.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6953.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6954.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6954.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6955.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6955.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6957.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6957.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6958.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6958.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6959.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6959.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6960.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6960.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6961.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6961.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6962.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6962.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6963.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6963.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6964.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6964.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6965.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6965.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6966.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6966.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6967.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6967.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6968.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6968.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6969.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6969.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6970.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6970.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6971.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6971.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6972.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6972.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6973.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6973.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6975.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6975.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6977.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6977.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6978.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6978.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6979.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6979.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6980.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6980.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6981.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6981.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6982.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6982.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6983.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6983.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6984.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6984.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6985.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6985.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6986.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6986.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6987.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6987.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6988.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6988.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6989.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6989.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6990.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6990.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6991.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6991.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6993.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6993.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6994.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6994.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6995.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6995.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6996.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6996.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6997.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6997.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6998.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6998.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_6999.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_6999.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7000.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7000.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7001.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7001.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7002.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7002.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7003.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7003.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7004.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7004.jpg" alt="Gallery Thumb 1"></a>
                            <a href="'.BASE_URL.'/img/gal/processed/DSC_7006.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'.BASE_URL.'/img/gal/thumbs/DSC_7006.jpg" alt="Gallery Thumb 1"></a>

                        </div>

                    </div>

        </div>
        </div>
        </section>
        ';
   }
   
   
   
   
   public function manageRsvp()
   {
   	$content='
		
			  <section id="content">
  
            <div class="content-wrap">
  
                <div class="container clearfix">
   			<div class="fancy-title title-border topmargin">
                            <h4>Manage RSVPs</h4>
                        </div>
		
		
		
		
	<table class="table table-striped table-bordered table-hover" id="sample_1">
	<thead>
	<tr>
	<th>ID</th>
	<th >Parent Name</th>
	<th >Telephone</th>
	<th >Email</th>
	<th >Number of Kids</th>
	<th >Kids Details</th>
	</tr>
	</thead>
	<tbody>';
   	$sub_sql = "SELECT COUNT(*) AS count FROM rsvp";
   	$result_pag_num = Database::performQuery($sub_sql);
   	$row = $result_pag_num->fetch_assoc();
   	$num_rows = $row['count'];
   
   	$pages = new Paginator($num_rows,9,array(3,5,10,12,15,20,25,30,50,100,250,'All'));
   	//$content .=  $pages->display_pages();
   	$sql = "SELECT * FROM rsvp ORDER BY id DESC LIMIT ".$pages->limit_start.",".$pages->limit_end;
   	$result = Database::performQuery($sql);
   
   
   
   	while($data = $result->fetch_assoc())
   	{
   	
   		$content .='<tr class="odd gradeX">
		                              <td>'.$data['id'].'</td>
		                              <td >'.$data['parent'].'</td>
		                              <td >'.$data['phone'].'</td>
		                              <td class="center">'.$data['email'].'</td>
					                  <td class="center">'.$data['numkids'].'</td>
		                              <td >'.$data['kids'].'</td>
		                             
		                           </tr>';
   	}
   
   
   	$content .= '<tr><td colspan="4">'.$pages->display_pages().'</td><td colspan="1">'.$pages->display_jump_menu().'</td><td colspan="1">'.$pages->display_items_per_page().'</td></tr>';
   
   	 
   	$content .='
        
                        </tbody>
                     </table>
               </div></div></section>
               ';
   
   	return $content;
   
   }
    
   
}




?>

<style type="text/css">
	body {
		background: #222;
		margin-top: 20px;
	}

	h3 {
		color: #eee;
		font-family: Verdana;
	}

	.thumbnails img {
		height: 80px;
		border: 4px solid #555;
		padding: 1px;
		margin: 0 10px 10px 0;
	}

	.thumbnails img:hover {
		border: 4px solid #00ccff;
		cursor:pointer;
	}

	.preview img {
		border: 4px solid #444;
		padding: 1px;
		height: 500px;
	}
    .Daff_preview img {
		border: 4px solid #444;
		padding: 1px;
		height: 500px;
	}
    #now{
        color: red;
    }
</style>
 


<!-- javascript -->
            <script src="http://code.jquery.com/jquery-latest.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        <script>
           $(function(){
           $('.nav-tabs a:first').tab('show');

           });
        </script>