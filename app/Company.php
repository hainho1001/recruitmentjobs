<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id', 'name', 'career', 'address', 'profile', 'logo', 'image', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public static function getCompanyByID($id)
    {
    	return self::where('id', $id)->with(['jobs','user'])->first();
    }
}
