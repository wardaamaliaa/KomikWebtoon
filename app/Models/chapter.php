<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    public function komik(){
        return $this->belongsTo(komik::class);
    }
    public function gambar_chapter(){
        return $this->belongsTo(gambar_chapter::class);
    }
}
