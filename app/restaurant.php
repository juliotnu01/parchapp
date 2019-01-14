<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
     protected $fillabel = [
    	'id', 'user_id', 'nombre', 'descripcion', 'imagenRuta'

    ];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
    protected $guarded = [];

    protected $hidden = ['updated_at', 'created_at'];
    
}
