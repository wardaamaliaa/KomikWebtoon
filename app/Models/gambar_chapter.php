<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar_chapter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function chapter(){
        return $this->hasMany(gambar_chapter::class);
    }
}
