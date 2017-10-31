<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'address','user_id',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }


    
}
