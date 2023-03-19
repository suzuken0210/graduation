<x-app-layout>
    <x-slot name="header">
        詳細画面
    </x-slot>
        <div>
            
            <p>本文：{{ $post->body }}</p>
            <p>居住地：{{ $post->area }}</p>
            <p>趣味：{{ $post->hobby }}</p>
            
            <!--コントローラーを呼び出すボタンを作る。editのところを参考にしながらidをコントローラーに送る-->
            <form action="{{ route('follow', ['user' => $post->user->id]) }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn" style="width:175">フォローする</button>
             </form>
            
            
        </div>
        <div>
            

            <a href="/">戻る</a>
        </div>
        
 
</x-app-layout>