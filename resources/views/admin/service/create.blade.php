@extends('admin/master')
@section('main-content')
<h1 class="text-success">Add Service</h1>
<br>
@if(session()->has('success'))
    <div class="alert alert-success">
    <h1>{{ session('success') }}</h1>
    </div>
@endif
<form action="{{ route('services.store') }}" method="POST" class="main-form mc-b-3">
@csrf
   	<div class="row align-items-end">
    			<div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <label>Title:</label>
                        <div class="relative-div">
                            <input name="title" type="text" class="form-control">
                        </div>
                    </div>
                </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="form-group">
                <label>Status: </label>
                <select name="status" class="form-control">
                    <option>Select</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="row align-items-end">
                <div class="col-lg-11 col-md-11 col-11">
                    <div class="form-group">
                        <label>Description:</label>
                        <div class="relative-div">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-10 col-md-10 col-lg-10">
    		<button class="btn btn-success">Add Service</button>
    	</div>
    </div>
</form>
@endsection
