
<header>
    <div id="search-bar">
        <div class="container">
            <div class="row">
                <form action="#" name="search" class="col-xs-12">
                    <input type="text" name="search" placeholder="Type and Hit Enter"><i id="search-close" class="fa fa-close"></i>
                </form>
            </div>
        </div>
    </div>
    <nav  class="navigation">
        <div class="container">
            <div class="row">
                <div class="logo-wrap col-md-3 col-xs-6">
                    <a href="{{ route('beranda') }}/">BAPPEDA</a>
                </div>
                <div class="menu-wrap col-md-8 ">
                    <ul class="menu">
                        <li class="submenu">
                            <a href="{{ route('beranda') }}/">Beranda</a>
                        </li>
                        {{-- <li>
                            <span>Informasi Publik</span>
                            <ul class="submenu">
                                <li><a href="causes-grid.html">PPID 1</a></li>
                                <li><a href="causes-list.html">PPID 2</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <span>Dokumen</span>
                            <ul class="submenu">
                                <li><a href="#">Dokumen 1</a></li>
                                <li><a href="blog-single.html">Dokumen 2</a></li>
                                <li><a href="blog-single.html">Dokumen ...</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Berita</span>
                            <ul class="submenu">
                                <li><a href="{{ route('blog') }}">Berita Utama</a></li>
                                <li><a href="blog-single.html">Berita Artikel</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Profil</span>
                            <ul class="submenu">
                                <li><a href="{{ route('profil') }}/">Profil</a></li>
                                <li><a href="blog-single.html">Profil 1</a></li>
                                <li><a href="blog-single.html">Profil 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Galeri</span>
                            <ul class="submenu">
                                <li><a href="#">Galery Foto</a></li>
                                <li><a href="blog-single.html">Galery Video</a></li>
                            </ul>
                        </li>
                        <li>
                            @if (Auth::guest())
                                <a href="{{route('login')}}"><span>Login</span></a>         
                            @else
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        </li>                       
                    </ul>
                </div>
                <div class="col-md-1 col-xs-6">
                    <div id="search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
        </div>

        
        <!--[ MOBILE-MENU-AREA START ]--> 
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="mobile-area">
                            <div class="mobile-menu">
                                <nav id="mobile-nav">
                                    <ul>
                                        <li><a href="{{ route('beranda') }}/">Beranda</a></li>
                                        <li><a href="causes-grid.html">Informasi Publik</a>
                                            <ul class="single">
                                                <li><a href="causes-grid.html">PPID 1</a></li>
                                                <li><a href="causes-list.html">PPID 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html"> Dokumen</a>
                                            <ul class="single">
                                                <li><a href="causes-grid.html">Dokumen 1</a></li>
                                                <li><a href="causes-list.html">Dokumen 2</a></li>
                                                <li><a href="causes-single.html" class="active">Dokumen ...</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-list.html">Berita</a>
                                            <ul>
                                                <li><a href="{{ route('blog') }}">Berita Utama</a></li>
                                                <li><a href="blog-single.html">Artikel</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-list.html">Profil</a>
                                            <ul>
                                                <li><a href="blog-single.html">Profil 1</a></li>
                                                <li><a href="blog-single.html">Profil 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-list.html">Galeri</a>
                                            <ul>
                                                <li><a href="blog-single.html">Galeri Foto</a></li>
                                                <li><a href="blog-single.html">Galeri Video</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[ MOBILE-MENU-AREA END  ]-->    
    </nav>
</header>

{{-- section-header --}}
@section('header')
    @show





