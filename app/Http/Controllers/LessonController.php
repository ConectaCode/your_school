<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use YourSchool\Helpers\ExistTeam;
use YourSchool\Lesson;
use YourSchool\Matter;
use YourSchool\Teacher;
use YourSchool\Team;

class LessonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param $idTeam
     * @return \Illuminate\Http\Response
     */
    public function index($idTeam)
    {
        $team = new ExistTeam;
        $team = $team->findTeam($idTeam);

        if (empty($team)) {
            return redirect()->route('platform.dashboard.secretaryOfEducation.index')->with('error', 'Turma não encontrada');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $idTeam
     * @return \Illuminate\Http\Response
     */
    public function create($idTeam)
    {
        $team = new ExistTeam;
        $team = $team->findTeam($idTeam);

        if (empty($team)) {
            return redirect()->route('platform.dashboard.secretaryOfEducation.index')->with('error', 'Turma não encontrada');
        }

        $matters = Matter::pluck('name', 'id');
        $teachers = Teacher::get()->pluck('name', 'id');

        return view('resource.lessons.create', compact('team', 'matters', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idTeam)
    {
        $team = new ExistTeam;
        $team = $team->findTeam($idTeam);

        if (empty($team)) {
            return redirect()->back()->with('error', 'Turma não encontrada');
        }

        $lesson = new Lesson;
        $data = $request->except('team_id');
        $data['team_id'] = $team->id;
        $lesson = $lesson->create($data);

        return redirect()->back()->with('success', "Turma {$lesson->name} cadastrada com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idTeam, $id)
    {
        dd($idTeam, $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
