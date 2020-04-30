@extends('welcome')

@section('content')
  <form class="create-blog" action="/blog/create" method="POST">
    @csrf
    <h2>Create A New Blog Post</h2>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
      @error('title')
        <div class="alert-error">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" value="{{ old('slug') }}">
      @error('slug')
        <div class="alert-error">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" placeholder="Body" cols="30" rows="5">{{ old('body') }}</textarea>
      @error('body')
        <div class="alert-error">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create Blog</button>
  </form>
@endsection