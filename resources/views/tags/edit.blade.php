@extends('layouts.app')

@section('content')
  @if(session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message')}}</div>
  @endif
  <form class="mt-3" action="{{ route('tags.update', $tag->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h4 class="font-weight-light text-capitalize mb-3">Update Tag</h4>
    <div class="form-group mb-3">
      <label for="tag" class="label">Tag Name</label>
      <input type="text" name="name" id="tag" class="form-control py-2" placeholder="Tag Name" value="{{ $tag->name }}">
      @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3">Update Tag</button>
  </form>
@endsection