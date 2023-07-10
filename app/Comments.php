<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'user_id', 'description','admin2_id'
    ];

    /**
     * Get the user that owns the Comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin2(): BelongsTo
    {
        return $this->belongsTo(Admin2::class,'admin2_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



}
