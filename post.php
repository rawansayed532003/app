<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title','content'];
  
    //posts has many books
    public function books(){
        return $this->hasMany(book::class);

    }

}
