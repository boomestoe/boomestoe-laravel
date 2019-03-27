@extends('frontEnd.index')

@section('banner')
@endsection

@section('main-content')

<!-- Special Cause Paralax -->
	<div class="special-cause">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 donet__area_img">			
					<img src="{{ asset('storage/images/profil/fery_insani.png') }}" alt="" />
				</div>
				<div class="col-md-8 col-xs-12 donet__area">			
					<div class="section-name parallax one">
						<h1>Selamat Datang di Website Resmi</h1>
						<h2>BAPPEDA PROVINSI KEPULAUAN BANGKA BELITUNG</h2><br><br>
						<h3><strong>H. Feri Insani</strong></h3>
						<p>Kepala Bappeda Provinsi Kepulauan Bangka Belitung</p>
					</div>
					<div class="foundings">
						<div class="progress-bar-wrapper big">
							<div class="progress-bar-outer">
								<div class="clearfix">
									<span class="value one">Aktifitas Pengunjung</span>
								</div>
								<div class="progress-bar-inner">
									<div class="progress-bar">
										<span data-percent="75"> <span class="pretng">75%</span> </span>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->
	<section  class="blog-area blog-post-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Berita Terbaru</h2>
				<div class="short-text">
					<h5>Ini daftar berita terbaru ....</h5>
				</div>
			</div>			
			<div class="row">
				<!-- Blog Single -->
				@foreach($berita as $berita)
				<div class="col-md-4 col-sm-6">
					<div class="blog-box">
						<div class="blog-top-desc">
							<div class="blog-date">
								{{ date('j M, Y',strtotime($berita->berita_tanggal)) }}
							</div>
							
								<h4>{{ str_limit(strip_tags($berita->berita_judul),50)}}</h4>
							{{-- @if (strlen(strip_tags($berita->berita_judul)) > 60)
							@endif --}}
							<i class="fa fa-user-o"></i> <strong>Admin</strong>
							<i class="fa fa-commenting-o"></i> <strong>12 Comments</strong>
						</div>
						<img src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" alt="">
						<div class="blog-btm-desc">
					 	<p class="ArticleBody">
					  		{!! str_limit(htmlspecialchars_decode($berita->berita_isi),200) !!}
						    @if (strlen(strip_tags($berita->berita_isi)) > 200)
						      <br><a href="{{ route('berita', $berita->berita_slug) }}" class="btn btn-min btn-solid"> Read More  <i class="fa fa-arrow-right"></i></a>
						    @endif
						</p>
						</div>
					</div>
				</div>
				@endforeach
				<!-- Blog Single -->				
			</div>
			<div class="btns-wrapper">
				<a href="{{ route('blog') }}" class="btn btn-big btn-solid "><i class="fa fa-archive"></i><span>Daftar Berita</span></a>
			</div>
		</div>
	</section>

	<!-- Features -->
	<div class="features-wrapper one">
		<div class="container">
			<div class="section-name one">
				<h2>Jaringan Mitra</h2>
				<div class="short-text">
					<h5>Bappeda Provinsi Kepulauan Bangka Belitung</h5>
				</div>
			</div>
			<div class="row features">
				<div class="col-md-4 col-sm-6 ">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-handshake-o"></i></div>					
						<a href="" class="btn"><h4>Food Delivering</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-medkit" aria-hidden="true"></i></div>
						<a href="" class="btn">
						<h4>Aids For Health</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm ">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-book" aria-hidden="true"></i></div>
						<a href="" class="btn">	
						<h4>Build Education</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm ">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-book" aria-hidden="true"></i></div>
						<a href="" class="btn">	
						<h4>Build Education</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm ">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-book" aria-hidden="true"></i></div>
						<a href="" class="btn">	
						<h4>Build Education</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 hidden-sm ">
					<div class="feature clearfix">
						<div class="icon_we"><i class="fa fa-book" aria-hidden="true"></i></div>
						<a href="" class="btn">	
						<h4>Build Education</h4></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, maiores officia placeat incidunt aperiam</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!-- Causes -->
	<div class="causes-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Recent Cause</h2>
				<div class="short-text">
					<h5>Your little support can bring smile of there</h5>
				</div>
			</div>
			<div class="causes">
				<div class="causes-list row">
					<div class="cause-wrapper col-md-4 col-xs-12 col-sm-6 legal health">
						<div class="cause content-box">
							<div class="img-wrapper">
								<div class="overlay">
								</div>
								<img class="{{ asset('frontEnd/img-responsive" src="assets/img/causes/img-1.jpg') }}" alt="">
							</div>
							<div class="info-block">
								<h4><a href="#">Stop Chilldern Abuse</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur deleniti fuga ear</p>
								<div class="foundings">
									<div class="progress-bar-wrapper min">
										<div class="progress-bar-outer">
											<p class="values"><span class="value one">Raised: $12500</span>-<span class="value two">To go: $45222</span></p>
											<div class="progress-bar-inner">
												<div class="progress-bar">
													<span data-percent="55"><span class="pretng">55%</span> </span>
												</div>	
											</div>		
										</div>
									</div>
								</div>
								<div class="donet_btn">
									<a href="causes-single.html" class="btn btn-min btn-solid"><i class="fa fa-archive"></i><span>Donate Now</span></a>								
								</div>								
							</div>
						</div>
					</div>
					<div class="cause-wrapper col-md-4 col-xs-12 col-sm-6 education poor health legal">
						<div class="cause content-box">
							<div class="img-wrapper">
								<div class="overlay">
								</div>
								<img class="{{ asset('frontEnd/img-responsive" src="assets/img/causes/img-2.jpg') }}" alt="">
							</div>
							<div class="info-block">
								<h4><a href="#">Don't Hurt Me, Please!</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur deleniti fuga ear</p>
								<div class="foundings">
									<div class="progress-bar-wrapper min">
										<div class="progress-bar-outer">
											<p class="values"><span class="value one">Raised: $12500</span>-<span class="value two">To go: $45222</span></p>
											<div class="progress-bar-inner">
												<div class="progress-bar">
													<span data-percent="35"> <span class="pretng">35%</span></span>
												</div>	
											</div>		
										</div>
									</div>
								</div>
								<div class="donet_btn">
									<a href="causes-single.html" class="btn btn-min btn-solid"><i class="fa fa-archive"></i><span>Donate Now</span></a>								
								</div>								
							</div>
						</div>
					</div>
					<div class="cause-wrapper col-md-4 col-xs-12 col-sm-6 ugent poor animals-wildlife hidden-sm  ">
						<div class="cause content-box">
							<div class="img-wrapper">
								<div class="overlay">
								</div>
								<img class="{{ asset('frontEnd/img-responsive" src="assets/img/causes/img-3.jpg') }}" alt="">
							</div>
							<div class="info-block">
								<h4><a href="#">A Better Life for Disabled</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur deleniti fuga ear</p>
								<div class="foundings">
									<div class="progress-bar-wrapper min">
										<div class="progress-bar-outer">
											<p class="values"><span class="value one">Raised: $12500</span>-<span class="value two">To go: $45222</span></p>
											<div class="progress-bar-inner">
												<div class="progress-bar">
													<span data-percent="75"><span class="pretng">75%</span> </span>
												</div>	
											</div>	
										</div>
									</div>
								</div>
								<div class="donet_btn">
									<a href="causes-single.html" class="btn btn-min btn-solid"><i class="fa fa-archive"></i><span>Donate Now</span></a>								
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- work togather -->
	<div class="donation-wrapper-home work_togathers ">
		<div class="parallax-mask"></div>
		<div class="container">
			<div class="work_togather">
				<h2>Give a little &amp; change a lot.</h2>
				<h1>Let’s Work Togather!!</h1>
			</div>
		</div>
	</div>
	
	
	
	<!-- team -->
	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>our volunteers</h2>
				<div class="short-text">
					<h5>We are all times support them for their smile</h5>
				</div>
			</div>	
			
			<div class="team-members row">
				<div class="col-md-4 col-sm-6 col-xs-12">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<a href="#" title=""><img src="{{ asset('frontEnd/assets/img/best-volunte-1.jpg') }}" alt=""></a>
							</div>
							<ul class="socials">
								<li><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								
							</ul>
							<span><a href="#" title="">Cheif Director</a></span>
							<h2><a href="#" title="">Jonathan Greg</a></h2>
							<p>Lorem Jonathan Greg ipsum dolor sit amet, consectetur adipiscing elit, sed Jonathan Greg do...</p>
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<a href="#" title=""><img src="{{ asset('frontEnd/assets/img/best-volunte-2.jpg') }}" alt=""></a>
							</div>
							<ul class="socials">
								<li><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								
							</ul>
							<span><a href="#" title="">Cheif Volunteer</a></span>
							<h2><a href="#" title="">Jennifier kalvin</a></h2>
							<p>Lorem Jonathan Greg ipsum dolor sit amet, consectetur adipiscing elit, sed Jonathan Greg do...</p>
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">	
					<div class="single-member">
						<div class="best-volunteer">
							<div class="voluntee-image">
								<a href="#" title=""><img src="{{ asset('frontEnd/assets/img/best-volunte-3.jpg') }}" alt=""></a>
							</div>
							<ul class="socials">
								<li><a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								
							</ul>
							<span><a href="#" title="">Cheif Director</a></span>
							<h2><a href="#" title="">Mikel Willson</a></h2>
							<p>Lorem Jonathan Greg ipsum dolor sit amet, consectetur adipiscing elit, sed Jonathan Greg do...</p>
						</div>					
					</div>
				</div>	
			</div>	
		</div>	
	</div>		
	
	
	<!-- Volunteers -->
	<div class="volunteers-need-wrapper volunteers-wrapper">
		<div class="parallax-mask"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="weneed-volunt info-block">
					<h2>We Need Volunteers</h2>
					<p>Nullam turpis mauris, egestas sed rutrum quis, egestas quis diam. Morbi at congue justo, a co.
					Fusce eget ante volutpat, rutrum orci non, scelerisque enim. Fusce eget nibh ornare, fringillolvenenatis eros. Nulla laoreet sagittis est, quis dapibus justo malesuada sed.</p>
					<a href="#" class="btn btn-big"><i class="fa fa-heartbeat"></i>Become a Volunteer</a>
				</div>
				</div>
			</div>
		</div>
	</div>	
	
	
	<!-- gallery -->
	<div class="volunteers-wrapper images-gallery-wrapper">
		<div class="container">
			<div class="section-name one">
				<h2>Causes Gallery</h2>
				<div class="short-text">
					<h5>boridiatat non proident sunt in culpa qui officia</h5>
				</div>
			</div>		
			<div class="row">
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-1.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-1.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-2.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-2.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-3.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-3.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-4.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-4.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-5.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-5.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 images-outer ">
					<div class="images-inner  ">
						<div class="nivo-activator"></div>
						<div class="images single-images-gl clearfix">
							<a href="{{ asset('frontEnd/assets/img/gallery/img-1.jpg') }}" class="nivo-trigger" data-lightbox-gallery="gallery1"><span class="fa fa-arrows-alt"></span><img src="{{ asset('frontEnd/assets/img/gallery/img-1.jpg') }}" alt=""></a>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>



@endsection