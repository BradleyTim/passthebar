@extends('layouts.app')

@section('content')
 <section class="pr-5 show-blog">
   <article class="blog">
     <h2 class="font-weight-normal display-4 text-capitalize show-title-text">{{ $blog->title }}</h2>
     {{-- <p class="display-5 text-muted blog-slug">{{ $blog->slug }}</p> --}}
     <ul class="d-flex">
       @foreach ($blog->tags as $tag)
        <li>
          <a href="/blog?tag={{ $tag->name }}">#{{ $tag->name }}</a>
        </li>
       @endforeach
     </ul>
     <div class="text-black text-justify blog-body">{!! $blog->body !!}</div>
     {{-- <div class="mt-3">
       @foreach ($blog->tags as $tag)
           <a href="/blog?tag={{ $tag->name }}">#{{ $tag->name }}</a>
       @endforeach
     </div> --}}
   </article>
 </section>
@endsection