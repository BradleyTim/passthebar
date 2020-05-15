@extends('welcome')

@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message')}}</div>
  @endif
  <form class="create-blog" action="/blog" method="POST">
    @csrf
    <h4 class="font-weight-light text-capitalize mb-3">Create A New Blog Post</h4>
    <div class="form-group mb-3">
      <label for="title" class="">Title</label>
      <input type="text" name="title" id="title" class="form-control py-2" placeholder="Title" value="{{ old('title') }}">
      @error('title')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="slug">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control py-2" placeholder="Slug" value="{{ old('slug') }}">
      @error('slug')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" placeholder="Body" cols="30" rows="7">{{ old('body') }}</textarea>
      @error('body')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3">Create Blog</button>
  </form>
@endsection