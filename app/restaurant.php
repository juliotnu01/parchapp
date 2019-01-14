<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
     protected $fillabel = [
    	 'descripcion', 'imagenRuta', 'user_id' ,'nombre'

    ];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
    protected $guarded = [];

    protected $hidden = ['updated_at', 'created_at'];
    
}
