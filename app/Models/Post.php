<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','published_at','cat_id','body','image','user_id'];

    protected $casts = [
        'image' => 'array',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }

}
