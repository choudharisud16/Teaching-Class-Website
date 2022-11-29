<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubjectsModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'subjecttitle', 
        'value'
    ];

    public static function insertData($data){
        $value=DB::table('subjects')->where('subjecttitle', $data['subjecttitle'])->get();
        if($value->count() == 0){
           DB::table('subjects')->insert($data);
        }
        else{
            DB::table('subjects')->truncate();
            DB::table('subjects')->insert($data);
        }
     }
}
