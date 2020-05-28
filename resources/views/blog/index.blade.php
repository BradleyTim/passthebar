@extends('layouts.app')

@section('content')
  @forelse ($blogs as $blog)
    <div class="blog-list">
      <h4 class="font-weight-bold text-capitalize">
        <a class="text-decoration-none text-black title-text" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a> 
      </h4>
      @foreach ($blog->tags as $tag)
        <a class="text-sm text-secondary text-decoration-none pr-2" href="/blog?tag={{ $tag->name }}">#{{ $tag->name }}</a>
      @endforeach
      <div class="text-sm text-secondary text-decoration-none mt-2">{{ $blog->created_at->format('M d') }}</div>
    </div>
  @empty
    <p class="display-4 text-muted center">It's empty in here for now. No relevant articles yet.</p> 
  @endforelse 
@endsection