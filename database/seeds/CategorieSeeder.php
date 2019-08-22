<?php

use Illuminate\Database\Seeder;
use App\Categorie;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 20; $i++) {
        	$categorie = new Categorie();
        	$categorie->title = "categorie Title".$i;
        	$categorie->descreption = "categorie Descreption ".$i;
        	$categorie->save();
        }
    }
}
