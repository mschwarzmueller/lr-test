<?php namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'email',
        'fname',
        'lname',
        'password',
    ];
}
