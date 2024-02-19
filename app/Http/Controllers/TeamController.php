<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function chisiamo()
    {
        $team = [
            [
                'name' => 'Ismaele Nichele',
                'role' => 'Ceo',
                'description' => 'Il minchione dei minchioni',
                'img' => 'https://picsum.photos/200'
            ],
            [
                'name' => 'Gabriele Di Noia',
                'role' => 'Senior',
                'description' => 'lo straminchione per eccellenza',
                'img' => 'https://picsum.photos/200'

            ],
            [
                'name' => 'Andrea Rossi',
                'role' => 'Nulla facente',
                'description' => 'Colui che è',
                'img' => 'https://picsum.photos/200'
            ]
        ];
        return view('chisiamo', ['persone' => $team]);
    }

    public function chisiamoDet($name)
    {
        $team = [
            [
                'name' => 'Ismaele Nichele',
                'role' => 'Ceo',
                'description' => 'Il minchione dei minchioni',
                'img' => 'https://picsum.photos/200'
            ],
            [
                'name' => 'Gabriele Di Noia',
                'role' => 'Senior',
                'description' => 'lo straminchione per eccellenza',
                'img' => 'https://picsum.photos/200'

            ],
            [
                'name' => 'Andrea Rossi',
                'role' => 'Nulla facente',
                'description' => 'Colui che è',
                'img' => 'https://picsum.photos/200'
            ]
        ];

        foreach ($team as $persona) {
            if ($persona['name'] == $name) {
                return view('chisiamoDet', ['persona' => $persona]);
            }
        }
        abort(404);
    }
}
