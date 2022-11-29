<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ClassesModel;

class ClassesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:classes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exports the excel sheet for classes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo("Inside classes \n");
        $classes = array();
        $i=0;
        if (($open = fopen(public_path('classes.csv'), "r")) !== FALSE) {
            echo("file found \n");
            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                if($i == 0){
                    $i++;
                    continue; 
                }
                for($c=0;$c<count($data);$c++){
                    $classes[$i][] = $data[$c];
                }
                $i++;
            }
            fclose($open);
        }
        else{
            echo("file not found");
        }

        foreach($classes as $class){
            $insertData = array(
               "title"=>$class[0],
               "capacity"=>$class[1],
               "fromtime"=>$class[2],
               "totime"=>$class[3]);
               ClassesModel::insertData($insertData);
            echo("record successfully inserted \n");
        }
        return Command::SUCCESS;
    }
}
