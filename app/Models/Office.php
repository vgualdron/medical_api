<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['company_id', 'headquarters_id', 'name', 'description', 'status'];

    public function headquarters()
    {
        return $this->belongsTo(Headquarters::class);
    }
}
