<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable=['title','content','post_id'];
    //posts has many books
    public function post(){
        return $this->belongsTo(post::class);

    }
}
