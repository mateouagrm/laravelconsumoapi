<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::Create([
        		'id' => '6',
                'nombre' =>'cesar',
                'apellido' =>'salas',
                'email' =>'franklin@gmail.com',
                'password' => bcrypt('123456'),
                'telefono' =>'1042589',
                'perfil'  => '1459268788811.jpg',
                'tipo' => 'fotografo'
        ]);
    }
}
