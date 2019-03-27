@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manajemen Berita</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Tag</a></li>
        <li class="active">edit Tag</li>
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
              <h3 class="box-title">Edit Data Tag</h3>
            </div>

            {{-- errors --}}
            @include('includes.errors')

            <!-- form start -->
            <form role="form" action="{{ route('tag.update', $tag->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="col-lg-offset-4 col-lg-3">
                  <div class="form-group">
                    <label for="tag">Nama Tag</label>                      
                    <input type="text" class="form-control" id="tag" name="nama_tag" value="{{ $tag->tag_nama }}" >
                  </div>                
                  <div class="form-group">
                    <label for="tag">Slug Tag</label>
                      <input type="text" class="form-control" id="slug" name="nama_slug" value="{{ $tag->tag_slug}}">
                  </div>
  		            <div class="form-group">
                    <a class="btn bg-purple btn-flat" href="{{ route('tag.index') }}"><span class="fa fa-chevron-left"></span> Kembali</a>
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



