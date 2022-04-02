<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke(): array
    {
        return [
            [
                'id'=>1,
                'name'=>'Sergey',
                'job'=>'salesman',
                'age'=>26
            ],
            [
                'id'=>2,
                'name'=>'Aset',
                'job'=>'Builder',
                'age'=>28
            ]
        ];
    }
}
