@extends('backend.layout')
@section('admin_content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Service</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('adminn') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Service</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Descriptions</th>
                    <th>Icon</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $key=>$service)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->description }}</td>
                            <td><i class="{{ $service->icon }}"></td>
                            <td><a href="{{ route('service.edit',$service->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a></td>
                            <td><a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection



