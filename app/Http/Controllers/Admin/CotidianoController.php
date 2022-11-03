<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotidianoController extends Controller
{
    public function index() {
        $horario = [
            'manha' => ['6:00', '6:20', '7:00', '7:00 ou 7:15', '9:40'],
            'tarde' => ['12:00', '12:50', '13:00', '14:00', '16:40', '18:00'],
            'noite' => ['19:00', '22:00', '23:00'],
        ];
        $mensagens = [
            'name'      => 'Ronicley',
            'trabalho'  => 'Horário que chegou possívelmente no estágio',
            'horarios'  => 'Horários de segunda-feira à sexta-feira'
        ];

        $dados = [
            'mensagens' => $mensagens,
            'horario'   => $horario
        ];
    	return view ('Cotidiano.rotina-manha', ['dados' => $dados]); 
    }
    public function periodoDaTarde() {
        $dados = [
            'mensagens' => [
                'name'      => 'Ronicley',
                'trabalho'  => 'Saiu do estágio',
                'horarios'  => 'Horários de segunda-feira à sexta-feira',
                'Rotina'    => 'Rotina da tarde',
                'Casa'      => 'Chegou em casa às',
                'Almoco'    => 'Almoco em casa por volta das',
            ],
            'horario'   => [
                'manha' => ['6:00', '6:20', '7:00', '7:00 ou 7:15', '9:40'],
                'tarde' => ['12:00', '13:00', '14:00', '16:40', '18:00'],
                'noite' => ['19:00', '22:00', '23:00','23:40'],
            ],
            'dias' => [
                'terca'     => 'Terça-feira',
                'quinta'    => 'Quinta-feira',
            ],
            'faculdade' => [
                'chego-na-faculdade'  => '18H40',
                'saio-da-faculdade'    => '22H00',
            ],
        ];
        return view ('Cotidiano.rotina-tarde', ['dados' => $dados]);
    }
}
