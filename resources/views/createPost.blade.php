@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('create-post')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
