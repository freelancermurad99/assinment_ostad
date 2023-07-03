<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function getTotalPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }

    public static function getSoftDeletedPosts()
    {
        return self::withTrashed()->get();
    }
}
