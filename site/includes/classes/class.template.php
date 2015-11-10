<?php 
/*
 * Class to build pages
 */
	class template{
	
		public function buildPage($title="Home | Tod Idea Uganda- Learning to code",$content ="<section id='content'><div class='content-wrap'><div class='container clearfix'></div></div></section>")
		{
		 echo'<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta name="google-site-verification" content="gVC30qElE67g_c-imXHP28dSDoIzGYnt1iQ_srEAh6I" />
    <meta name="msvalidate.01" content="38D4546618343D0D1934ADB6BA6ED20D" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Kids computer programming clubs: Kampala" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="'.BASE_URL.'/includes/theme/main.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="'.BASE_URL.'/includes/theme/js/jquery.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>'.$title.'</title>


</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="'.BASE_URL.'" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="'.BASE_URL.'/includes/theme/images/logo.png" alt="Canvas Logo"></a>
                        <a href="'.BASE_URL.'" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="'.BASE_URL.'/includes/theme/images/logo%402x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li><a href="'.BASE_URL.'"><div>Home</div></a></li>
                             <li><a href="'.BASE_URL.'/?go=ourstory"><div>Our Story</div></a></li>
                              <li><a href="'.BASE_URL.'/?go=products"><div>Products</div></a></li>
                               <li><a href="'.BASE_URL.'/?go=events"><div>Events</div></a></li>
                               		<li><a href="'.BASE_URL.'/?go=jobs"><div>Jobs</div></a></li>
                                    <li><a href="'.BASE_URL.'/?go=gallery"><div>Hour of Code-2014</div></a></li>
                                   <li><a href="'.BASE_URL.'/?go=rails"><div>Rails Training</div></a></li>
                        		   <li><a href="'.BASE_URL.'/?go=blog"><div>Blog</div></a></li>
                        		   		
                        		<li><a href="'.BASE_URL.'/?go=contact"><div>Contact Us</div></a></li>
                        				
                        				
                         </ul>

                  
                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->


        '.$content.'
   

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_two_third">

                        <div class="col_one_third">

                            <div class="widget clearfix">

                                <img src="'.BASE_URL.'/includes/theme/images/footer-widget-logo.png" alt="" class="footer-logo">

                              
                                <div>
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        P.O. Box 6563, Kampala Uganda 
                                		<br />Kati House, Nakasero <br />
                                		Kampala,Uganda.
                                    </address>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> +256 757 112 376<br>
                                     <abbr title="Email Address"><strong>Email:</strong></abbr> info@todidea.org
                                </div>

                            </div>

                        </div>

                        <div class="col_one_third">

                            <div class="widget widget_links clearfix">

                                <h4>Quick Links</h4>

                                <ul>
                                  <li><a href="'.BASE_URL.'/?go=home"><div>Home</div></a></li>
                             <li><a href="'.BASE_URL.'/?go=ourstory"><div>Our Story</div></a></li>
                              <li><a href="'.BASE_URL.'/?go=products"><div>Products</div></a></li>
                               <li><a href="'.BASE_URL.'/?go=events"><div>Events</div></a></li>
                                <li><a href="'.BASE_URL.'/?go=rails"><div>Rails training</div></a></li>
                                   <!--<li><a href=""><div>Blog</div></a></li>-->
                                <li><a href="'.BASE_URL.'/?go=contact"><div>Contact Us</div></a></li>
                                
                                </ul>

                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="widget clearfix">
                                <h4>We\'re Hiring Tutors!</h4>

                                <div id="post-list-footer">
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4>
                                         Send your application today to info@todidea.org .      		
                                                		
                                                		
                                                		</h4>
                                            </div>
                                           
                                        </div>
                                    </div>

                                		
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="0" data-to="400" data-refresh-interval="5" data-speed="2500" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Total Tabs Sold</h5>
                                </div>

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="0" data-to="1000000" data-refresh-interval="4" data-speed="1000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Target Tabs to be Sold</h5>
                                </div>

                            </div>

                        </div>

                       <!-- <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                            <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                            <form id="widget-subscribe-form" action="'.BASE_URL.'/?go=newsletter" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <script type="text/javascript">
                                $("#widget-subscribe-form").validate({
                                    submitHandler: function(form) {
                                        $(form).find(\'.input-group-addon\').find(\'.icon-email2\').removeClass(\'icon-email2\').addClass(\'icon-line-loader icon-spin\');
                                        $(form).ajaxSubmit({
                                            target: \'#widget-subscribe-form-result\',
                                            success: function() {
                                                $(form).find(\'.input-group-addon\').find(\'.icon-line-loader\').removeClass(\'icon-line-loader icon-spin\').addClass(\'icon-email2\');
                                                $(\'#widget-subscribe-form\').find(\'.form-control\').val(\'\');
                                                $(\'#widget-subscribe-form-result\').attr(\'data-notify-msg\', $(\'#widget-subscribe-form-result\').html()).html(\'\');
                                                SEMICOLON.widget.notifications($(\'#widget-subscribe-form-result\'));
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>-->

                        <div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 clearfix bottommargin-sm">
                                    <a target="_blank" href="https://www.facebook.com/TheTodIdea" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/TheTodIdea"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                </div>
                                <div class="col-md-6 clearfix">
                                    <a target="_blank" href="https://twitter.com/TOD_Idea" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a target="_blank" href="https://twitter.com/TOD_Idea"><small style="display: block; margin-top: 3px;"><strong>Follow Us</strong><br>on Twitter</small></a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2014 All Rights Reserved by Tod Idea Uganda.<br>
                      
                    </div>

                   

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="'.BASE_URL.'/includes/theme/js/functions.js"></script>
 <script type="text/javascript" src="'.BASE_URL.'/includes/theme/js/ckeditor/ckeditor.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-56596703-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>
</body>

</html>
';
			
		}
	
	
	
	
	}

?>