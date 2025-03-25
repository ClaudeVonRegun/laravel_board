<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="p-4 border rounded mb-6">
                    <h3 class="text-lg font-semibold">投稿内容</h3>
                    <p class="my-3">{{ $tweet->tweet }}</p>
                    
                    <div class="mt-4 text-sm text-gray-600">
                        <p>投稿者: {{ $tweet->user->first_name.$tweet->user->last_name }}</p>
                        <p>投稿日時: {{ $tweet->created_at }}</p>
                    </div>
                </div>

                <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4">返信する</h3>
                        <form method="POST" action="{{ route('replies.store', $tweet->id) }}">
                            @csrf
                            <div class="mb-4">
                                <textarea name="reply" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    返信する
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- リプライ一覧 -->
                <h3 class="text-lg font-semibold mb-4">リプライ一覧</h3>

                @if(count($tweet->replies) > 0)
                  @foreach($replies as $reply)
                    <div class="p-4 border rounded mb-3">
                        <p class="mb-2">{{ $reply->reply }}</p>
                        <div class="text-sm text-gray-600">
                            <p>投稿者: {{ $reply->user->first_name.$reply->user->last_name }}</p>
                            <p>投稿日時: {{ $reply->created_at }}</p>
                        </div>
                    </div>
                  @endforeach
                  @else
                    <p class="text-gray-500">まだリプライはありません。</p>
                  @endif
            </div>
        </div>
    </div>
</x-app-layout>