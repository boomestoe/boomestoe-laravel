<!-- sidebar -->
<div class="sidebar-wrapper col-md-4">
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
		{{-- <div class="widget">
			<div class="widget-title">
				<h4>Berita Terbaru</h4>
				<div class="sep">
					<div class="sep-inside"></div>
				</div>
			</div>
			@foreach ($berita as $berita)
			<div class="recent-posts clearfix">
				<div class="post clearfix">
					<div class="image-wrapper">
						<div class="mask"><a href="{{ route('berita', $berita->berita_slug) }}"><i class="fa fa-link"></i></a></div>
						<img src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" alt="berita_gambar" width="100px" height="75px;">
					</div>
					<div class="info-block">
						<a href="#"><h4>{{ $berita->berita_judul }}</h4></a>
						<div class="meta">
							<p><i class="fa fa-user"></i>lovelytheme</p>
							<span>&#x7C;</span>
							<p><i class="fa fa-clock-o"></i>{{ date('j M, Y', strtotime($berita->berita_tanggal)) }}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div> --}}
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
</div>

{{-- section-sidebar --}}
@section('sidebar')
    @show