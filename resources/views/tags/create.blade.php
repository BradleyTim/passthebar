@extends('layouts.app')

@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message')}}</div>
  @endif
  <form class="" action="/tags" method="POST">
    @csrf
    <h4 class="font-weight-light text-capitalize mb-3">Create A New Tag</h4>
    <div class="form-group mb-3">
      <label for="tag" class="label">Tag Name</label>
      <input type="text" name="name" id="tag" class="form-control py-2" placeholder="Tag Name" value="{{ old('name') }}">
      @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3">Create Tag</button>
  </form>
  <ul class="list-group mt-3">
    @forelse ($tags as $tag)
      <li class="list-group-item">{{ $tag->name }}</li> 
    @empty
      <li class="list-group-item">No tags yet. Create One!</li>
    @endforelse
  </ul>
@endsection