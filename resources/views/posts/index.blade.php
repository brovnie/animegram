@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h2>Suggestions</h2>
        <div class="row mt-4 mb-3">
            @foreach($suggestedUsers as $user)
            <div class="pr-5">
                <a href="/profile/{{$user->id}}" alt="Link to profile {{$user->title}}">
                <img src="$user->profileImage()}}" onerror="this.onerror=null;this.src='/images/png/default_avatar.png';" style="max-height: 170px;" class="rounded-circle" width="80px" height="80px" alt="">
                <p class="text-center font-weight-bold">{{$user->title}}</p>
                </a>
            </div>
        @endforeach
        </div>
    </div>
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
