@extends('client.layouts.client')
@section('content')
<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="breadcrumb-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-6 hidden-xs">
							<h2 class="page-title">Xəbərlər</h2>
						</div>

						<div class="col-xs-12 col-sm-6">
							<ol class="breadcrumb">
								<li class="active text">Burdasınız:</li>
								<li><a href="{{url('/')}}">Giriş</a></li>
								<li class="active">Xəbərlər</li>
							</ol>
						</div>

					</div>

				</div>

			</div>

			<div class="container-outer">

				<div class="container">

					<div class="row gap-25-sm">

						<div class="col-sm-8 col-md-9">

							  @yield('blog')

						</div>

						<div class="col-sm-4 col-md-3">

							<aside class="sidebar-wrapper">

								<div class="quick-search clearfix">
									<form class="search-form">
										<input type="text" name="search" class="form-control mb-0" placeholder="Axtar...">
										<button class="btn"><i class="fa fa-search"></i></button>
									</form>
								</div>

								<div class="side-module-2 mt-30">

									<h3>Recent Blogs</h3>

									<ul class="sidebar-cat clearfix mb-30 mmt">
										<li class="active"><a href="#">New Cars <span class="absolute">(23)</span></a></li>
										<li><a href="#">Owner Reviews <span class="absolute">(8)</span></a></li>
										<li><a href="#">Auto Shows <span class="absolute">(15)</span></a></li>
										<li><a href="#">Repair &amp; Maintenance <span class="absolute">(5)</span></a></li>
										<li><a href="#">Rebates &amp; Incentives <span class="absolute">(20)</span></a></li>
									</ul>

								</div>

								<div class="side-module-2 mt-30">

									<h3>Recent Blogs</h3>

									<ul class="recent-post-list">
										<li class="clearfix">
											<a href="blog-single.html">
												<div class="image">
													<img src="images/blog/01-sm.jpg" alt="Popular Post" />
												</div>
												<div class="content">
													<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>June 01, 2016</p>
													<h6>Enough around remove to barton agreed regret</h6>
												</div>
											</a>
										</li>
										<li class="clearfix">
											<a href="blog-single.html">
												<div class="image">
													<img src="images/blog/02-sm.jpg" alt="Popular Post" />
												</div>
												<div class="content">
													<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>April 25, 2016</p>
													<h6>Shall downs stand marry taken his for out</h6>
												</div>
											</a>
										</li>
										<li class="clearfix">
											<a href="blog-single.html">
												<div class="image">
													<img src="images/blog/03-sm.jpg" alt="Popular Post" />
												</div>
												<div class="content">
													<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 20, 2016</p>
													<h6>Do related mr account brandon an up.</h6>
												</div>
											</a>
										</li>
										<li class="clearfix">
											<a href="blog-single.html">
												<div class="image">
													<img src="images/blog/04-sm.jpg" alt="Popular Post" />
												</div>
												<div class="content">
													<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>March 05, 2016</p>
													<h6>Our compass see age uncivil matters weather forbade her minutes</h6>
												</div>
											</a>
										</li>
										<li class="clearfix">
											<a href="blog-single.html">
												<div class="image">
													<img src="images/blog/05-sm.jpg" alt="Popular Post" />
												</div>
												<div class="content">
													<p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i>February 17, 2015</p>
													<h6>Ready how but truth son new under.</h6>
												</div>
											</a>
										</li>
									</ul>

								</div>

								<div class="side-module mt-40">

									<h3>Recent Added Cars</h3>

									<div class="inner">

										<div class="car-item-sm">
											<a href="#">
												<div class="image-bg" style="background-image:url('images/car/01.jpg');"></div>
												<div class="content">
													<h6>Kia Sedona</h6>
													<div class="bottom">
														<ul class="car-meta clearfix">
															<li>
																<i class="fa fa-cogs"></i> Gasoline
															</li>
															<li>
																<i class="fa fa-tachometer"></i> 2,888 cc.
															</li>
														</ul>
														<p class="price">20,887$</p>
													</div>
												</div>
											</a>
										</div>

										<div class="car-item-sm">
											<a href="#">
												<div class="image-bg" style="background-image:url('images/car/02.jpg');"></div>
												<div class="content">
													<h6>BMW X4</h6>
													<div class="bottom">
														<ul class="car-meta clearfix">
															<li>
																<i class="fa fa-cogs"></i> Deisel
															</li>
															<li>
																<i class="fa fa-tachometer"></i> 2,300 cc.
															</li>
														</ul>
														<p class="price">20,887$</p>
													</div>
												</div>
											</a>
										</div>

										<div class="car-item-sm">
											<a href="#">
												<div class="image-bg" style="background-image:url('images/car/03.jpg');"></div>
												<div class="content">
													<h6>Audi A4</h6>
													<div class="bottom">
														<ul class="car-meta clearfix">
															<li>
																<i class="fa fa-cogs"></i> Gasoline
															</li>
															<li>
																<i class="fa fa-tachometer"></i> 1,800 cc.
															</li>
														</ul>
														<p class="price">20,887$</p>
													</div>
												</div>
											</a>
										</div>

									</div>

								</div>

								<div class="mt-40 bt pt-20">
									<div class="featured-item">

										<div class="icon">
											<i class="fa fa-phone"></i>
										</div>

										<div class="content">
											<h5>Quick Call</h5>
											<p>+66 74 554 884</p>
										</div>

									</div>
									<div class="featured-item">

										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>

										<div class="content">
											<h5>Quick Email</h5>
											<p>support@taladrod.com</p>
										</div>

									</div>
								</div>

							</aside>

						</div>

					</div>

				</div>

			</div>

		</div>
		  @endsection
