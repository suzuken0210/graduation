
<x-app-layout>
    <x-slot name="header">
        Graduationへようこそ！
        <!-- 検索機能ここから -->
    <div>
        <form action="/search"method="GET">
            @csrf

                <input type="text" name="keyword">
                <input type="submit" value="検索">
        </form>
    </div>

    </x-slot>
<<<<<<< HEAD
<div class="mx-28">
        <h2 style="width: 400px; margin: auto;">投稿一覧画面</h2>
        
=======
    
        <h2>投稿一覧画面</h2>
>>>>>>> f76f4c6b272d5cbb468853e49d0b8e7c0a5a103e
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
<<<<<<< HEAD
  </div>      
        
=======
    
>>>>>>> f76f4c6b272d5cbb468853e49d0b8e7c0a5a103e
        
</x-app-layout>