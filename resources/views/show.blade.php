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
                    {{-- <a href="{{ route('post.create') }}" class="btn btn-success me-3">Add New One</a> --}}
                    <a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
</div>
@endsection
