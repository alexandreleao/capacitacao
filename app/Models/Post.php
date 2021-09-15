<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';


    public function conteudos()
    {
        return $this->belongsToMany(Conteudo::class, 'post_id', 'id');
    }
}
