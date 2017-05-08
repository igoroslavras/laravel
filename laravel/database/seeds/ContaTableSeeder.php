<?php

use Illuminate\Database\Seeder;
use App\Conta;

class ContaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('contas')->truncate();
        
        //seeding manualmente
        Conta::create([
            'tipoConta' => 'pagar',
            'descricao' => 'descricao conta',
            'valor' => '12.00',
            'vencimento' => '2007-05-17'
        ]);
        
        Conta::create([
            'tipoConta' => 'receber',
            'descricao' => 'descricao conta1',
            'valor' => '14.00',
            'vencimento' => '2007-05-27'
        ]);
        
        Conta::create([
            'tipoConta' => 'receber',
            'descricao' => 'descricao conta2',
            'valor' => '51.00',
            'vencimento' => '2007-05-22'
        ]);
        
        Conta::create([
            'tipoConta' => 'pagar',
            'descricao' => 'descricao conta3',
            'valor' => '60.00',
            'vencimento' => '2007-05-02'
        ]);
        
        Conta::create([
            'tipoConta' => 'pagar',
            'descricao' => 'descricao conta4',
            'valor' => '123.00',
            'vencimento' => '2007-05-04'
        ]);
        
    }  
}