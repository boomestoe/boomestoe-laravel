@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manajemen Berita</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Kategori</a></li>
        <li class="active">edit Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Kategori</h3>
            </div>

            {{-- Pesan error --}}
            @include('includes.errors')

            <!-- form start -->
            <form role="form" action="{{ route('kategori.update',$kategori->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="col-lg-offset-4 col-lg-3">
                  <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                      <input type="text" class="form-control" id="kategori" name="nama_kategori" value="{{ $kategori->kategori_nama }}">
                  </div>
                  <div class="form-group">
                    <label for="slug">Kategori Slug</label>
                      <input type="text" class="form-control" id="slug" name="kategori_slug" value="{{ $kategori->kategori_slug }}">
                  </div>
                  <div class="form-group">
                  <a class="btn bg-purple btn-flat" href="{{ route('kategori.index') }}"><span class="fa fa-chevron-left"></span> Kembali</a>
                  <button type="submit" class="btn bg-olive btn-flat"><span class="fa fa-save"></span> Simpan</button>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
