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

                    You are logged in, <span class="font-weight-bold">{{ auth()->user()->name }}</span>!
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success mt-3">{{ session()->get('message')}}</div>
            @endif
            <div class="card mt-3">
                <div class="card-header">Blog Posts</div>
                <div class="card-body">
                    <h4>Add a new Blog</h4>
                    <a class="btn btn-primary btn-sm mb-3" href="{{ route('blog.create')}}">New Blog Posts</a>
                    <ul class="list-group my-3">
                        @forelse ($blogs as $blog)
                            <li class="list-group-item text-truncate d-flex justify-content-between">
                              <a class="text-truncate" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                              <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary mr-3" href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('blog.destroy', $blog->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                              </div>
                            </li> 
                        @empty
                            <li class="list-group-item">No blog posts yet. Create One!</li>
                        @endforelse
                    </ul>

                    @if ($blogs->count() > 0)
                        {{ $blogs->links() }}
                    @endif
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    <h4>Add a new Tag</h4>
                    <a class="btn btn-primary btn-sm" href="{{ route('tags.create')}}">Add a new Tag</a>
                    <ul class="list-group my-3">
                        @forelse ($tags as $tag)
                            <li class="list-group-item d-flex justify-content-between">
                                <a class="text-truncate" href="{{ route('tags.create', $tag->id) }}">{{ $tag->name }}</a>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary mr-3" href="{{ route('tags.edit', $tag->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </li> 
                        @empty
                            <li class="list-group-item">No tags in here yet. Create One!</li>
                        @endforelse
                    </ul>

                    @if ($tags->count() > 0)
                        {{ $tags->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
