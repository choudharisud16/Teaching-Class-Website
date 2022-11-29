<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SubjectsModel;

class SubjectsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:subjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exports the excel sheet for subjects';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo("Inside subjects \n");
        $subjects = array();
        $i=0;
        if (($open = fopen(public_path('subjects.csv'), "r")) !== FALSE) {
            echo("file found \n");
            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                if($i == 0){
                    $i++;
                    continue; 
                }
                for($c=0;$c<count($data);$c++){
                    $subjects[$i][] = $data[$c];
                }
                $i++;
            }
            fclose($open);
        }
        else{
            echo("file not found");
        }

        foreach($subjects as $subject){
            $insertData = array(
               "subjecttitle"=>$subject[0],
               "value"=>$subject[1]);
               SubjectsModel::insertData($insertData);
            echo("record successfully inserted \n");
        }
        return Command::SUCCESS;
    }
}
