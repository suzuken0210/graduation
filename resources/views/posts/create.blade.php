<x-app-layout>
    <x-slot name="header">
        チーム開発会へようこそ！
    </x-slot>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            
            
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
                <h2>カテゴリー</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
 </x-app-layout>
