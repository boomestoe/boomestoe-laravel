@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Manajemen Slider</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('slider.index') }}">Slider</a></li>
      <li class="active">edit Slider</li>
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
            <h3 class="box-title">Ubah Gambar Slider</h3>
          </div>

            {{-- errors --}}
          @include('includes.errors')

          <!-- form start -->
          <form role="form" action="{{ route('slider.update','$slider->id') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
               <div class="col-lg-offset-4 col-lg-3">
                <div class="form-group">
                  <label for="judul">Judul Slider</label>
                  <div class="controls{{$errors ->has('judul_slider')?'has-error':''}}">
                    <input type="text" class="form-control" id="slider" name="judul_slider" value="{{ $slider->slider_judul }}" required="required">
                    @if (old($slider->slider_judul)==1)
                      <span class="text-danger">{{ $errors->first('judul_slider') }}</span>
                    @endif
                  </div>
                </div> 
                <div class="form-group">
                  <label for="deskripsi">Deskripsi Slider</label>
                  <div class="controls{{$errors ->has('deskripsi_slider')?'has-error':''}}">
                    <textarea type="text" class="form-control" rows="7" id="deskripsi" name="deskripsi_slider" value="" required="required">{{ $slider->slider_subjudul }}</textarea>
                    @if(old($slider->slider_subjudul)==1)
                      <span class="text-danger">{{ $errors -> first('deskripsi_slider')}}</span>
                    @endif
                  </div>
                </div>                  
                <div class="form-group">
                  <label for="image">Gambar Slider</label>
                  <input type="file" id="image" name="gambar_slider">
                </div>
                <div class="form-group">
                  @if($slider->slider_gambar !='')
                    <img src="{{ asset('storage/images/slider/'.$slider->slider_gambar)}}" width="200" alt="">
                  @endif
                  <div class="checkbox pull-right" style="margin: -40px 0px 0px 0;">
                    <label>
                      <input type="checkbox" name="status_slider" value="1"
                        @if ($slider->slider_status == 1)
                          {{ 'checked' }}
                        @endif>Publish
                    </label>
                  </div>
                </div>      
                <div class="form-group with-border">
                  <a class="btn bg-purple btn-flat center" href="{{ route('slider.index') }}"><span class="fa fa-chevron-left"></span> Kembali</a>
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

@endsection



