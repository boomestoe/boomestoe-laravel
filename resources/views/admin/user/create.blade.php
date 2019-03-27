@extends('admin.layouts.app')


@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manajemen users</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Tag</a></li>
        <li class="active">add Tag</li>
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
              <h3 class="box-title">Tambah Data User</h3>
            </div>

            {{-- Pesan error --}}
            @include('includes.errors')

            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                 <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                    <label for="tag">Tag Nama</label>
                    <input type="text" class="form-control" id="tag" name="nama_tag" placeholder="-- Sub-Judul --">
                  </div>
                  <div class="form-group">
                    <label for="slug">Tag Slug</label>
                    <input type="text" class="form-control" id="slug" name="nama_slug" placeholder="-- Slug --">
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Publish</button>
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

