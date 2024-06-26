<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
/**
 * The categories that belong to the Post
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
/**
 * The roles that belong to the Post
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function categories()
{
    return $this->belongsToMany(Category::class);
}

}
