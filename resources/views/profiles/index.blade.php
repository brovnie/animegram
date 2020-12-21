@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-19/s320x320/16110400_1789506411374809_4276456523825152000_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_ohc=I4IrdUlJ_mkAX_4fRZo&tp=1&oh=48c4bc969034d3c5fc9c894bc070db2d&oe=60046F78" style="max-height: 170px;"class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username ?? 'n/a' }}</h1> 
            <a href="/post/create">Add new post</a>
        </div>
            <div class="d-flex">
                <div class="pr-5"><strong>10</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'n/a' }}</div>
            <div>{{ $user->profile->description ?? 'n/a' }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4" >
            <img src="/storage/{{ $post->image }}" alt=""class="w-100 ">
        </div>

        @endforeach
    </div>
</div>
@endsection
