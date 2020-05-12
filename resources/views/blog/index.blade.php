@extends('welcome')

@section('content')
  @forelse ($blogs as $blog)
    <div class="card pl-2 py-2 mb-2">
      <h4 class="font-weight-light text-capitalize">
        <a class="text-sm text-secondary text-decoration-none" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a> 
      </h4>  
    </div>
  @empty
    <p class="display-4 text-muted center">It's empty in here for now</p> 
  @endforelse 
@endsection