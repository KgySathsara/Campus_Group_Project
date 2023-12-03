<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'Full_Name',
        'Reg_Number',
        'Faculty',
        'Sport',
        'Current_Level',
        'Message',
    ];
}
