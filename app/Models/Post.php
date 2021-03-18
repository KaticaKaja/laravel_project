<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "title", "description", "content", "image", "editor_pick"];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // U SLUCAJU DA ADMIN MORA PRVO DA APPROVE-UJE POST
    // protected static function booted()
    // {
    //     static::addGlobalScope('active', function (Builder $builder) {
    //         $builder->where('approved', true);
    //     });
    // }

    public static function uploadImage($image){
        $path = Storage::disk('public')->putFile('assets/img', $image);
        $exploded = explode('/', $path);
        return $exploded[count($exploded) - 1];
    }

    public static function deleteImage($image){
        Storage::disk('public')->delete('assets/img/' . $image);
    }
}
