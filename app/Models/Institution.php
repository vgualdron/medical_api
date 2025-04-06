<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = ['company_id', 'name', 'document_type', 'document_number', 'address', 'phone', 'email', 'status'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function headquarters()
    {
        return $this->hasMany(Headquarters::class);
    }
}
