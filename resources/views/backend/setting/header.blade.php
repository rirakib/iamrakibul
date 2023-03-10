@extends('backend.layout')
@section('admin_content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Header</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('adminn') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Header</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">

            <form action="{{ route('header.store') }}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" required placeholder="Enter title">
                </div>

                <div class="form-group">
                  <label for="title">Designations</label>
                  <input type="text" name="designations" class="form-control" id="designations" required placeholder="Enter multiple designations">
                </div>

                <div class="form-group">
                  <label for="icon">Background Image</label>
                  <input type="file" name="bg_image" class="form-control" id="icon">
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
        <div class="col-md-6">

        </div>
      </div>
    </div>
  </section>


@endsection
