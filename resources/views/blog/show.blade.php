@extends('welcome')

@section('content')
 <section class="pr-5 show-blog">
   <article class="w-75 blog">
     <h2 class="font-weight-normal display-4 text-capitalize blog-title">{{ $blog->title }}</h2>
     <p class="display-5 text-muted blog-slug">{{ $blog->slug }}</p>
     <div class="text-black text-justify blog-body">{{ $blog->body }}</div>
     <div class="mt-3">
       @foreach ($blog->tags as $tag)
           <a href="/blog?tag={{ $tag->name }}">#{{ $tag->name }}</a>
       @endforeach
     </div>
   </article>
 </section>
@endsection