<?php
/**
 * Created by PhpStorm.
 * User: pekubu
 * Date: 8/26/2018
 * Time: 10:09 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'id',
        'access_address',
        'team_name',
        'place',
        'Level',
        'Logo',
        'team_photo',
        'age_from',
        ' to_age',
        'about',
        'user_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}