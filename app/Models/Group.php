<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'label', 'order'];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
