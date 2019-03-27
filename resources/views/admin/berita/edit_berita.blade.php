@extends('admin.layouts.app')

@section('AdminHead')
    <!-- multiple form -->
    <link rel="stylesheet" href="{{ asset('backEnd/bower_components/select2/dist/css/select2.min.css') }}">

@endsection


@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Berita Utama</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Berita</a></li>
        <li class="active">edit Berita</li>
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
              <h3 class="box-title">Manajemen Berita</h3>
            </div>
            
            {{-- messages --}}
            @include('includes.message')

            <!-- form start -->
            <form role="form-group" action="{{ route('berita.update', $berita->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
              <div class="box-body">
                 <div class="col-lg-6">
                  <div class="form-group">
                    <label for="title">Judul Berita</label>
                      <input type="text" class="form-control" id="id" name="judul" value="{{ $berita->berita_judul }}" required="required"> 
                          @if (old($berita->judul)==1)
                            <span class="text-danger">{{ $errors -> first('judul')}}</span>
                          @endif
                  </div>
                  <div class="form-group">
                    <label for="subtitle">SubJudul Berita</label>
                      <div class="controls{{$errors ->has('subjudul')?'has-error':''}}">
                      <input type="text" class="form-control" id="id" name="subjudul" value="{{ $berita->berita_subjudul }}" required="required">
                      @if (old($berita->subjudul)==1)
                        <span class="text-danger">{{ $errors -> first('subjudul')}}</span>
                      @endif
                    </div>
                  </div>           
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <div class="controls{{$errors ->has('slug')?'has-error':''}}">
                      <input type="text" class="form-control" id="id" name="slug" value="{{ $berita->berita_slug }}" required="required">
                      @if (old($berita->slug)==1)
                        <span class="text-danger">{{ $errors -> first('slug')}}</span>
                      @endif
                    </div>
                  </div>   
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Pilih Tag</label>
                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tag[]">
                      @foreach ($tag as $tag)
                        <option value="{{ $tag->id }}"
                        @foreach ($berita->tag as $beritaTag)
                          @if ($beritaTag->id == $tag->id)
                            selected 
                          @endif
                        @endforeach
                        >{{ $tag->tag_nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                  <label>Pilih Kategori</label>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="" style="width: 100%;" tabindex="-1" aria-hidden="true" name="kategori[]">
                    @foreach ($kategori as $kategori)
                        <option value="{{ $kategori->id }}"
                        @foreach ($berita->kategori as $beritaKategori)
                          @if ($beritaKategori->id == $kategori->id)
                            selected 
                          @endif
                        @endforeach
                        >{{ $kategori->kategori_nama}}</option>
                    @endforeach
                  </select>
                  </div>
                  <div class="pull-left">
                    <div class="form-group"  style="margin-top: 10px;">
                      <label for="image">Upload Gambar</label>
                      <input type="file" id="image" name="berita_gambar">
                    </div>
                  </div>
                  <div class="form-group">                    
                      @if($berita->berita_gambar!='')
                          <img class="pull-left" src="{{ asset('storage/images/berita/'.$berita->berita_gambar) }}" width="150" alt=""style="margin-left: 50px;">
                      @endif
                    </div>
                  <div class="checkbox pull-right" style="margin: 35px 250px 0px 0px;">
                    <label>
                      <input type="checkbox" name="status" value="1"
                        @if ($berita->berita_status == 1) 
                          {{ 'checked' }} 
                        @endif>Publish
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- Editor -->
              <div class="box">
                <div class="box-header">
                  <label for="form">Isi Berita</label>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  </div>
              </div>
              <div class="box-body pad">
                <form>
                  <textarea id="editor1" name="isi" rows="10" cols="80">
                    {{ $berita->berita_isi }}
                  </textarea>
                </form>
              </div>       
              <div class="box box-footer">
                  <a class="btn bg-purple btn-flat" href="{{ route('berita.index') }}"><span class="fa fa-chevron-left"></span> Kembali</a>
                  <button type="submit" class="btn bg-olive btn-flat"><span class="glyphicon glyphicon-send"></span> Simpan</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>
</div>

@endsection

@section('AdminFooter')
  <!-- multiple form -->
  <script src="{{ asset('backEnd/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $(".select2").select2();
    });
  </script>
  <!-- CK Editor -->
  <script src="{{ asset('backEnd/bower_components/ckeditor/ckeditor.js') }}"></script>
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    $
  })
</script>

@endsection




