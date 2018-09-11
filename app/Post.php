<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 8/20/2018
 * Time: 2:26 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;


class Post  extends Model
{
    protected $table ='posts';

    protected $fillable =[
        'id',
        'time',
        'stadium',
        'address',
        'level',
        'match',
        'status',
        'note',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}