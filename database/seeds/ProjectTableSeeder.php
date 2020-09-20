<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectOne = new Project();
        $projectOne->title = 'Go Home';
        $projectOne->slug = 'go-home';
        $projectOne->description = 'dfyuhjkmnbvcfghjkmnbvfghyuik,mnbvghjk';
        $projectOne->save();

        $projectTwo = new Project();
        $projectTwo->title = 'Go South';
        $projectTwo->slug = 'go-south';
        $projectTwo->description = 'dfyuhjkmnbvcfgjhkljhhkljhghkghjkmnbvfghyuik,mnbvghjk';
        $projectTwo->save();

        $projectThree = new Project();
        $projectThree->title = 'Go Shop';
        $projectThree->slug = 'go-shop';
        $projectThree->description = 'dfyuhjkmnbvcfg mnkjljhjhjkmnbvfghyuik,mnbvghjk';
        $projectThree->save();

        $projectFour = new Project();
        $projectFour->title = 'Go School';
        $projectFour->slug = 'go-school';
        $projectFour->description = 'dbjk,.mnm,mjkkjfyuhjkmnbvcfghjkmnbvfghyuik,mnbvghjk';
        $projectFour->save();
    }
}
