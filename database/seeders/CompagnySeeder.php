<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB ::table('compagnies')->insert(
            [
                [
                   "Compagny" => "Un",
                   "Adresse" => "1, rue du un 1 Unois",
                   "phone" => "101 11 110 11",
                   "email" => "1@gmail.com",
                   "name" => "uno",
                   "surname" => "uuun",
                   "src" => "https://images.unsplash.com/photo-1435820394963-a15297f976fd?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=336&q=80"
                ],
                [
                    "Compagny" => "Deux",
                    "Adresse" => "2, rue du deux 2 Deunnois",
                    "phone" => "102 11 110 11",
                    "email" => "2@gmail.com",
                    "name" => "Duo",
                    "surname" => "twee",
                    "src" => "https://images.unsplash.com/photo-1435820394963-a15297f976fd?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=336&q=80"
                 ],
                 [
                    "Compagny" => "Trois",
                    "Adresse" => "3, rue du trois 3 Troiens",
                    "phone" => "333 11 110 11",
                    "email" => "3@gmail.com",
                    "name" => "Tercio",
                    "surname" => "Drie",
                    "src" => "https://images.unsplash.com/photo-1524946274118-e7680e33ccc5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80"
                 ],
                 [
                    "Compagny" => "Quatre",
                    "Adresse" => "1, rue du un 1 Unois",
                    "phone" => "101 11 110 11",
                    "email" => "1@gmail.com",
                    "name" => "uno",
                    "surname" => "uuun",
                    "src" => "https://images.unsplash.com/photo-1484638674449-f648c50528c1?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=746&q=80"
                 ],
                 [
                    "Compagny" => "Cinq",
                    "Adresse" => "1, rue du un 1 Unois",
                    "phone" => "101 11 110 11",
                    "email" => "1@gmail.com",
                    "name" => "uno",
                    "surname" => "uuun",
                    "src" => "https://images.unsplash.com/photo-1507298130624-48d82262b97f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80"
                 ],
                 [
                    "Compagny" => "Six",
                    "Adresse" => "1, rue du un 1 Unois",
                    "phone" => "101 11 110 11",
                    "email" => "1@gmail.com",
                    "name" => "uno",
                    "surname" => "uuun",
                    "src" => "https://images.unsplash.com/photo-1520966659165-da86627af205?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=668&q=80"
                 ],
            ]
            );
    }
}
