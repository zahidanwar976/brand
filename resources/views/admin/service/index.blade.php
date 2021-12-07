@extends('admin/master')
@section('main-content')
<div class="row align-items-center mc-b-3">
  <div class="col-lg-6 col-12">
    <div class="primary-heading color-dark">
      <h2>Services</h2>
    </div>
  </div>
  <div class="col-lg-6 col-12">
    <div class="text-right">
      <a href="{{ route('services.create') }}" class="primary-btn primary-bg" data-toggle="modal"
      data-target="#alert-modal-1">Add Services</a>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table id="user-table" class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($service as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->description }}</td>
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
              <a class="dropdown-item" href="{{ route('services.show', $data->id) }}"><i class="fa fa-file-text"
                  aria-hidden="true"></i> Detail</a>
              <a class="dropdown-item" href="{{ route('services.edit', $data->id) }}"><i class="fa fa-pencil-square-o"
                    aria-hidden="true"></i> Edit</a>
             <a class="dropdown-item">
               <form  method="post" action="{{route('services.destroy',$data->id)}}">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="w-100 text-left bg-transparent fa fa-pencil-square-o"> Delete</button>
                </form>
              </a>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection