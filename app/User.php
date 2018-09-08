<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 8/20/2018
 * Time: 1:57 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'account',
        'password',
        'they',
        'name',
        'email',
        'phone',
        'permissions'];

}