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
        Manajemen Slider
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="#">Slider</a></li>
      <li class="active">list Slider</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Default box -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Daftar Gambar Slider</h3><br>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    @include('includes.message')
    <div class="box-body">
      <div class="form-group"><a href="{{ route('slider.create') }}" class="btn bg-olive btn-flat"><span class="fa fa-plus"></span> <strong> add Slider</strong></a></div>
      <table id="example1" class="table table-bordered table-hover" style="width: 100%">
        <thead>
        <tr class="info">
          <th style="vertical-align: middle;text-align: center;">Cover Slider</th>
          <th style="vertical-align: middle;text-align: center;">Judul Slider</th>
          <th style="vertical-align: middle;text-align: center;">Deskripsi Slider</th>
          <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
          <th style="vertical-align: middle;text-align: center;">Author</th>
          <th style="vertical-align: middle;text-align: center;">Ukuran Slider</th>
          <th style="vertical-align: middle;text-align: center;">Tipe Slider</th>
          <th style="vertical-align: middle;text-align: center;">Status</th>
          <th style="vertical-align: middle;text-align: center;">Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($slider as $slider)
        <tr role="row">
          <td style="text-align: center;"><img src="{{ asset('storage/images/slider/'.$slider->slider_gambar) }}" width="150" alt="image"></td>
          <td style="vertical-align: middle;">{{ $slider->slider_judul }}</td> 
          <td style="vertical-align: middle;">{{ $slider->slider_subjudul }}</td>             
          <td style="vertical-align: middle;text-align: center;">{{ date('j M Y', strtotime($slider->created_at)) }}</td>
          <td style="vertical-align: middle;">{{ $slider->slider_pengguna_id }}</td>
          <td style="vertical-align: middle;text-align: center;">{{ $slider->slider_ukuran }}</td>
          <td style="vertical-align: middle;text-align: center;">{{ $slider->slider_mime }}</td>
          <td style="vertical-align: middle;text-align: center;">
          @if($slider->slider_status == '1')
                 <span class="btn btn-info disabled btn-sm glyphicon glyphicon-send"> Published</span>
              @else
                <span class="btn btn-warning disabled btn-sm glyphicon glyphicon-flash"> Draft</span>
            @endif
          </td>
          <td style="vertical-align: middle; text-align: center;">
            <div class="btn-group">
              <a href="{{ route('slider.edit',$slider->id) }}"><span class="btn btn-default glyphicon glyphicon-edit"></span></a>
              <form id="delete-form-{{ $slider->id }}" method="post" action="{{ route('slider.destroy', $slider->id) }}" style="display: none">
              {{ csrf_field () }}
              {{ method_field('DELETE') }}              
              </form>
                <a href="" onclick="
                  if(confirm('Apakah Anda yakin mau menghapus Gambar Slider ini?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $slider->id }}').submit();
                    }
                  else{ event.preventDefault(); }">
                  <span class="btn btn-default glyphicon glyphicon-trash"></span></a>
                </div>
          </td>
        </tr>
        @endforeach
        </tbody>
        {{-- <tfoot>
        <tr>
          <th style="vertical-align: middle;text-align: center;">Cover Slider</th>
          <th style="vertical-align: middle;text-align: center;">Judul Slider</th>
          <th style="vertical-align: middle;text-align: center;">Deskripsi Slider</th>
          <th style="vertical-align: middle;text-align: center;">Tanggal Terbit</th>
          <th style="vertical-align: middle;text-align: center;">Author</th>
          <th style="vertical-align: middle;text-align: center;">Ukuran Slider</th>
          <th style="vertical-align: middle;text-align: center;">Mime Slider</th>
          <th style="vertical-align: middle;text-align: center;">Status</th>
          <th style="vertical-align: middle;text-align: center;">Aksi</th>
        </tr>
        </tfoot> --}}
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