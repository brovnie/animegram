@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" style="max-height: 170px;" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h4">{{ $user->username ?? 'n/a' }}</div>
                    <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                </div>
                
                @can('update', $user->profile)
                <a href="/post/create">Add new post</a>
                @endcan

            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCounts }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCounts }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCounts }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'n/a' }}</div>
            <div>{{ $user->profile->description ?? 'n/a' }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100 ">
            </a>
        </div>

        @endforeach
    </div>
</div>
@endsection