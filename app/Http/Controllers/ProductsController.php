<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function prodotti()
    {
        $products = [
            [
                'name' => 'Scheda Grafica',
                'description' => 'Geforce RTX 4090',
                'price' => '540',
                'img' => '/media/RTX-4090.jpg'
            ],
            [
                'name' => 'Scheda Madre',
                'description' => 'ROG strix B-550F gaming wi-fi',
                'price' => '300',
                'img' => '/media/SchedaMadre.webp'
            ],
            [
                'name' => 'CPU',
                'description' => 'AMD Rayzen 9 5900X',
                'price' => '690',
                'img' => '/media/AMD.jpg'
            ]
        ];
        return view('prodotti', ['products' => $products]);
    }

    public function prodottiDet($nome)
    {
        $products = [
            [
                'name' => 'Scheda Grafica',
                'name2' => 'Geforce RTX 4090',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat?',
                'price' => '540',
                'img' => '/media/RTX-4090.jpg'
            ],
            [
                'name' => 'Scheda Madre',
                'name2' => 'ROG strix B-550F gaming wi-fi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat?',
                'price' => '300',
                'img' => '/media/SchedaMadre.webp'
            ],
            [
                'name' => 'CPU',
                'name2' => 'AMD Rayzen 9 5900X',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quaerat?',
                'price' => '690',
                'img' => '/media/AMD.jpg'
            ]
        ];
        foreach ($products as $product) {
            if ($product['name'] == $nome) {
                return view('prodottiDet', ['product' => $product]);
            }
        }
        abort(404);
    }
}
