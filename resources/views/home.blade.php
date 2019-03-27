@extends('frontEnd.index')

@section('slider')
@endsection

@section('judul-berita','TAMU BARU')
@section('sub-berita','Selamat datang di Website Bappeda')

@section('main-content')

<!-- login-Wrapper -->
<div class="contact-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="comment-form-wrapper contact-from clearfix">
                    <div class="widget-title ">
                        <h4>Selamat Bergabung</h4>
                        {{-- <h3>{{$users->name}}</h3> --}}
                        <p>Sekarang Anda sudah bisa mengakses isi website ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






{{-- form Home asli --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
