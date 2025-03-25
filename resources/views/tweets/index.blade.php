<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($tweets as $tweet)
                    <div class="mb-4 p-4 border rounded">
                        <p>{{ $tweet->tweet }}</p>
                        <small>
                            投稿者: {{ $tweet->user->first_name }} {{ $tweet->user->last_name }} 
                            | <a href="{{ route('tweets.show', $tweet->id) }}">詳細</a>
                        </small>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>