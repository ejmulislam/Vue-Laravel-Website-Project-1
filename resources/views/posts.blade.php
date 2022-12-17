

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <ul>
        @foreach ($posts as $post)
        <p>
            {{$post->title}}
        </p>
        <p>
            {{$post->content}}
        </p>
        @endforeach
    </ul>
</x-app-layout>

