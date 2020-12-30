<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $faker = \Faker\Factory::create();
            $data = [
                'username' => $faker->username,
                'password' => $faker->password,
                'salt' => $faker->password,
                'avatar' => NULL,
                'role' => 1,
                'created_by' => 0,
                'created_date' => date("Y-m-d H:i:s"),
            ];
            // Using Query Builder
            $this->db->table('user')->insert($data);
        }


        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //     $data
        // );


    }
}
