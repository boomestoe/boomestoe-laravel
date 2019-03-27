@extends('frontEnd.index')

@section('slider')
@endsection

@section('judul-berita','BERITA TERBARU')
@section('sub-berita','Daftar Berita Terbaru')

@section('main-content')

<!-- Blog-Wrapper -->
<div class="blog-page-wrapper">
	<div class="container">
		<div class="row">

			<div class="blog-posts col-md-8">
                @foreach ($blog as $berita)
                <div class="blog-box">
					<div class="blog-top-desc">
						<div class="blog-date">
							{{ date('j M, Y', strtotime($berita->berita_tanggal)) }}
						</div>
						<h4>{{ $berita->berita_judul }}</h4>
						<i class="fa fa-user-o"></i> <strong>Admin</strong>
						<i class="fa fa-commenting-o"></i> <strong>10 Comments</strong>
					</div>
					<img class="img-responsive" src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" alt="berita_gambar">
					<div class="blog-info-block">
				 	<p class="ArticleBody">
				  		{!! str_limit(htmlspecialchars_decode($berita->berita_isi),400) !!}
					    @if (strlen(strip_tags($berita->berita_isi)) > 400)
					      <br><a href="{{ route('berita', $berita->berita_slug) }}" class="btn btn-min btn-solid"> Read More  <i class="fa fa-arrow-right"></i></a>
					    @endif
					</p>
					</div>
				</div><br> 
                @endforeach
				<div class="pagination-wrapper">
					<li>{{ $blog->links() }}</li>
				</div>
			</div><br>
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
							@foreach($berita->kategori as $kategori)
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
							@foreach ($berita->tag as $tag)
								<a href="{{ route('tag',$tag->tag_slug) }}"><span>{{ $tag->tag_nama}}</span></a>
							@endforeach
						</div>
					</div>
				</div>
			</div> --}}
		@include('frontEnd.layouts.sidebar')
		</div>
	</div>
</div>


@endsection

