
<x-app-layout>
    <x-slot name="header">
        チーム開発会へようこそ！
        <!-- 検索機能ここから -->
    <div>
        <form action="/search"method="GET">
            @csrf

                <input type="text" name="keyword">
                <input type="submit" value="検索">
        </form>
    </div>

    </x-slot>

        <h2>投稿一覧画面</h2>
        <!--<a href='/create'>新規投稿</a>-->
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
                        趣味：<a href="/posts/{{ $post->id }}">{{ $post->hobby }}</a>
                    </p>
                    
                    <p>
                        message：<a href="/posts/{{ $post->id }}">{{ $post->message }}</a>
                    </p>
                    
                    <p>
                        連絡先：<a href="/posts/{{ $post->id }}">{{ $post->contact_address1 }}</a>
                    </p>
                    
                    <p>
                        id：<a href="/posts/{{ $post->id }}">{{ $post->id }}</a>
                    </p>
                    
                    <p>
                        user_id：<a href="/posts/{{ $post->user_id }}">{{ $post->user_id }}</a>
                    </p>
                    
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        
</x-app-layout>