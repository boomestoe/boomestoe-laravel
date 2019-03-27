@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Manajemen Galeri</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#">Galeri</a></li>
      <li class="active">add Galeri</li>
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
            <h3 class="box-title">Tambah Galeri Album</h3>
          </div>

            {{-- errors --}}
          @include('includes.errors')

          <!-- form start -->
          <form role="form" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
               <div class="col-lg-offset-4 col-lg-3">
                <div class="form-group">
                  <label for="galeri">Judul Galeri</label>
                  <div class="controls{{$errors ->has('judul_galeri')?'has-error':''}}">
                    <input type="text" class="form-control" id="galeri" name="judul_galeri" value="{{old('judul_galeri')}}" required="required">
                    <span class="text-danger">{{ $errors -> first('judul_galeri')}}</span>
                  </div>
                </div>                  
                <div class="form-group">
                  <label for="image">Cover Galeri</label>
                  <input type="file" id="image" name="cover_galeri">
                </div><br>
                <div class="form-group">
                  <a class="btn bg-purple btn-flat center" href="{{ route('galeri.index') }}"><span class="fa fa-chevron-left"></span> Kembali</a>
                  <button type="submit" class="btn bg-olive btn-flat center"><span class="fa fa-save"></span> Simpan</button>
                </div>                
              </div>
              </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper --> 


  <!--Modal Add Pengguna-->
{{--   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  {{ csrf_field() }}
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                  <h4 class="modal-title" id="myModalLabel">Add Album</h4>
              </div>
              <form class="form-horizontal" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                  <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Nama Album</label>
                      <div class="col-sm-7">
                          <input type="text" name="galeri_nama" class="form-control" id="inputUserName" placeholder="Nama Album" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Cover Album</label>
                      <div class="col-sm-7">
                          <input type="file" name="galeri_cover" required/>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
              </div>
              </form>
          </div>
      </div>
  </div> --}}

  


@endsection



