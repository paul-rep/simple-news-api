<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ["title","content","image"];
//    protected $appends = ["image"];
    use HasFactory;

//    public function getImageAttribute(){
//        return $this->image;
//    }
}
