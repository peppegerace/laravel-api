<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Project;

class Type extends Model
{

    public function projects(){
        return $this->hasMany(Project::class);
    }

    protected $fillable = [
        "name", "slug"
    ];
}
