@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width:50px;">
                    </div>
                    <div>
                        <div class="font-weight-bold"> 
                            <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a> 
                            <a href="#" class="pl-3"> Fallow</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p><a href="/profile/{{$post->user->id}}" class="text-dark"><span class="font-weight-bold">{{ $post->user->username}}</span></a>
             {{ $post->caption }} </p>
        </div>
    </div>
</div>
@endsection