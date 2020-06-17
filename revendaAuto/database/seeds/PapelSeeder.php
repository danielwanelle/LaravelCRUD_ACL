<?php

use Illuminate\Database\Seeder;
use App\Papel;

class PapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = Papel::firstOrCreate([
            'nome' => 'Admin',
            'descricao' => 'Acesso total ao sistema'
        ]);
        
        $p2 = Papel::firstOrCreate([
            'nome' => 'Gerente',
            'descricao' => 'Acesso gerencial ao sistema'
        ]);
        
        $p3 = Papel::firstOrCreate([
            'nome' => 'Usuario',
            'descricao' => 'Acesso de usuario ao sistema'
        ]);
        echo "Papeis iniciais criados com sucesso!".PHP_EOL;
    }
}
