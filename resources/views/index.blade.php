@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Removed the ul -->
                <div class="ms-auto">
                    <a href="{{ route('post.create') }}" class="btn btn-success me-3">Add New One</a>
                    <a href="#" class="btn btn-secondary">Trashed</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <table class="table">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Description</th>
              <th scope="col">Piblish Date</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Title 1</td>
              <td>Category 1</td>
              <td>Description 1</td>
              <td>4-25-24</td>
              <td>
                <img src="" alt="">
              </td>
              <td class="text-center">
                  <a href="" class="btn-sm btn-primary btn me-3">Show</a>
                  <a href="#" class="btn-sm btn-warning btn me-3">Edite</a>
                  <a href="#" class="btn-sm btn-danger btn">Delet</a>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
@endsection
