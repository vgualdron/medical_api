<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headquarters extends Model
{
    protected $fillable = ['company_id', 'institution_id', 'name', 'address', 'phone', 'email', 'status'];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
