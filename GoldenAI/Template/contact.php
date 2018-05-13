<?php 
$name_of_your_site = "yourcompanyname.com"; 
$email_adress_reciever = "gsrthemes9@gmail.com";

if(isset($_POST['Send']))
{
	include('send.php');	
}
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Ainex - A Professional Hosting Theme</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/brown.css" />-->
    
<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->

    
    <!-- sticky menu -->
    <link rel="stylesheet" href="js/sticky-menu/core.css">
 

</head>

<body>

<div class="site_wrapper">
   

<!-- HEADER -->
<div class="header_inner">
<header id="header">
<div class="main_header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_contact_info">
        
        <div class="container">
        
            <div class="date_wrap">
			<script type="text/javascript">
            var mydate=new Date()
            var year=mydate.getYear()
            if (year < 1000)
            year+=1900
            var day=mydate.getDay()
            var month=mydate.getMonth()
            var daym=mydate.getDate()
            if (daym<10)
            daym="0"+daym
            var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
            document.write("<b class='date'>"+montharray[month]+" "+daym+", "+year+"</b>")
            </script>
            </div><!-- end date -->
        
            <ul class="tci_list">
            
                <li class="empty"><a href="#"><i class="fa fa-comment"></i> live chat</a></li>
                <li class="empty"><a href="mailto:info@GoldenAI.com"><i class="fa fa-envelope"></i> info@GoldenAI.com</a></li>
                <li class="empty"><i class="fa fa-headphones"></i> +46 (739) 723 718</li>
                <li class="empty two"><a href="#">Login</a> |</li>
                <li class="empty two"><a href="#">Signup</a> |</li>
                <li class="empty two"><a href="#">Contact</a></li>
                <li class="space"></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li></li>
                <li class="empty two"><a href="#">Country:</a></li>
                <li class="country_select">
                <select name="">
                  <option value="unitedstates">United States</option>
                  <option value="saab">United Kingdom</option>
                  <option value="opel">Australia</option>
                  <option value="audi">Germany</option>
                </select>
				</li>
                 
            </ul>
            
        </div>
        
    </div><!-- end top contact info -->
            
 	</div>
    
	</div>

	<!-- Top header bar -->
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="one_fourth"><a href="Default.aspx" id="logo"></a></div>
		
        <!-- Menu -->
        <div class="three_fourth last">
           
           <nav id="access" class="access" role="navigation">
           
            <div id="menu" class="menu">
                
				<ul id="tiny">
                
                    <li><a href="Default.aspx">Home</a></li>
                    <li><a href="standard-hosting.html">Web Hosting<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="standard-hosting.html">Standard Hosting</a></li>					
                            <li><a href="professional-hosting.html">Professional Hosting</a></li>
                            <li><a href="advanced-hosting.html">Advanced Hosting</a></li>
                            <li><a href="unlimited-hosting.html">Unlimited Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Features<i class="fa fa-angle-down"></i></a>
                        
                        <ul>
                            <li><a href="standard-page.html">Standard/About Page</a></li>
                            <li><a href="about-page.html">About Page Style 2</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="columns.html">Page Columns</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="#">Portfolio Pages ></a>
                                <ul>
                                    <li><a href="portfolio-one.html">Single Image</a></li>
                                    <li><a href="portfolio-two.html">2 Columns</a></li>
                                    <li><a href="portfolio-three.html">3 Columns</a></li>
                                    <li><a href="portfolio-four.html">4 Columns</a></li>
                                    <li><a href="portfolio-five.html">Portfolio Fancy</a></li>
                                </ul>
                            </li>
                            <li><a href="full-width.html">Full Width Page</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                            <li><a href="left-nav.html">Left Navigation</a></li>
                            <li><a href="right-nav.html">Right Navigation</a></li>
                            <li><a href="404.html">404 Error Page</a></li>
                        </ul>
                        
                    
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="blog.html">with Large image</a></li>
                            <li><a href="blog-2.html">with Small image</a></li>
                            <li><a href="blog-post.html">Single post</a></li>
                        </ul>
                    </li>
                    <li><a href="support.html">Support</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                    
                </ul>
                
            </div>
            
        </nav><!-- end nav menu -->
      
        </div>
        
        
		</div>
		
	</div>
    
	</div>
    
</div></header>
</div><!-- end header -->
   

<div class="clearfix"></div>
 
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Contact</h1></div>
        <div class="pagenation">&nbsp;<a href="Default.aspx">Home</a> <i>/</i> Contact</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">
        	
    <div class="one_half">
        

    <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
      <br />
    <p>Please be patient while waiting for response. (24/7 Support!)</p>
      <br />
    <p><strong>Phone General Inquiries: +46 (739) 723 718</strong></p>

    <br />
    <h3><i>Contact Form</i></h3>

    <form action="" method="post">
    
        <fieldset>
        
        <?php if (!isset($errorC) || $errorC == true){ ?>
        
        <label for="name" class="blocklabel">Your Name*</label>
        <p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="yourname" class="input_bg" type="text" id="name" value='<?php if (isset($the_name)) echo $the_name?>'/></p>
        
        
        <label for="email" class="blocklabel">E-Mail*</label>
        <p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($the_email)) echo $the_email ?>' /></p>
        
        
        <label for="website" class="blocklabel">Website</label>
        <p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($the_website))  echo $the_website?>"/></p>
        
        
        <label for="message" class="blocklabel">Your Message*</label>
        <p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($the_message)) echo $the_message ?></textarea></p>
        
        
        <p>
        <input type="hidden" id="myemail" name="myemail" value="<?php echo $email_adress_reciever; ?>" />
        <input type="hidden" id="myblogname" name="myblogname" value="<?php echo $name_of_your_site; ?>" />
        <div class="clearfix"></div>
        <input name="Send" type="submit" value="SUBMIT" class="comment_submit" id="send"/></p>
        <?php } else { ?> 
        
        <div class="success">
            <div class="message-box-wrap">
               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
        </div>
        
        <?php } ?>
        
        </fieldset>
        
        </form> 
    
    </div>
               
    <div class="one_half last">
    
        <div class="address-info">
            <h3><i>Address Info</i></h3>
                <ul>
                <li>
                <strong>Company Name</strong><br />
                2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                Telephone: +1 +46 (739) 723 718<br />
                FAX: +1 0123-4567-8900<br />
                E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                Website: <a href="Default.aspx">www.yoursitename.com</a>
                </li>
            </ul>
        </div>

         <h3><i>Find the Address</i></h3>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
        
    </div>
            
</div>

</div><!-- end content area -->


<div class="bottom_section">

	<div class="waves_graph2"></div>
   
    <div class="container">
    	<div class="big_text2"><i>Best Small Business Hosting Services.</i> YOUR E-BUSINESS IS OUR JOB!</div>
    </div>
    
    <div class="clearfix mar_top3"></div>
    
</div><!-- end bottom section -->


<div class="footer">


	<div class="container">
    	
        <div class="one_fourth">
        
        	<h3>Support/Help</h3>
            
            <ul class="list">
            <li><a href="#"><i class="fa fa-angle-right"></i> Contact Us</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Knowledge Base</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Downloads</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> My Account</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Submit Ticket</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Sign Up</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Affiliates</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Video Tutorials</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Hosting Industry News</a></li>
			</ul>
            
        </div><!-- end section -->
        
        <div class="one_fourth">
        
        	<h3>Recent Blog Posts</h3>
            
            <ul class="recent_blogs">     
                <li>
                <img src="http://placehold.it/50x50" alt="" />
                <p><a href="#">Lorem Ipsum dummy</a>
                <i>November 01, 2013<br />
                No Comments</i></p>
                </li>
                <li>
                <img src="http://placehold.it/50x50" alt="" />
                <p><a href="#">There are variations</a>
                <i>November 01, 2013<br />
                No Comments</i></p>
                </li>
                <li class="last">
                <img src="http://placehold.it/50x50" alt="" />
                <p><a href="#">Slightly to believable</a>
                <i>November 01, 2013<br />
                No Comments</i></p>
                </li>
			</ul>
            
        </div><!-- end section -->
        
        <div class="one_fourth">
        
        	<h3>Transfer Your Site</h3>
            
            We'll help you t make transferring your website and domain name fast and easy transfer.
            <div class="mar_top2"></div>
            <div class="clearfix"></div>
            
            <ul class="list">
                <li><i class="fa fa-angle-right"></i> Free Website Transfer</li>
                <li><i class="fa fa-angle-right"></i> Free Domain Transfer</li>
                <li><i class="fa fa-angle-right"></i> Outstanding reliability</li>
                <li><i class="fa fa-angle-right"></i> State-of-the-art Data Center</li>
                <li><i class="fa fa-angle-right"></i> Money Back Guarantee</li>
                <li><i class="fa fa-angle-right"></i> 24/7 Support</li>
			</ul>
           	  
        </div><!-- end section -->
        
        
        <div class="one_fourth last">
        
        	<h3>Have any Questions</h3>
            
            <div class="any_questions">
                <img src="http://placehold.it/55x50" alt="" />
                <p>If you have any questions, feel free to call us toll-free</p>
                <div class="clearfix mar_top1"></div>
                <h3><i>Toll-free:</i>  +46 (739) 723 718</h3>
            </div>
            
            <div class="live_chat">
            <a href="#"><img src="images/chat-icon.png" alt="" /></a>
            <h2><a href="#">live chat <i>with our agents</i></a></h2>
            </div>
           	  
        </div><!-- end section -->
          
    </div>
    
    <div class="footer_sectwo">
    
    	<div class="container">
        
        	<div class="free_scripts">
            	
                <h4>Free 1-Click Script Installs!</h4>
                
                <ul>
                	<li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                    <li><img src="http://placehold.it/38x38" alt="" /></li>
                </ul>
                
            </div><!-- end free script installs -->
            
            <div class="payments_list">
            
            	<h4>Payments We&nbsp;Accept</h4>
                
                <ul>
                	<li><img src="http://placehold.it/50x38" alt="" /></li>
                    <li><img src="http://placehold.it/50x38" alt="" /></li>
                    <li><img src="http://placehold.it/50x38" alt="" /></li>
                    <li><img src="http://placehold.it/50x38" alt="" /></li>
                    <li><img src="http://placehold.it/50x38" alt="" /></li>
                    <li><img src="http://placehold.it/50x38" alt="" /></li>
                </ul>
            
            </div><!-- end payments accept -->
        
        </div>
    
    </div>

</div>

<div class="clearfix"></div>



<div class="copyright_info">

    <div class="container">
    
        <div class="one_half">
        
            <b>Copyright © 2013 GoldenAI.com. All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></b>
            
        </div>
    
    	<div class="one_half last">
     		
            <ul class="footer_social_links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-html5"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
                
    	</div>
    
    </div>
    
</div>

<div class="clearfix"></div>

<!-- Footer
======================================= -->



<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



 
</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<script type="text/javascript" src="js/sticky-menu/core.js"></script>

</body>
</html>
