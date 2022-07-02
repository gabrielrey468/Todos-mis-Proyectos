<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            DB::table('frutas')->insert(array(
                'nombre' => 'Cereza' . $i,
                'descripcion' => 'Descripcion de la fruta' . $i,
                'precio' => $i,
                'fecha' => date('d-m-y')
            ));
        }
        $this->command->info('La tabla ha sido rellenada');
    }
}
