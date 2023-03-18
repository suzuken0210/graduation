<x-app-layout>
    <x-slot name="header">
        詳細画面
    </x-slot>
        <div>
            <p>タイトル：{{ $post->title }}</p>
            <p>本文：{{ $post->body }}</p>
            <p>居住地：{{ $post->area }}</p>
            <p>趣味：{{ $post->hobby }}</p>
            
            
            
            
            
            
            <p>カテゴリー：<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
        </div>
        <div>

            <a href="/">戻る</a>
        </div>
 
</x-app-layout>