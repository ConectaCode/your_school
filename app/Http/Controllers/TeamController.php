<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\School;
use YourSchool\SchoolGrade;
use YourSchool\Student;
use YourSchool\Team;

class TeamController extends Controller
{

    private $title = 'Turma';
    private $route = 'platform.teams.';
    private $identify = 'team';
    private $path = 'teams';
    private $config = [];
    private $action;

    function __construct()
    {
        $this->config['title'] = $this->title;
        $this->config['route'] = $this->route;
        $this->config['identify'] = $this->identify;
        $this->config['path'] = $this->path;
        $this->config['action'] = $this->action;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(12);

        return view('resource.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config = $this->config;
        $config['route'] .= 'store';
        $config['action'] = 'create';

        $studentsFree = Student::whereStudying(false)->get()->pluck('name', 'id');
        $studentsTeam = [];
        $school_grades = SchoolGrade::pluck('name', 'id');

        $school_id = \Auth::user()->person->physical_person->school_secretaries->school_id;
        $school = School::whereId($school_id)->get()->first();

        return view('layouts.defaults.model', compact('config', 'studentsFree', 'studentsTeam', 'school_grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();

        try {

            $data = $request->except(['finished', 'school_id']);

            $team = new Team;
            $data['finished'] = false;
            $data['school_id'] = \Auth::user()->person->physical_person->school_secretaries->school_id;
            $team = $team->create($data);

            $studentsTeam = $data['studentsTeam'];

            $messages = collect();

            $studentsFreeDB = Student::whereStudying(false)->get();

            for ($i = 0; $i < count($studentsTeam); $i++) {

                $student = $studentsTeam[$i];

                if ($studentsFreeDB->contains('id', $student)) {
                    $student = Student::find($student);
                    $student->update(['studying' => true]);
                    $team->students()->attach($student);
                } else {
                    $student = Student::find($student);
                    $messages->push("{$student->name} já está vinculado a uma turma!");
                }
            }

            $studentsFree = !empty($data['studentsFree']) ? $data['studentsFree'] : false;

            if ($studentsFree != false) {
                for ($i = 0; $i < count($studentsFree); $i++) {
                    $student = $studentsFree[$i];
                    Student::find($student)->update(['studying' => false]);
                }
            }

            $messages = $messages->toArray();

            $success = "Turma {$team->name} cadastrada com sucesso! {$team->students->count()} alunos vinculados.";

            \DB::commit();

            return redirect()->back()->with(['messages' => $messages, 'team' => $team, 'success' => $success]);
        } catch (ValidationException $exception) {

            \DB::rollBack();

            $error = "Ops. Não foi possivel cadastrar. Cód. {$exception->getCode()} : {$exception->getMessage()}";

            return redirect()->back()->with('error', $error);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $config = $this->config;
        $config['route'] .= 'update';
        $config['action'] = 'edit';

        $data = Team::find($id);
        $school_grades = SchoolGrade::pluck('name', 'id');

        $studentsFree = Student::whereStudying(false)->get()->pluck('name', 'id');
        $studentsTeam = $data->students->pluck('name', 'id');

        return view('layouts.defaults.model', compact('data', 'school_grades', 'studentsFree', 'studentsTeam', 'config'));
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
        \DB::beginTransaction();

        try {
            $data = $request->except(['school_id', 'finished']);
            $team = Team::find($id);

            $studentsTeam = !empty($data['studentsTeam']) ? $data['studentsTeam'] : [];
            $studentsFree = !empty($data['studentsFree']) ? $data['studentsFree'] : [];

            if(!empty($studentsTeam)) {
                for ($i = 0; $i < count($studentsTeam); $i++) {
                    Student::find($studentsTeam[$i])->update(['studying' => true]);
                }
            }

            if(!empty($studentsFree)) {
                for ($i = 0; $i < count($studentsFree); $i++) {
                    Student::find($studentsFree[$i])->update(['studying' => false]);
                }
            }

            $team->students()->sync($studentsTeam);
            $team->update($data);
            \DB::commit();
            return redirect()->back();
        } catch (ValidationException $exception) {
            \DB::rollBack();
            return redirect()->back()->with('error', '');
        }
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