<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;

class IndexController
{

    public function __invoke(): \Illuminate\Database\Eloquent\Collection
    {

        return  Person::all();
    }

}
