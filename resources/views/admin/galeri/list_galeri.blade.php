@extends('admin.layouts.app')

@section('AdminHead')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backEnd/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backEnd/plugins/toast/jquery.toast.min.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        Manajemen Galeri
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#">Galeri</a></li>
      <li class="active">list Album</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Default box -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Daftar Galeri Album</h3><br>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    @include('includes.message')
    <div class="box-body">
      <div class="form-group"><a href="{{ route('galeri.create') }}" class="btn bg-olive btn-flat"><span class="fa fa-plus"></span> <strong> add Album</strong></a></div>
      <table id="example1" class="table table-bordered table-hover" style="width: 100%">
        <thead>
        <tr class="info">
          <th style="vertical-align: middle;text-align: center;">Cover Album</th>
          <th style="vertical-align: middle;text-align: center;">Judul Album</th>
          <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
          <th style="vertical-align: middle;text-align: center;">Author</th>
          <th style="vertical-align: middle;text-align: center;">Tambah Foto</th>
          <th style="vertical-align: middle;text-align: center;">Jumlah Foto</th>
          <th style="vertical-align: middle;text-align: center;">Status</th>
          <th style="vertical-align: middle;text-align: center;">Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($galeri as $galeri)
        <tr role="row">
          <td style="text-align: center;"><img src="{{ asset('storage/images/album/'.$galeri->galeri_cover) }}" width="150" alt="image"></td>
          <td style="vertical-align: middle;">{{ $galeri->galeri_nama }}</td>            
          <td style="vertical-align: middle;text-align: center;">{{ date('j M Y', strtotime($galeri->created_at)) }}</td>
          <td style="vertical-align: middle;">{{ $galeri->galeri_pengguna_id }}</td>
          <td style="vertical-align: middle; text-align: center;">
            <a href=""><span class="btn btn-warning btn-default glyphicon glyphicon-picture"></span></a>
          </td>
          <td style="vertical-align: middle;text-align: center;"></td>
          <td style="vertical-align: middle; text-align: center;">
            @if($galeri->galeri_publish == '1')
                 <span class="btn btn-info disabled btn-sm glyphicon glyphicon-send"> Published</span>
              @else
                <span class="btn btn-warning disabled btn-sm glyphicon glyphicon-flash"> Draft</span>
            @endif
          </td>
          <td style="vertical-align: middle; text-align: center;">
            <div class="btn-group">
              <a href=""><span class="btn btn-default glyphicon glyphicon-send"></span></a>
              <a href="{{ route('galeri.edit',$galeri->id) }}"><span class="btn btn-default glyphicon glyphicon-edit"></span></a>
              <form id="delete-form-{{ $galeri->id }}" method="post" action="{{ route('galeri.destroy', $galeri->id) }}" style="display: none">
              {{ csrf_field () }}
              {{ method_field('DELETE') }}              
              </form>
                <a href="" onclick="
                  if(confirm('Apakah Anda yakin mau menghapus Galeri Album ini?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $galeri->id }}').submit();
                    }
                  else{ event.preventDefault(); }">
                  <span class="btn btn-default glyphicon glyphicon-trash"></span></a>
                </div>
          </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th style="vertical-align: middle;text-align: center;">Cover Album</th>
          <th style="vertical-align: middle;text-align: center;">Judul Album</th>
          <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
          <th style="vertical-align: middle;text-align: center;">Author</th>  
          <th style="vertical-align: middle;text-align: center;">Tambah Foto</th>          
          <th style="vertical-align: middle;text-align: center;">Jumlah Foto</th>
          <th style="vertical-align: middle;text-align: center;">Status</th>
          <th style="vertical-align: middle;text-align: center;">Aksi</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
</section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection

@section('AdminFooter')
  <!-- DataTables -->
  <script src="{{ asset('backEnd/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backEnd/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
   <script src="{{ asset('backEnd/plugins/toast/jquery.toast.min.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection