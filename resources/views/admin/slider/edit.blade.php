@extends('admin/master')
@section('main-content')
@if(session()->has('success'))
    <div class="alert alert-success">
    <h1>{{ session('success') }}</h1>
    </div>
@endif
  <div class="main-wrapper">
     <form action="{{ route('sliders.update', $myslide->id) }}" method="POST" class="main-form" enctype='multipart/form-data'>
         @csrf
        @method('PUT')

    <div class="row align-items-center mc-b-3">
      <div class="col-lg-6 col-12">
        <div class="primary-heading color-dark">
          <h2>Update Slider</h2>
        </div>
      </div>
    </div>
    <div class="row mc-b-2">
      <div class="col-lg-8 col-md-8 col-12 col-center">
        <div class="user-img-wrapper mc-b-3">

          <figure><img src="{{ asset('slider/'.$myslide->image) }}" alt="user-img"></figure>
          <label for="user-img" class="user-img-btn"><i class="fa fa-camera"></i></label>
          <input type="file" name="image" id="user-img" class="d-none">
        </div>
        @error('image')
        <div class="alert alert-danger">
          {{ $message }}
        </div>
        @enderror
        <div class="primary-heading color-dark text-center">
          <h2 class="mc-b-1">Select Picture</h2>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-9 col-md-9 col-12">
          <div class="form-group">
            <select name="status" class="form-control">
              @if($myslide->status == '1')
                <option value="1" selected>Active</option>
                <option value="0">Inactive</option>
              @else
                <option value="1">Active</option>
                <option value="0" selected>Inactive</option>
              @endif
            </select>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-3">
            <button type="submit" class="primary-btn primary-bg" data-toggle="modal"
            data-target="#alert-modal-1">Update</button>
        </div>
      </div>
    </form>
  </div>
@endsection