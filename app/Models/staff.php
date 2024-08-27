<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    public $table ='staff';
      protected $fillable = [
        'sname', 'Email', 'Phone', 'Position'
    ];
}
