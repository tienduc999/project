<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:49 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestMatch extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'user_id',
        'stadium',
        'post_id',
        'statust'
    ];
    public function post(){
        return $this->hasMany(Post::class,'Post_id','id');
    }
    public function user(){
        return $this->hasMany(User::class,'user_id','id');
    }

}