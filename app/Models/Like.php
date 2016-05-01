<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 16/03/2016
 * Time: 18:01
 */

namespace Elyan\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model{

    protected $table = 'likeable';

    public function likeable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('Elyan\Models\User', 'user_id');
    }
}