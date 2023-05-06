@extends('welcome')

@section('content')
    <div class="flex flex-col items-center w-full h-full ">
        <div class=" flex w-full justify-center mb-3">

            <h2 class="font-bold text-2xl text-yellow-400">Create your post</h2>
        </div>
        <form action={{route('posts.store')}} method="post"
              class="flex space-y-3 p-4 flex-col border-yellow-400 border-2 rounded-2xl w-1/3 h-1/3">
            @csrf
            <div class="flex flex-col space-y-1">
                <label class="text-white" for="title">Title:</label>
                <input class="border-3 w-4/5 p-2 rounded-2xl" type="text" name="title" id="title"
                       placeholder="Input title" value="{{old('title')}}">
                @error('title')
                <p class="text-red-600"> {{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col space-y-1">
                <label class="text-white" for="content">Content:</label>
                <textarea class="border-3 p-2 w-4/5 rounded-2xl max-h-48" name="content" id="content"
                          placeholder="Input main content"  >{{old('content')}}</textarea>
                @error('content')
                <p class="text-red-600"> {{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col space-y-1">
                <label class="text-white" for="image">Image:</label>
                <input class="border-3 w-4/5 p-2 rounded-2xl" type="text" name=image"" id="image"
                       placeholder="Input image url" value="{{old('image')}}">
                @error('image')
                <p class="text-red-600"> {{$message}}</p>
                @enderror
            </div>

            <div class="w-11/12 flex justify-end">

                <input type="submit" class="cursor-pointer  border-2 border-yellow-500 px-4 py-1 rounded-2xl text-white"
                       value="Create">
            </div>
        </form>
    </div>
@endsection
