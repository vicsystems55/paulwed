<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/oculus/aboutus-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2023 12:31:33 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Cynthia weds Paul">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Cynthia & Paul | Wedding</title>

        <!-- Favicon and touch Icons -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">
        <link href="images/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="images/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="images/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="images/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Lead Style -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

	<!-- Preloader -->
	<div class="oculoader">
		<div class="loader"></div>
		<div class="top-side"></div>
		<div class="bottom-side"></div>
	</div>
	<!--PreLoader End-->

    <body class="body_box">

		<div class="wrapper">
			<!-- Start Header -->
	        <header id="header" class="header_one">
	            <div class="nav-bar">
					<div class="navigation">
						<div class="logo">
							<a href="/"><img src="images/logo.png" alt="logo"></a>
						</div>
						<nav id="flexmenu">
							<div class="nav-inner">
								<ul class="main-menu">
									<li class="menu-item"><a href="/">Home</a>

									</li>
									<li class="menu-item"><a href="/gallery">Gallery</a>

									</li>

									


								</ul>
							</div>
						</nav>
						<div class="nav-more-info">
							<div class="element">
								<div id="mobile-toggle" class="mobile-btn">
									<span class="toggle_line"></span>
									<span class="toggle_line"></span>
									<span class="toggle_line"></span>
								</div>
								<a href="#" class="search_icon"></a>

							</div>
						</div>
					</div>
	            </div>

	            <div class="overlaynav">
	                <a href="#" class="overlaynavclose">&times;</a>
	                <nav id="overlaymenu">
	                	<ul class="main-menu">
	                		<li class="menu-item"><a href="/">Home</a>

							</li>
							<li class="menu-item"><a href="/gallery">Gallery</a>

							</li>




						</ul>
	                </nav>
	            </div>
	        </header>

			<div class="inner_body">
				<!-- Page Header -->







				<div class="banner_1">
					<div class="container">
						<div class="banner_inner">
							<div class="banner_content">
								<table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>

                                            <th>Address</th>
                                            <th>Inivitees</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($lists as $list)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <th>{{$list->name}}</th>
                                            <th>{{$list->address}}</th>
                                            <th>{{$list->invitees}}</th>


                                        </tr>
                                        @empty

                                        <h6 class="text-center">empty</h6>

                                        @endforelse

                                    </tbody>
                                </table>

                                {{$lists->links()}}
							</div>
						</div>
					</div>
				</div>

			</div>


			<footer class="footer">
				<div class="footer_inner">
					<div class="copyright">
						<p> &copy;vicSystems Technologies Ltd. 2020. All rights reserved</p>
					</div>
					<div class="social-icon">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>

						</ul>
					</div>
				</div>
			</footer>
		</div>

        <!-- All JavaScript Files
        ================================================== -->
		<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/grid.custom.js"></script>
        <script src="js/custom.js"></script>
	</body>

<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/oculus/aboutus-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2023 12:33:20 GMT -->
</html>
