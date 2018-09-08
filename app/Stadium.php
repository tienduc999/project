<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 8/26/2018
 * Time: 10:09 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'Stadiums';

    protected $fillable = [
        'id',
        'name',
        'manager_name',
        'manager_phone',
        'manager_email',
        'phone',
        'email',
        'facebook',
        'website',
        'province_city',
        'short_note',
        'district',
        ' apartment_number',
        'surface',
        'img',
        'about',
        'user_id',
    ];

}