<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_id', 'company_id', 'title', 'level', 'career', 'address', 'description', 'requirements', 'salary'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function userjobs() {
    	return $this->hasMany(UserJob::class);
    }
}
