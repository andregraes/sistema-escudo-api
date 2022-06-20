<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConteudoProgramaticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // id curso 1
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 1,
            "descricao" => "Abertura",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Unidade 1",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 1,
            "descricao" => "Abertura, Capa, Objetivos Gerais do Treinamento",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Gestão da Qualidade",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Metodologia de qualidade - 5S",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "O que é?",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "5S - Origem",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Os cinco “Sensos”",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Significado de cada senso (Menu raiz)",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Senso de Utilização (conteúdo do botão)",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Senso de Ordenação",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Senso de Limpeza",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Senso de Asseio",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Senso de Autodisciplina",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Antes da Implantação",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Fases de Implantação",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Implantação do Senso de Utilização"
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Critério de Descarte no Senso de Utilização",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Implantação do Senso de Ordenação",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Critério de Classificação no Senso de Ordenação",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Implantação do Senso de Limpeza",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Critério de Descarte no Senso de Limpeza",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Implantação do Senso de Asseio",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Critério de Eliminação no Senso de Asseio",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Implantação do Senso de Autodisciplina",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Critério de Controle no Senso de Autodisciplina",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Além do 5S: Os novos 4 sensos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Fechamento",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 1,
            "fk_idconteudo_programatico" => 2,
            "descricao" => "Simulação",
        ]);


        // id curso 2
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 3,
            "descricao" => "Abertura",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Unidade 1",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 3,
            "descricao" => "Abertura, Capa, Objetivos Gerais do Treinamento",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Objetivos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "O que são Riscos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Tarefa e Riscos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Gerenciamentod de Riscos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Procedimentos e Medidas",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Metodologias de Análise de Riscos: Conceitos e Exercícios",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Reconhecimento, Avaliação e Controle de Riscos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Riscos Ergonômicos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Riscos no manuseio de Máquinas e Equipamentos",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Riscos Relativos ao Ambiente",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Riscos Adicionais",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Causas Básicas de Acidentes",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Permissão para Trabalho",
        ]);
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 2,
            "fk_idconteudo_programatico" => 4,
            "descricao" => "Revisão",
        ]);

       
        //id curso    3
        DB::table('conteudo_programatico')->insert([
            "fk_idcurso" => 3,
            "fk_idconteudo_programatico" => 5,
            "descricao" => "Revisão",
        ]);
        //id curso    4
        //id curso    5
        //id curso    6
        //id curso    7
        //id curso    8
        //id curso    9
        //id curso    10
        //id curso    11
        //id curso    12
        //id curso    13
        //id curso    14
        //id curso    15
        //id curso    16
        //id curso    17
        //id curso    18
        //id curso    19
        //id curso    20
        //id curso    21
        //id curso    22
        //id curso    23
        //id curso    24
        //id curso    25
        //id curso    26
        //id curso    27
        //id curso    28
        //id curso    29
        //id curso    30
        //id curso    31
        //id curso    32
        //id curso    33
        //id curso    34
        //id curso    35
        //id curso    36
        //id curso    37
        //id curso    38
        //id curso    39
        //id curso    40
        //id curso    41
        //id curso    42
        //id curso    43
        //id curso    44
        //id curso    45
        //id curso    46
        //id curso    47
        //id curso    48
        //id curso    49
        //id curso    50
        //id curso    51
        //id curso    52
        //id curso    53
        //id curso    54
        //id curso    55
        //id curso    56
        //id curso    57
        //id curso    58
        //id curso    59
        //id curso    60
        //id curso    61
        //id curso    62
        //id curso    63
        //id curso    64
        //id curso    65
        //id curso    66
        //id curso    67
        //id curso    68
        //id curso    69
        //id curso    70
        //id curso    71
        //id curso    72
        //id curso    73
        //id curso    74
        //id curso    75
        //id curso    76
        //id curso    77
    }
}
