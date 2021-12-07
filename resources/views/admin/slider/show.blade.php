@extends('admin/master')
@section('main-content')	
<center>
<div class="card" style="width: 30rem;">
  <img class="card-img-top" src="{{ asset('slider/'.$slider->image) }}">
  <div class="card-body">
    <h5 class="card-title">id = {{ $slider->id }}</h5>
    <p class="card-text">Created At =  {{ $slider->created_at }}</p>
    <p class="card-text">Updated At = {{ $slider->updated_at }}</p>
  </div>
</div>
</center>
@endsection