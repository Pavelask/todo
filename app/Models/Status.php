<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todos;
class Status extends Model
{
    use HasFactory;
    protected $fillable = ['confirmed'];

//    public function Todos()
//    {
//        return $this->belongsTo(Todos::class);
//    }
}
