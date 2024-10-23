<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class titulos extends Model
{
    protected $fillable = ["clube_id","competicao_id","data"];

    public function clube()
    {
        return $this->BelongsTo(clubes::class,"clube_id");
    }

    public function competicao()
    {
        return $this->BelongsTo(competicao::class,"competicao_id");
    }
}
