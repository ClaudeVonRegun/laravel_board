<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Databese\Eloquent\Relataions\BelongsTo;

class Tweet extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
      'user_id',
      'tweet',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function replies(){
      return $this->hasMany(Reply::class);
    }  
}
