@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div style="text-align:center" class="panel-heading"> <h3>Create your Post</h3>
                        <br>
                       <a href="/posts"><h5>Read Posts</h5></a> 

                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="text-center"><h3>{{ $post->title }}</h3></div>
                            <div style="margin-top:15px" class="text-center"><h5>{{ $post->body }}</h5></div>

                            <div style="margin-top:40px" class="text-center">    
                            <video width="320" height="240" controls>
                                <source src="/uploads/{{ $post->video }}" type="video/webm">
                                <source src="/uploads/{{ $post->video }}" type="video/mp4">
                                <source src="/uploads/{{ $post->video }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            
                        </div>
                          
                        </div>
                        <div class="row" style="padding:30px; margin-top:50px;">
                            @foreach ($comments as $comment)
                            <p> <b>{{ $comment['user'] }}</b></p>
                            <p style="margin:-10px 0 20px 0;">{{ $comment['value'] }}</p>
                                
                            @endforeach
                            <form action="{{ url('/comment') }}" method="POST" class="col-md-12">
                                {{ csrf_field() }}
                                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                                <div class="form-group">
                                    <textarea name="comment"
                                              id="comment"
                                              cols="30"
                                              rows="10"
                                              placeholder="Place your comment here..."
                                              class="form-control"
                                              maxlength="555">
                                    </textarea>
                                </div>
                                <input type="Submit" value="Submit" class="btn btn-primary">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
