@extends('layouts.app')
@section('title', $post['title'])
{{--  @section('title', $post->title)  --}}

@section('content')
@if($post['is_new'])
<div>A new blog post using ifffff</div>
@else
<div>A blog post is old! using elseif/else</div>
@endif

@unless($post['is_new'])
<div>It is an old post.....using  unlesss</div>
@endunless

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>

@isset($post['has_comments'])
<div>The post has some comments... using isset</div>
@endisset
    {{--  <h1>{{ $posts->title }}</h1>
    <p>{{ $posts->content }}</p>
    <p>Added {{ $post->created_at->difforHumans() }}</p>

@if(now()->diffInMinutes($post->created_at) < 5)
<div class="alert alert-info">New!</div>
@endif  --}}
@endsection