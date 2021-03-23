@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title ?? '' }}</h5>
                            <p class="card-text">{{ $post->description ?? '' }}</p>
                        </div>
                    </div>
                    <br>
                </div>

        @endforeach
        </div>
    </div>
@endsection
