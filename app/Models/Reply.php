<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Reply extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
      'user_id',
      'tweet_id',
      'reply',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function tweet(){
      return $this->belongsTo(Tweet::class);
    }
}
