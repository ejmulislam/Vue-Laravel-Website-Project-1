<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        <div class="flex-1">
                            <h2>Add New Post</h2>
                            <form action="{{route('add-post')}}" method="post">
                                @csrf
                                <p>
                                    <input type="text" name="title" value="{{old('title')}}" placeholder="Post title">
                                </p>
                                <p>
                                    <textarea name="content" cols="30" rows="10">{{old('content')}}</textarea>
                                </p>
                                <button type="submit">add post</button>
                            </form>
                        </div>
                        <div class="flex-1">
                            <h2 class="uppercase font-bold mb-2 border-b-2 border-green-400">Posts</h2>
                            <ul>
                                @foreach ($posts as $post)
                                    <li class="flex justify-between space-y-2">
                                        <a href="/posts" class="">{{$post->title}}

                                        </a>
                                        <a href="/posts" class="capitalize text-sm border-b hover:border-b hover:border-green-400 transition duration-300">
                                            read more
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
