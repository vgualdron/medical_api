<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'document_type', 'document_number', 'address', 'phone', 'email', 'status'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}
