@extends('layouts.app')

@section('content')
<div class="container">
@if($posts->isEmpty())
    <div class="row">
        <div>
            <h2>Welcome to Animagram!</h2>
            <p>There are no posts avialable at this moment.</p>
            <p>Please follow the users to see the posts</p>
        </div>
    </div>
@else
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">

                <p><a href="/profile/{{$post->user->id}}" class="text-dark"><span class="font-weight-bold">{{ $post->user->username}}</span></a>
                {{ $post->caption }} </p>
            </div>
        </div>
    @endforeach
    <div class="row">
    <div class="col-12 d-flex justify-content-center">
    {{$posts->links("pagination::bootstrap-4")}}
    </div></div>
@endif
</div>
@endsection
