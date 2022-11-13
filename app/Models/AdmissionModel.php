<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionModel extends Model
{
    use HasFactory;

    protected $table = 'admission';

    protected $fillable = [
        'firstname', 
        'lastname', 
        'contactnumber',
        'emailid',
        'comment',
        'meeting'
    ];

}
