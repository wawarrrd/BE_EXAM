<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'username',
        'first_name',
        'last_name',
        'email_address',
        'password'
    ];

    public function product(){
        return $this->hasMany(Post::class)->latest();
    }
}
