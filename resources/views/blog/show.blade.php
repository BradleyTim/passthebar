@extends('layouts.app')

@section('content')
 <section class="">
   <article class="blog">
     <h2 class="font-weight-normal display-4 text-capitalize show-title-text">{{ $blog->title }}</h2>
     {{-- <p class="display-5 text-muted blog-slug">{{ $blog->slug }}</p> --}}
     <ul class="d-flex">
       @foreach ($blog->tags as $tag)
        <li>
          <a class="f-size-tags" href="/blog?tag={{ $tag->name }}">#{{ $tag->name }}</a>
        </li>
       @endforeach
     </ul>
     <div class="text-black text-justify blog-body f-size-body">{!! $blog->body !!}</div>
    <div class="text-muted">Posted on {{ $blog->created_at->format('M d')}}</div>
   </article>
 </section>
@endsection