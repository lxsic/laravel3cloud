<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'id',
        'name',
        'content',
    ];
    public function getCreatedAtAttribute($value){
        return date('Y-m-D H',strtotime($value));
    }
}
