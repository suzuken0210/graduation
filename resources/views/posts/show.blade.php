<x-app-layout>
    <x-slot name="header">
        詳細画面
    </x-slot>
        <div>
            
            <p>進路：{{ $post->route }}</p>
            <p>居住地：{{ $post->area }}</p>
            <p>趣味：{{ $post->hobby }}</p>
            <p>メッセージ：{{ $post->message }}</p>
            <p>連絡先：{{ $post->contact_address1 }}</p>
            <p>id：{{ $post->id }}</p>
            <p>user_id：{{ $post->user_id }}</p>
            
        </div>
        <div>
            

            <a href="/">戻る</a>
        </div>
        
 
</x-app-layout>