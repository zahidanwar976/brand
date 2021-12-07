@extends('admin/master')
@section('main-content')
<div class="row align-items-center mc-b-3">
  <div class="col-lg-6 col-12">
    <div class="primary-heading color-dark">
      <h2>Slider</h2>
    </div>
  </div>
  <div class="col-lg-6 col-12">
    <div class="text-right">
      <a href="{{ route('sliders.create') }}" class="primary-btn primary-bg" data-toggle="modal"
      data-target="#alert-modal-1">Services</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table id="user-table" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Image</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($slider as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td><img style="width: 20%" src="{{ 'slider/'.$data->image }}"></td>
        <td>
          @if($data->status == '1')
          {{ 'Active' }}
          @else
          {{ 'Inactive' }}
          @endif
        </td>
        <td>
          <div class="dropdown show action-dropdown">
            <a class=" dropdown-toggle" href="#" role="button" id="action-dropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="action-dropdown">
              <a class="dropdown-item" href="{{ route('sliders.show', $data->id) }}"><i class="fa fa-file-text"
                  aria-hidden="true"></i> Detail</a>
              <a class="dropdown-item" href="{{ route('sliders.edit', $data->id) }}"><i class="fa fa-pencil-square-o"
                  aria-hidden="true"></i>
                Edit</a>
             
               <form  method="post" action="{{route('sliders.destroy',$data->id)}}">
                  @csrf
                  @method('DELETE')
      <a class="dropdown-item"><button type="submit" class="fa fa-pencil-square-o">Delete</button></a>
                </form>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection