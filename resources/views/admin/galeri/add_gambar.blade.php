@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Manajemen Gambar Galeri</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#">Gambar Galeri</a></li>
      <li class="active">add Gambar Galeri</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- Album -->
      <div class="col-md-5">
        <!-- general form elements -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Gambar Galeri</h3>
          </div>
          {{-- Pesan error --}}
          {{-- @include('includes.errors') --}}
          <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                  <label for="galeri">Judul Galeri</label>
                 <input type="text" class="form-control" id="judul" name="judul_galeri" value="" required="required">
                </div>                  
                <div class="form-group">
                  <label for="image">Cover Galeri</label>
                  <input type="file" class="form-control" id="image" name="cover_galeri">
                </div>
            </div><br>
            <div class="form-group">
                  {{-- @if($galeri->galeri_cover !='')
                    <img src="{{ asset('storage/images/album/'.$galeri->galeri_cover)}}" width="200" alt="">
                  @endif --}}
                </div>
          <form role="form" action="" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }}
            <div class="box-header with-border">
              <h4 class="box-title">Upload Multi Images</h4>
            </div>
            <div class="box-body">
              <input type="file" name="file[]" id="exampleInputFile" multiple="true">
            </div>
            <div class="box-footer">
              <a class="btn bg-purple btn-flat center" href=""><span class="fa fa-chevron-left"></span> Kembali</a>
              <button type="submit" class="btn bg-olive btn-flat center"><span class="fa fa-save"></span> Upload</button>
            </div>
          </form>
        </div>
      </div>
      {{-- Images --}}
      <div class="col-md-7">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Gambar Galeri</h3>
            </div>
            {{-- /.box-header --}}
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Gambar</th>
                  <th>Size</th>
                  <th>Mime</th>
                  <th style="width: 40px">Aksi</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->  


@endsection



