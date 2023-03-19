<x-app-layout>
    <x-slot name="header">
        チーム開発会へようこそ！
    </x-slot>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            
            
            
            
            <div>
                <h2>進路</h2>
                <textarea name="post[route]" placeholder="～～大学">{{ old('post.route') }}</textarea>
                <p class="route__error" style="color:red">{{ $errors->first('post.route') }}</p>
            </div>
            
            <div>
                <h2>居住地域</h2>
                <textarea name="post[area]" placeholder="～～県">{{ old('post.area') }}</textarea>
                <p class="area__error" style="color:red">{{ $errors->first('post.area') }}</p>
            </div>
            
            <div>
                <h2>趣味</h2>
                <textarea name="post[hobby]" placeholder="ランニング、読書">{{ old('post.hobby') }}</textarea>
                <p class="hobby__error" style="color:red">{{ $errors->first('post.hobby') }}</p>
            </div>
            
            <div>
                <h2>メッセージ</h2>
                <textarea name="post[message]" placeholder="ありがとうございました">{{ old('post.message') }}</textarea>
                <p class="message__error" style="color:red">{{ $errors->first('post.message') }}</p>
            </div>
            
        
            <div>
                <h2>id</h2>
                <textarea name="post[user_id]" placeholder="">{{ old('post.user_id') }}</textarea>
                <p class="user_id__error" style="color:red">{{ $errors->first('post.user_id') }}</p>

            </div>
            
            
            
            
            
            <div class="image">
                <input type="file" name="image">
            </div>
            
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
        
 </x-app-layout>
