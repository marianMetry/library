<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'img',
        'price',
        'cat_id'
    ];
    //relation between book and cat -->book belongs to cat
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
