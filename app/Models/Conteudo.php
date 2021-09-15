<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;

    protected $table = 'conteudos';


    public function post()
    {
        return $this->belongsToMany(Post::class, 'post_id', 'id');
    }
}
