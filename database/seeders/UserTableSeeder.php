<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            DB:: table(table:'users')->insert([

              //Admin

                [
            'full_name'=> 'Efrat A.',
            'username'=> 'Admin',
            'email'=> 'admin@shopnet.com',
            'password'=>Hash::make(value:'Admin123'),
            'role'=> 'Admin',
            'status'=> 'Active',

                ],


              //Vendor  


              [
                'full_name'=> 'Efrat V.',
                'username'=> 'Vendor',
                'email'=> 'vendor@shopnet.com',
                'password'=>Hash::make(value:'Vendor123'),
                'role'=> 'Vendor',
                'status'=> 'Active',
    
                    ],


               //Customer


               [
                'full_name'=> 'Efrat C.',
                'username'=> 'Customer',
                'email'=> 'customer@shopnet.com',
                'password'=>Hash::make(value:'Customer123'),
                'role'=> 'Customer',
                'status'=> 'Active',
    
                    ],

            

            ]);
    }
}
