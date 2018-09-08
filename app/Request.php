<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 9/7/2018
 * Time: 10:49 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id',
        'user_id',
        'stadium',
        'post_id',
        'statust'
    ];

}