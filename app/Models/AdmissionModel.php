<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function insertData($data){
        $value=DB::table('admission')->where('title', $data['title'])->get();
        if($value->count() == 0){
           DB::table('admission')->insert($data);
        }
        else{
            DB::table('admission')->truncate();
            DB::table('admission')->insert($data);
        }
     }

}
