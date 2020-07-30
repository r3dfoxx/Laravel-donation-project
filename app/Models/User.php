<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Request;
use Carbon;

class User extends Model
{
    use Notifiable;

    protected $casts = [
        'Date' => 'date:Y-m-d',
    ];

    protected $fillable = [
        'Name',
        'Email',
        'Amount',
        'Message',
        'created_at'
    ];
    public $timestamps = true;

    public function getDateAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

   // public function getCreatedAtAttribute($value)
//{
 //   return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->toDateTimeString())->format('d/m/y H:i a');
//}
}


