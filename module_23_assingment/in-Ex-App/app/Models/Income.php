<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['amount', 'description', 'remark', 'income_date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
