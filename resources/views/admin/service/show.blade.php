@extends('admin/master')
@section('main-content')
<div class="card">
  <h5 class="card-header text-secondary">{{$service->id}}</h5>
  <div class="card-body">
    <h5 class="card-title text-success">{{$service->title}}</h5>
    <p class="card-text">{{$service->description}}</p>
    <br>
    <h6 class="text-info">Created At : {{$service->created_at}}<h6>
    <br>
    <h6 class="text-info">Updated At : {{$service->Updated_at}}<h6>
  </div>
</div>
@endsection