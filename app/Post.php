<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts'; // Muda o nome padrão da tabela
    //Pad~rao nome add 's' no final
    // Primary Key
    public $primaryKey = 'id';
    //Times Stamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
