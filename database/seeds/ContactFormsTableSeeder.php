<?php

use Illuminate\Database\Seeder;

class ContactFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        echo 'seeding!';
        factory(App\ContactForm::class,5)->create();
    }
}
