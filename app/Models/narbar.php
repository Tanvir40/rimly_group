<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class narbar extends Model
{
    use HasFactory;

    public function subnavbar(){
        return $this->hasMany(subnavbar::class, "navbar_id");
    }

}
