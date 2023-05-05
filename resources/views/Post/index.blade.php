@extends('welcome')

@section('content')
    <div class="flex flex-col space-y-5">
    <div class="flex justify-center w-full mb-3">


<section class="grid grid-cols-3 gap-2 ">
@foreach($posts as $post)

        <a href="" class="relative flex h-48 overflow-hidden">
            <div
                class="w-full h-full bg-gradient-to-b from-black/10 to-black/25 rounded-sm absolute left-0 top-0 z-10">
            </div>
            <img src={{$post->image}}alt="" class="w-full rounded-sm h-full opacity-70 object-cover">
            <div class="">
                <div class="absolute left-0 bottom-0 p-4 h-28 overflow-hidden text-white">
                    <h3 class="font-semibold  ">Title:{{$post->title}}</h3>
                    <p>Content:{{$post->content}}</p>
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
