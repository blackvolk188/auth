<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegistrationLog extends Model
{
    protected $table = 'user_registration_log';
    protected $fillable = ['user_id', 'registered_at'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
