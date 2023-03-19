
<x-app-layout>
    <x-slot name="header">
        チーム開発会へようこそ！
    </x-slot>

        <h2>投稿一覧画面</h2>
        <a href='/create'>新規投稿</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    
                    
                    <p>
                        進路：<a href="/posts/{{ $post->id }}">{{ $post->route }}</a>
                    </p>
                    
                    <p>
                        居住地：<a href="/posts/{{ $post->id }}">{{ $post->area }}</a>
                    </p>
                    
                    <p>
                        趣味：<a href="/posts/{{ $post->id }}">{{ $post->image }}</a>
                    </p>
                    
                    <p>
                        id：<a href="/posts/{{ $post->id }}">{{ $post->user_id }}</a>
                    </p>
                    
                    
                    
                    
                    
                    
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
        
</x-app-layout>