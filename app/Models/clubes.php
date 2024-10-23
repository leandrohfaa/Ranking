<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clubes extends Model
{
    protected $fillable = ["name"];
    
    public function titulos()
    {
        return $this->hasMany(titulos::class,"clube_id");
    }

}
