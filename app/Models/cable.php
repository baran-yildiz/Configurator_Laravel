<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class cable extends Model
{
    use HasFactory;
    
    protected $table = 'cables';
    protected $fillable = [
        'linke',
        'isol',
        'lenl',
        'widthl',
        'farbel',
        'beschlink',
        'kabeltyp',
        'kabeldicke',
        'lenk',
        'farbek',
        'beschmid',
        'rechte',
        'isor',
        'lenr',
        'widthr',
        'farber',
        'beschright',
        'anzahl',
        'created_at',
        'updated_at',
    ];
}