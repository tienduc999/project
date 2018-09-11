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
    public function post(){
        return $this->hasMany(Post::class,'user_id','id');
    }

    public function stadium(){
        return $this->hasMany(Stadium::class,'user_id','id');
    }

    public function team(){
        return $this->hasMany(Team::class,'user_id','id');
    }

}