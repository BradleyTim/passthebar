@extends('welcome')

@section('content')
  @forelse ($blogs as $blog)
    <div class="card">
      <h2 class="card-title">
      <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a> 
      </h2>  
    </div>
    <hr>
  @empty
    <p>It's empty in here for now</p> 
  @endforelse 
@endsection