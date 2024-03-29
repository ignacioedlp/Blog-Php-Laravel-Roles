<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'contenido','user_id','image'];


    public function user(){
		return $this->belongsTo(User::class, 'user_id');
	}
}
