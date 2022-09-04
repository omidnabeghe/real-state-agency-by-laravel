<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory,Searchable;

    protected $fillable = ['name','parent_id'];

    public function parent(){
        return $this->belongsTo($this, 'parent_id');
    }

    public function posts(){
        return $this->hasMany(Post::class, 'cat_id');
    }

    public function ads(){
        return $this->hasMany(Ads::class, 'cat_id');
    }




}

