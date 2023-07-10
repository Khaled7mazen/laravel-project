<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\User;

class Admin extends Model
{

    protected $fillable = [
        'user_id', 'title', 'description','image'
    ];


/**
 * Get all of the comments for the Admin
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function comments(): HasMany
{
    return $this->hasMany(Comment::class);
}

    public function adminUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
