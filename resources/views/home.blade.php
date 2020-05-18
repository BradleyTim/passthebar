@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                <a class="btn btn-primary btn-sm" href="{{ route('blog.create')}}">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
