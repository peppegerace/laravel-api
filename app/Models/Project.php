<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    // public static function generateSlug($name){
    //     $slug = Str::slug($name, "-");
    //     $original_slug = $slug;
    //     $exists = Project::where("slug", $slug)->first();
    //     $c = 1;
    //     while($exists){
    //         $slug = $original_slug . "-" . $c;
    //         $exists = Project::where("slug", $slug)->first();

    //         $c++;
    //     }
    //     return $slug;
    // }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function tecnologies(){
        return $this->belongsToMany(Tecnology::class);
    }

    protected $fillable = [
        'name',
        'type_id',
        'slug',
        'description',
        'project_duration',
        'image',
        'image_original_name'
    ];
}
