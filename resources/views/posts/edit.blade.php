<!-- body内だけを表示しています。 -->
    <x-app-layout>
    <x-slot name="edit">

    </x-slot>
    
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class='content__route'>
                    <h2>進路</h2>
                    <input type='text' name='post[route]' value="{{ $post->route }}">
                </div>
                
                <div class='content__area'>
                    <h2>居住地域</h2>
                    <input type='text' name='post[area]' value="{{ $post->area }}">
                </div>
                
                <div class='content__hobby'>
                    <h2>趣味</h2>
                    <input type='text' name='post[hobby]' value="{{ $post->hobby }}">
                </div>
                
                <div class='content__message'>
                    <h2>メッセージ</h2>
                    <input type='text' name='post[message]' value="{{ $post->message }}">
                </div>
                
                <div class='content__contact_address1'>
                    <h2>連絡先</h2>
                    <input type='text' name='post[contact_address1]' value="{{ $post->contact_address1 }}">
                </div>
                
                
                <input type="submit" value="保存">
            </form>
        </div>
    

 </x-app-layout>