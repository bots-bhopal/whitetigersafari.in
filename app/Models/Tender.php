<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tender extends Model
{
    use HasFactory;

    protected $table = 'tenders';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'last_date',
        'original_filename',
        'filename',
        'file_size',
        'file_extension',
        'description',
        'file'
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 0);
    }
}
