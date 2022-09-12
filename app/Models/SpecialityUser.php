<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialityUser extends Model
{
    use HasFactory;
    public $table = "speciality_user";

    protected $fillable = [
        'speciality_id`',
        'user_id',
    ];

}
