@extends('frontEnd.index')

@section('slider')
@endsection

@section('judul-berita','BERITA SINGLE')
@section('sub-berita','Daftar Berita Single')

@section('main-content')

<!-- Blog-Wrapper -->
<div class="blog-page-wrapper">
	<div class="container">
		<div class="row">
			<div class="blog-posts col-md-8">
				<div class="blog-post single-post">
					<a href="#"><h2>{{ $berita->berita_judul }}</h2></a>
					<div class="meta">
						<h5><i class="fa fa-user"></i><a href="#">lovelytheme</a></h5>
						<h5><i class="fa fa-clock-o"></i><a href="#">{{ date('j M, Y',strtotime($berita->created_at)) }}</a></h5>
						<h5><i class="fa fa-folder-open"></i><a href="#">Poor</a> / <a href="#">HomeLess</a> / <a href="#">Cause</a></h5>
						<h5><i class="fa fa-comment"></i><a href="#">86 Comments</a></h5>
					</div>
					<div class="img-wrapper">
						<img class="img-responsive" src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" alt="berita_gambar">
					</div>
					{!! htmlspecialchars_decode($berita->berita_isi) !!}
				</div>
				<div class="single-post-footer">
					<div class="container">
					<div class="col-lg-6 tags clearfix"><h5>Tags</h5>
						@foreach($berita->tag as $tag)
							<a href="{{ route('tag',$tag->tag_slug) }}"><span>{{ $tag->tag_nama}}</span></a>
						@endforeach
					</div>
					<div class="col-lg-6 tags clearfix pull-right"><h5>Kategori</h5>
						@foreach($berita->kategori as $kategori)
							<a href="{{ route('kategori',$kategori->kategori_slug) }}"><span>{{ $kategori->kategori_nama }}</span></a>
						@endforeach
					</div>
				</div>
					<div class="author">
						<img src="{{ asset('frontEnd/assets/img/mini/img-8.jpg') }}" alt="">
						<div class="info-block">
							<h4>Penulis Berita Single</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi consequuntur ratione sunt tempora, labore fuga, asperiores exercitationem, accusantium id voluptates soluta</p>
							<div class="social-media clearfix">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="comments-wrapper">
						<div class="widget-title">
							<h4>There are 61 comments</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
						<div class="comments">
							<div class="comment replayed ">
								<img src="{{ asset('frontEnd/assets/img/mini/img-9.jpg') }}" alt="">
								<div class="info-block">
									<h4 class="user">Ronald Schultz <span>3 days ago</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quas cum, culpa eum expedita soluta! Ipsum voluptatibus nesciunt tenetur, est vero culpa ipsam modi officia.</p>
									<button class="btn btn-min btn-solid"><span>Replay</span></button>
								</div>
							</div>
							<div class="comment replay">
								<img src="{{ asset('frontEnd/assets/img/mini/img-10.jp') }}g" alt="">
								<div class="info-block">
									<h4 class="user">Margaret Greene<span>6 hours ago</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, natus!</p>
									<button class="btn btn-min btn-solid"><span>Replay</span></button>
								</div>
							</div>
							<div class="comment">
								<img src="{{ asset('frontEnd/assets/img/mini/img-11.jp') }}g" alt="">
								<div class="info-block">
									<h4 class="user">Vincent Lewis<span>4 days ago</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quas cum, culpa eum expedita soluta! Ipsum voluptatibus nesciunt tenetur, est vero culpa ipsam modi officia.</p>
									<button class="btn btn-min btn-solid"><span>Replay</span></button>
								</div>
							</div>
							<div class="comment ">
								<img src="{{ asset('frontEnd/assets/img/mini/img-12.jp') }}g" alt="">
								<div class="info-block">
									<h4 class="user">Vincent Lewis <span>6 days ago</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quas cum, culpa eum expedita soluta! Ipsum voluptatibus nesciunt tenetur, est vero culpa ipsam modi officia.</p>
									<button class="btn btn-min btn-solid"><span>Replay</span></button>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-form-wrapper">
						<div class="widget-title">
							<h4>Leave a comment</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
						<form class="comment-form" action="#" name="comment">
							<div class="field">
								<h4>Name</h4>
								<input type="text" name="name">
							</div>
							<div class="field">
								<h4>E-mail</h4>
								<input type="email" name="e-mail">
							</div>
							<div class="field">
								<h4>Website</h4>
								<input type="url" name="website">
							</div>
							<div class="field">
								<h4>Message</h4>
								<textarea name="messgae"></textarea>
							</div>
							<div class="field">
								<button class="btn btn-min btn-solid">Send Comment</button>
							</div>
						</form>
					</div>
				</div>
			</div>	
			<!-- sidebar -->
			{{-- <div class="sidebar-wrapper col-md-4">
				<div class="sidebar">
					<div class="search-bar">
						<form action="#" >
							<div class="field">
								<input type="text" name="search" placeholder="Type and Hit Enter">
								<button><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				 	<div class="widget">
						<div class="widget-title">
							<h4>Kategori</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
						<div class="categories">
							@foreach($kategori->get() as $kategori)
								<a href="{{ route('kategori',$kategori->kategori_slug) }}">{{ $kategori->kategori_nama}}<span>120</span></a>
							@endforeach
						</div>
					</div>
					<div class="widget">
						<div class="widget-title">
							<h4>Recent Posts</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
						<div class="recent-posts clearfix">
							<div class="post clearfix">
								<div class="image-wrapper">
									<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
									<img src="{{ asset('frontEnd/assets/img/mini/img-1.jpg') }}" alt="">
								</div>
								<div class="info-block">
									<a href="#"><h4>Help Them, Let’s Buy Them a Place To Live</h4></a>
									<div class="meta">
										<p><i class="fa fa-user"></i>lovelytheme</p>
										<span>&#x7C;</span>
										<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
									</div>
								</div>
							</div>
							<div class="post clearfix">
								<div class="image-wrapper">
									<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
									<img src="{{ asset('frontEnd/assets/img/mini/img-2.jpg') }}" alt="">
								</div>
								<div class="info-block">
									<a href="#"><h4>Let's Build Them a New School</h4></a>
									<div class="meta">
										<p><i class="fa fa-user"></i>lovelytheme</p>
										<span>&#x7C;</span>
										<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
									</div>
								</div>
							</div>
							<div class="post clearfix">
								<div class="image-wrapper">
									<div class="mask"><a href="#"><i class="fa fa-link"></i></a></div>
									<img src="{{ asset('frontEnd/assets/img/mini/img-3.jpg') }}" alt="">
								</div>
								<div class="info-block">
									<a href="#"><h4>Let's Build Them a New School</h4></a>
									<div class="meta">
										<p><i class="fa fa-user"></i>lovelytheme</p>
										<span>&#x7C;</span>
										<p><i class="fa fa-clock-o"></i>21  jan, 2017</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget">
						<div class="widget-title">
							<h4>Tags</h4>
							<div class="sep">
								<div class="sep-inside"></div>
							</div>
						</div>
						<div class="tags">
							@foreach($tag->get() as $tag)
								<a href="{{ route('tag',$tag->tag_slug) }}"><span>{{ $tag->tag_nama}}</span></a>
							@endforeach
						</div>
					</div>
				 </div>
			</div>	 --}}
		@include('frontEnd.layouts.sidebar')
		</div>
	</div>
</div>

@endsection


