@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div style="text-align: center" class="panel-heading">
                        <h3>Video posts </h3><br>
                        <a href="/post"><h5>Create a Post</h5></a>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($posts as $post)
                            <a href="{{ url('posts/' . $post->id) }}" class="col-md-6">
                                <div class="text-center">{{ $post->title }}</div>
                                
                                <video width="320" height="240" controls>
                                        <source src="/uploads/{{ $post->video }}" type="video/mp4">
                                        <source src="/uploads/{{ $post->video }}" type="video/ogg">
                                        <source src="/uploads/{{ $post->video }}" type="video/avi">
                                    
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
