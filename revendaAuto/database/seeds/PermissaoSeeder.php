<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' => 'usuario-view',
            'descricao' => 'Acesso a lista de usuarios'
        ]);

        $usuarios2 = Permissao::firstOrCreate([
            'nome' => 'usuario-create',
            'descricao' => 'Acesso a criação de usuarios'
        ]);

        $usuarios3 = Permissao::firstOrCreate([
            'nome' => 'usuario-edit',
            'descricao' => 'Acesso a edição de usuarios'
        ]);

        $usuarios4 = Permissao::firstOrCreate([
            'nome' => 'usuario-delete',
            'descricao' => 'Acesso a deleção de usuarios'
        ]);

        $papeis1 = Permissao::firstOrCreate([
            'nome' => 'papel-view',
            'descricao' => 'Listar papeis'
        ]);

        $papeis2 = Permissao::firstOrCreate([
            'nome' => 'papel-create',
            'descricao' => 'Criar papeis'
        ]);

        $papeis3 = Permissao::firstOrCreate([
            'nome' => 'papel-edit',
            'descricao' => 'Editar papeis'
        ]);

        $papeis4 = Permissao::firstOrCreate([
            'nome' => 'papel-delete',
            'descricao' => 'Deletar papeis'
        ]);
        
        $favoritos1 = Permissao::firstOrCreate([
            'nome' => 'favoritos-view',
            'descricao' => 'Acesso aos favoritos'
        ]);
        
        $perfil1 = Permissao::firstOrCreate([
            'nome' => 'perfil-view',
            'descricao' => 'Acesso ao perfil'
        ]);

        $chamados1 = Permissao::firstOrCreate([
            'nome' => 'Admin',
            'descricao' => 'Acesso total ao sistema'
        ]);
        
        $chamados2 = Permissao::firstOrCreate([
            'nome' => 'Gerente',
            'descricao' => 'Acesso gerencial ao sistema'
        ]);
        
        $chamados3 = Permissao::firstOrCreate([
            'nome' => 'Usuario',
            'descricao' => 'Acesso de usuario ao sistema'
        ]);
        
        $chamados4 = Permissao::firstOrCreate([
            'nome' => 'Gerente',
            'descricao' => 'Acesso gerencial ao sistema'
        ]);
        
        echo "Permissões iniciais criados com sucesso!".PHP_EOL;
    }
}
