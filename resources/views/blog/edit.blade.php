@extends('layouts.app')

@section('other-scripts')
   <script src="https://cdn.tiny.cloud/1/pnyjcujgor1mrrk0ybvzreqxtlh3yxf20i3t85gdoxmykwkk/tinymce/5/tinymce.min.js" referrerpolicy="origin" defer></script>
   <script src="{{ asset('js/tinymice.js') }}" defer></script> 
@endsection

@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message')}}</div>
  @endif
  <form class="create-blog" action="{{ route('blog.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h4 class="font-weight-light text-capitalize mb-3">Update Blog Post</h4>
    <div class="form-group mb-3">
      <label for="title" class="">Title</label>
      <input type="text" name="title" id="title" class="form-control py-2" placeholder="Title" value="{{ $blog->title }}">
      @error('title')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="slug">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control py-2" placeholder="Slug" value="{{ $blog->slug }}">
      @error('slug')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" placeholder="Body" cols="30" rows="7">{{ $blog->body }}</textarea>
      @error('body')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="tags">Tags</label>
      <select name="tags[]" id="tags" class="form-control" value="{{ $blog->tags }}" multiple>
        @foreach ($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
      </select>
      @error('tags')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3">Update Blog</button>
  </form>
@endsection