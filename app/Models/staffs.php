<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    use HasFactory;
    public $table ='staff';
      protected $fillable = [
        'sname', 'Email', 'Phone', 'Position'
    ];
}
