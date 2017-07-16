<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css"></style>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
	<script type="text/javascript" src="profile.js"></script>
	<header <?php include_once('bloghead.php'); ?>></header>
<body background="http://wallpaper-gallery.net/images/blue-pic/blue-pic-18.jpg">
<div style="padding-top:60px">
	<form id="profilepic_form" action="try.php">
	<fieldset id="profilepic_controls">

	 <div style="width: 100%; height: 235px; position: relative; background-color: #fbfbfb;   border: 1px solid #b8b8b8; "data-controltype="image">
	  <img src="<?php include_once('try.php');?>" alt="image" style="position:     absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px">

	   <div style= "top:50px;"data-role="fieldcontain" data-controltype="camerainput">
		<input type="file" name="btn_Cover" id="camerainput1" accept="pr/*" capture="camera">
	   </div>
	   <div style="padding-top:100px">
	<div style="width:190px; height: 170px; position: relative; background-color: #fbfbfb;   border: 1px solid #b8b8b8; "data-controltype="image">
	  <img src="https://codiqa.com/static/images/v2/image.png" alt="image" style="position:     absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px">

	   <div style= "top:50px;"data-role="fieldcontain" data-controltype="camerainput">
		<input type="file" name="btn_profile" id="camerainput1" accept="image/*" capture="camera">
	   </div>
	</div>
	 </div>
	 </div>
	 

	</form>
</div>
<div style="padding-top:40px"><hr>
<form action="insert.php" method="post">
<div class="container " style="padding-left: 0px>
	<div class="col-md-2" style="margin-top: 2cm">
	<table align = "left">
	
	
	<section id="blog" class="single-blog-area section-padding">
			<div class="container">
				<div class="row">
						<div class="categories single-widget">
							
							<ul class="list-unstyled col-md-2">
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Setting</a></li>
								<li><a href="bolg.php"><i class="fa fa-angle-double-right"></i>Add New Blog</a></li>
								<li><a href="blogList.php"><i class="fa fa-angle-double-right"></i>Blog List</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Comment Moderation</a></li>
							</ul>
						
					<!-- /Start Single Blog Post Design Area -->
					
						
						<div class="comments-area col-md-4">
							<h4>Blogs</h4>
							<!-- /Start Single Comment Design Area -->
							<blockquote class="single-comment">
								
								<!-- php code fatch user blog and name h5>Jhone Smith</h5>-->
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
								<span class="reply-button"><i class="fa fa-reply"></i>reply</span>
							</blockquote>
							<!-- /End Single Comment Design Area -->
							<!-- /Start Single Comment Design Area -->
							<blockquote class="single-comment reply-comment">
								<img src="img/blogs/c1.jpg" class="img-circle" alt="Comment" />
								<h5>Moon Lissa</h5>
								<span><i class="fa fa-calendar"></i>January 22, 2017</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
								<span class="reply-button"><i class="fa fa-reply"></i>reply</span>
							</blockquote>
							<!-- /End Single Comment Design Area -->
							<!-- /Start Single Comment Design Area -->
							<blockquote class="single-comment">
								<img src="img/blogs/c2.jpg" class="img-circle" alt="Comment" />
								<h5>Jhone Smith</h5>
								<span><i class="fa fa-calendar"></i>February 22, 2017</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
								<span class="reply-button"><i class="fa fa-reply"></i>reply</span>
							</blockquote>
							<!-- /End Single Comment Design Area -->
						</div>
						</div>
						</section>
						<!-- /End Comment Design Area -->
						
					</div>
					<!-- /End Single Blog Post Design Area -->
					
				</div>
			</div>
		
	

	</table>
	</div>

	</form>
	</div>
<div class="container" style="background-color:pink">
	<div class="col-md-4">
	<form action="insert.php" method="post">
	
	</div>
	</form>
	</div>
</div>
<div id="fixedfooter"></div>

</body>
</html>