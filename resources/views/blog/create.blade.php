@extends('layouts.app')

@section('content')
    <div class="container m-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold">Add new post</h1>
    </div>

    <div class="container m-auto text-center pt-15 pb-5">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="title"
                class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">

            <textarea name="description" placeholder="description"
                class="w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5">
            </textarea>


            <div class="py-15">
                <label
                    class="
                bg-gray-200 hover:bg-gray-700
                text-gray-700 hover:text-gray-200
                transition duration-300
                cursor-pointer
                p-5 rounded-lg
                font-bold uppercase
                ">
                    select an image to upload
                    <input type="file" name="image" class="hidden">
                </label>
            </div>


            <button type="submit"
                class="
            bg-green-700 hover:bg-green-200
            text-gray-200 hover:text-gray-700
            transition duration-300
            cursor-pointer
            p-5 rounded-lg
            font-bold uppercase
            ">Submit
                this post</button>
        </form>
    </div>
@endsection
