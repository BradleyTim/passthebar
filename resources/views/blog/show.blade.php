@extends('welcome')

@section('content')
 <section class="show-blog">
   <article class="blog">
     <h2 class="blog-title">{{ $blog->title }}</h2>
     <p class="blog-slug">{{ $blog->slug }}</p>
     <div class="blog-body">{{ $blog->body }}</div>
   </article>
 </section>
@endsection