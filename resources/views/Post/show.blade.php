@extends('welcome')

@section('content')
    <div class="flex  justify-center ">
        <div class="flex items-center w-1/3 flex-col space-y-4">
            <div class="flex justify-center">

                <img class="w-80 h-64 object-cover  rounded-2xl border-yellow-400 border-2" src="{{$post->image}}"
                     alt="">
            </div>
            <div class="flex justify-around w-64 items-center">
                <a href="{{route('posts.index')}}" class="button-ua">Back</a>
                <a href="{{route('posts.edit',$post->id)}}" class="button-ua">Edit</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    <input type="submit" class="button-ua text-red-600 " value="Delete">
                    @method('delete')
                    @csrf
                </form>

            </div>

            <div class="flex flex-col items-center">
                <h1 class="font-bold text-white text-2xl">{{$post->title}}</h1>
                <p class="font-semibold text-amber-50">{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection
