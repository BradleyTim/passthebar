@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('blog.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blog.create') }}">Blogs</a></li>
            <li class="breadcrumb-item"><a href="{{ route('tags.create') }}">Tags</a></li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ auth()->user()->name }}
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Blog Posts</div>
                <div class="card-body">
                    <h4>Create a new Blog</h4>
                    <a class="btn btn-primary btn-sm" href="{{ route('blog.create')}}">Create a Blog</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    <h4>Create a new Tag</h4>
                    <a class="btn btn-primary btn-sm" href="{{ route('tags.create')}}">Create a Tag</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
