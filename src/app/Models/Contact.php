<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

        protected $fillable =['last_name', 'first_name', 'gender', 'email', 'no-1', 'no-2', 'no-3', 'address', 'building', 'select', 'detail', 'category_id'];

        public function category()
        {
            return $this->belongsTo(Category::class);

        }
}