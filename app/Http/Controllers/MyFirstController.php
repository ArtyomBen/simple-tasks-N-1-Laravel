<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyFirstController extends Controller
{
    public function show()
    {
        $country = DB::table('country')->distinct('Name')->get();
        return view('welcome', ['country' => $country]);
    }

    public function updateOrInsert()
    {
        $countryArm = DB::table('country')->where('Name', 'Armenia')->first();
        $countryYer = DB::table('country')->updateOrInsert(
            ['Name' => 'Yerevan'],
            ['Code' => 'YER', 'Continent' => $countryArm->Continent,
            'Region' => $countryArm->Region, 'SurfaceArea' => $countryArm->SurfaceArea,
            'IndepYear' => $countryArm->IndepYear, 'Population' => '1095000',
            'LifeExpectancy' => $countryArm->LifeExpectancy, 'GNP' => $countryArm->GNP,
            'GNPOld' => $countryArm->GNPOld, 'LocalName' => 'Yerevan', 'GovernmentForm' => $countryArm->GovernmentForm,
            'HeadOfState' => 'Nikol Pashinyan', 'Capital' => $countryArm->Capital, 'Code2' => $countryArm->Code2
            ]

        );
        return 'success';
    }
}
