<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use YourSchool\School;
use YourSchool\SecretaryOfEducation;

class DashboardSecretaryOfEducationController extends Controller
{

    public function index()
    {
        $secretaryOfEducationId = \Auth::user()->person->legal_entity->secretary_of_education->id;
        $secretaryOfEducation = SecretaryOfEducation::find($secretaryOfEducationId);

        $schools = School::whereSecretaryOfEducationId($secretaryOfEducationId)->get();

        foreach ($schools as $school){
            $teams[] = $school->teams;
        }

        dd($teams);

        $chart = \Charts::database(SecretaryOfEducation::all(), 'bar', 'google')
            ->elementLabel('Escola')
        ;

        return view('resource.dashboards.secreatry_of_Education', compact('chart'));

    }
}
