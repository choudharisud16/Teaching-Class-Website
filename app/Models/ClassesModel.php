<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ClassesModel extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'title',
        'capacity',
        'fromtime',
        'totime'
    ];

    public static function insertData($data){
        $value=DB::table('classes')->where('title', $data['title'])->get();
        if($value->count() == 0){
           DB::table('classes')->insert($data);
        }
        else{
            DB::table('classes')->truncate();
            DB::table('classes')->insert($data);
        }
     }

}
