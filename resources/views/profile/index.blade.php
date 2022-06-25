@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ \Str::limit($headline->name, 100) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ \Str::limit($headline->gender, 100) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ \Str::limit($headline->hobby, 100) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ \Str::limit($headline->introduction, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ \Str::limit($post->name, 150) }}
                                </div>
                                <div class="gender">
                                    {{ \Str::limit($post->gender, 150) }}
                                </div>
                                <div class="hobby">
                                    {{ \Str::limit($post->hobby, 150) }}
                                </div>
                                <div class="introduction">
                                    {{ \Str::limit($post->introduction, 150) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection