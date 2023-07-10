<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\User;

class Admin2 extends Model
{

    protected $fillable = [
        'user_id', 'the_title', 'details','geographical_location','time_'
    ];




    public function admin2User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //
}
