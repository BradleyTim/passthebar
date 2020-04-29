<form action="/blog/create" method="POST">
  <h2>Create A Bew Blog Post</h2>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" class="form-control" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" id="slug" class="form-control" placeholder="Slug">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" id="body" class="form-control" placeholder="Body">
  </div>
  <button type="submit" class="btn btn-primary">Create Blog</button>
</form>