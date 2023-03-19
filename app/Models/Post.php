<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'route',
        'area',
        'hobby',
        'category_id',
    ];
    
    //userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    //自分がフォローしている人のデータを返す(categorys=followees,posts)
    //public function getByfollowees(int $limit_count = 5)
    //{
    //    return $this::with('followee')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    //}
}
