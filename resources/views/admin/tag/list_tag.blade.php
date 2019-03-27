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
        <li><a href="#">Tag</a></li>
        <li class="active">add Tag</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Data Tag</h3><br>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        @include('includes.message')
        <div class="box-body">
          <div class="form-group"><a class="btn bg-olive btn-flat" href="{{ route('tag.create') }}"><span class="fa fa-plus"></span> <strong> add Tag</strong></a></div>
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Nama Tag</th>
              <th>Nama Slug</th>
              <th style="text-align: right;">Edit</th>
              <th style="text-align: left;">Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($tag as $tag)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $tag->tag_nama}}</td>
              <td>{{ $tag->tag_slug}}</td>
              <td style="text-align: right;">
                <a href="{{ route('tag.edit',$tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
              </td>
              <td style="text-align: left;">
                <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('tag.destroy', $tag->id) }}" style="display: none">
                {{ csrf_field () }}
                {{ method_field('DELETE') }}              
                </form>
                  <a href="" onclick="
                    if(confirm('Apakah Anda yakin mau menghapus data Tag ini?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $tag->id }}').submit();
                      }
                    else{ event.preventDefault(); }">
                    <span class="glyphicon glyphicon-trash"></span></a>
              </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>S.No</th>
              <th>Daftar Tag</th>
              <th>Nama Slug</th>
              <th style="text-align: right;">Edit</th>
              <th style="text-align: left;">Delete</th>
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