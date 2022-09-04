<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','address', 'amount','image','floor','year','storeroom','balcony','area', 'room','toilet','parking','tag','user_id','cat_id','status','sell_status','type','view'];

    protected $casts = [
        'image' => 'array',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

}
