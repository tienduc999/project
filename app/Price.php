<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:47 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'number_of_users',
        'number_of_stadiums',
        'start_time',
        'end_time',
        'calendar',
        'price',
        'stadium_id'
    ];

}