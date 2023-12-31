<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;
    protected $fillable = ['name','discription','prise','size','propertie','royality','image_path'];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

}
