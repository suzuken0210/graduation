<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //postに対するリレーション
    public function post()
    {
        return $this->hasOne(Post::class);
    }
    
    //自分をフォローしている人のデータを取ってくる
    public function follwers()
    {
        return $this->belongsToMany(User::class, 'follows', 'followers_id', 'followees_id');
    }
    
    //自分がフォローしている側のデータを取ってくる
    public function followees()
    {
        return $this->belongsToMany(User::class, 'follows', 'followees_id', 'followers_id');
    }
    
    
}
