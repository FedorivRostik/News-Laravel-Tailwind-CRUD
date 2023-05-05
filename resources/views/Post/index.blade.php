@extends('welcome')

@section('content')
    <div class="flex flex-col space-y-5">
    <div class="flex justify-center flex-col space-y-3 w-full mb-3">
        <div class="flex justify-start ">

<a href="{{route('posts.create')}}" class="border-yellow-500 border-2 px-4 py-1 rounded-xl text-yellow-400" >Create</a>
        </div>

<section class="grid grid-cols-3 gap-2 ">
@foreach($posts as $post)

        <a href="{{route('posts.show',$post->id)}}" class="relative flex h-56 overflow-hidden">
            <div
                class="w-full h-full bg-gradient-to-b from-black/10 to-black/40 rounded-2xl absolute left-0 top-0 z-10 border-yellow-400 border-2 ">
            </div>
            <img src={{$post->image}}alt="" class="w-full rounded-2xl h-full opacity-90 object-cover">
            <div class="">
                <div class="absolute left-0 bottom-0 z-30 p-4 h-28 overflow-hidden ">
                    <h3 class="font-bold text-white ">Title:{{$post->title}}</h3>
                    <p class="text-amber-50">Content:{{$post->content}}</p>
                </div>
            </div>
        </a>

@endforeach
    </div>
    </section>
        <div class="flex w-full justify-center">

        {{$posts->links()}}
        </div>
    </div>
@endsection
