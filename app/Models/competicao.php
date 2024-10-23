<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class competicao extends Model
{
    protected $fillable = ["nome","pontuacao"];
    
    protected $table = "competicoes";

    public function titulos()
    {
        return $this->hasMany(titulos::class,"competicao_id");
    }


}
