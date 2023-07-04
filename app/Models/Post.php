<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 *
 * @property bool $published
 * @property Carbon $published_at
 *
 */




class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'content',

        'published',
        'published_at',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'published'=>'boolean',
        'published_at'=>'datetime',
    ];


    public function isPublished():bool {
        return $this->published && $this->published_at;
    }

}
