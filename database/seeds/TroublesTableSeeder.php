<?php
use App\Models\Trouble;
use Illuminate\Database\Seeder;

class TroublesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Trouble::class, 5)->create();
    }
}
