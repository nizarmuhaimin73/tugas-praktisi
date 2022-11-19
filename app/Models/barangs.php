<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    use HasFactory;
   // protected $table = 'barangs';
    protected $guarded = ['id','created_at','update_at'];
    public $table = 'barangs';
}
