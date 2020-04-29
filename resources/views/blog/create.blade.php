@extends('welcome')

@section('content')
  <form class="create-blog" action="/blog/create" method="POST">
    <h2>Create A New Blog Post</h2>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control" placeholder="Body" cols="30" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Blog</button>
  </form>
@endsection