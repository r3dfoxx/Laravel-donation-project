<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Request;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $casts = [
        'Date' => 'date:Y-m-d',
    ];

    protected $fillable = [
        'Name',
        'Email',
        'Amount',
        'Message',
        'date',
    ];
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function getDateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));

    }


}


