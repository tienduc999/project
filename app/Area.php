<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:47 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'id',
        'number_of_users',
        'start_time',
        'end_time',
        'calendar',
        'price',
        'stadium_id'
    ];
    public function stadium(){
        return $this->belongsTo(Stadium::class,'stadium_id','id');
    }
}