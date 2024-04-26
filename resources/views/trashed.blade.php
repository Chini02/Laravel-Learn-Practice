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
                    <a href="{{ route('post.index') }}" class="btn btn-success me-3">Back</a>
                    {{-- <a href="#" class="btn btn-secondary">Go somewhere</a> --}}
                </div>
            </div>
        </nav>
    </div>
    <div class="card-body">
        <h5 class="card-title">Create Post</h5>
        <form method="POST" action="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title </label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description </label>
              <input type="text" name="description" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Publish Date</label>
                <input type="date" name="publishdate" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" name="" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
