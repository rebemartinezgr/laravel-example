<?php
/*
 * @author Rebeca Martinez Garcia
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   for($i = 1; $i <= 20; $i++){
		   DB::table('examples')->insert(array(
			   'name' => 'Name '.$i,
			   'description' => 'Example description '.$i,
			   'created_at' => date('Y-m-d H:i:s')
		   ));
	   }

	   $this->command->info('examples table has been filled');
    }
}
