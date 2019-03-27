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
          Manajemen Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Berita</a></li>
        <li class="active">list Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Berita Utama</h3><br>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      @include('includes.message')
      <div class="box-body">
        <div class="form-group"><a class="btn bg-olive btn-flat" href="{{ route('berita.create') }}"><span class="fa fa-plus"></span> <strong>Tambah</strong></a></div>
        <table id="example1" class="table table-bordered table-hover" style="width: 100%">
          <thead>
          <tr>
            <th style="vertical-align: middle;text-align: center;">Cover Berita</th>
            <th style="vertical-align: middle;">Judul Berita</th>
            <th style="vertical-align: middle;">Subjudul Berita</th>
            <th style="vertical-align: middle;">Slug Berita</th>            
            <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
            <th style="vertical-align: middle;text-align: center;">Status</th>
            <th style="vertical-align: middle;text-align: center;">Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($berita as $berita)
          <tr role="row">
            <td style="text-align: center;"><img src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" width="150" alt="berita_gambar"></td>            
            <td style="vertical-align: middle;">{{ $berita->berita_judul}}</td>            
            <td style="vertical-align: middle;">{{ $berita->berita_subjudul}}</td>
            <td style="vertical-align: middle;">{{ $berita->berita_slug}}</td>
            <td style="vertical-align: middle;">{{ date('j M Y, H:i:s', strtotime($berita->berita_tanggal)) }}</td>
            <td style="vertical-align: middle; text-align: center;">
              @if($berita->berita_status == '1')
                 <span class="btn btn-info disabled btn-sm glyphicon glyphicon-send"> Published</span>
              @else
                <span class="btn btn-warning disabled btn-sm glyphicon glyphicon-flash"> Draft</span>
              @endif
            </td>
            <td style="vertical-align: middle; text-align: center;">
              <div class="btn-group">
                <a href="{{ route('berita.edit',$berita->id)}}"><span class="btn btn-default glyphicon glyphicon-edit"></span></a>
                <form id="delete-form-{{ $berita->id }}" method="post" action="{{ route('berita.destroy', $berita->id) }}" style="display: none">
                {{ csrf_field () }}
                {{ method_field('DELETE') }}              
                </form>
                  <a href="" onclick="
                    if(confirm('Apakah Anda yakin mau menghapus berita ini?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $berita->id }}').submit();
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
            <th style="vertical-align: middle;text-align: center;">Gambar</th>
            <th style="vertical-align: middle;">Judul Berita</th>
            <th style="vertical-align: middle;">Subjudul Berita</th>
            <th style="vertical-align: middle;">Slug Berita</th>            
            <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
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