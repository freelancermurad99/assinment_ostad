<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Define the table associated with the Category model
    protected $table = 'categories';

    // Define the primary key column name (optional, as 'id' is the default)
    protected $primaryKey = 'id';

    // Define the fillable columns to allow mass assignment
    protected $fillable = ['name'];

    // Define any guarded columns (columns you want to restrict from mass assignment)
    // protected $guarded = [];

    // Define the timestamps columns (optional, as 'created_at' and 'updated_at' are the defaults)
    // public $timestamps = true; // This is the default

    // Define relationships, if any
    // For example, if a Category has many Products, you can define the relationship as follows:
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
