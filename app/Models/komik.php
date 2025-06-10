<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
   
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function komik(){
        return $this->belongsTo(chapter::class);
    }
}
