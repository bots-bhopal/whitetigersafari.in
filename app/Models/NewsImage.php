<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class NewsImage extends Model
{
    use HasFactory;

    protected $table = 'news_images';

    protected $fillable = ['news_id', 'image'];

    public function newses()
    {
        return $this->belongsTo(News::class);
    }
}
