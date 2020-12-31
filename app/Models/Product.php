<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rate', 'quantity', 'details'];

    public function user() 
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function category() 
    {
        return $this->hasMany(\App\Models\Category::class);
    }    
    public function image() 
    {
        return $this->hasMany(\App\Models\Image::class);
    }   

    public function getImagePathAttribute() 
    {
        if( is_null( $this->image()->pluck('image')->first() ) ) {
            return asset('storage/left.jpg');
        }
    
        return asset('storage/'. $this->image()->pluck('image')->first());
    }
}
