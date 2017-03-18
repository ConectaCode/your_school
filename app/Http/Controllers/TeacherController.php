<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\Address;
use YourSchool\City;
use YourSchool\DDD;
use YourSchool\Matter;
use YourSchool\Person;
use YourSchool\Phone;
use YourSchool\PhysicalPerson;
use YourSchool\Teacher;
use YourSchool\User;

class TeacherController extends Controller
{

    private $title = 'Professor';
    private $route = 'platform.teachers.';
    private $identify = 'teacher';
    private $path = 'teachers';
    private $config = [];
    private $action;

    function __construct()
    {
        $this->config['title'] = $this->title;
        $this->config['route'] = $this->route;
        $this->config['identify'] = $this->identify;
        $this->config['path'] = $this->path;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teachers = Teacher::all();

        dd($teachers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matters = Matter::pluck('name', 'id');
        $config = $this->config;
        $config['route'] .= 'store';
        $config['action'] = 'create';

        return view('layouts.defaults.model', compact('matters', 'config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|TeacherCreatedRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \DB::beginTransaction();

        try {

            $user = new User;
            $data = $request->all();

            $data['password'] = $user->generatePassword();
            $user = $user->create($data);


            $address = new Address;
            $search = $address->where([['zip_code', '=', $data['zip_code']], ['number', '=', $data['number']]])->get()->first();

            if (empty($search)):
                $address = $address->create($data);
            else:
                $address = $search;
            endif;

            $person = new Person;
            $data['user_id'] = $user->id;
            $data['address_id'] = $address->id;
            $person = $person->create($data);


            $physical_person = new PhysicalPerson;
            $data['person_id'] = $person->id;
            $physical_person = $physical_person->create($data);


            $teacher = new  Teacher;
            $data['physical_person_id'] = $physical_person->id;
            $teacher = $teacher->create($data);

            \DB::commit();

            return redirect()->back()->with("success", "Professor {$teacher->name} cadastrado com sucesso!");
        } catch (ValidationException $exception) {
            \DB::rollBack();

            return redirect()->back()->with('error', "Ops. Não foi possivel cadastrar. Cód. {$exception->getCode()} : {$exception->getMessage()}");
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
        $data = Teacher::find($id);
        $matters = Matter::pluck('name', 'id');
        $config = $this->config;
        $config['route'] .= 'update';
        $config['action'] = 'edit';

        return view('layouts.defaults.model', compact('data', 'matters', 'config'));
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
            $request = $request->except('password');

            $teacher = Teacher::find($id);

            $teacher->update($request);

            $teacher->physical_person->update($request);

            $teacher->physical_person->person->user->update($request);

            $address = Address::whereZipCode($request['zip_code'])->whereNumber($request['number'])->get()->first();

            if (empty($address)) {
                $address = $teacher->physical_person->person->address->create($request);
            }

            $request['address_id'] = $address->id;
            $teacher->physical_person->person->update($request);

            \DB::commit();

            return redirect()->back()->with("success", "Professor {$teacher->name} editado com sucesso!");

        } catch (ValidationException $exception) {

            \DB::rollBack();

            return redirect()->back()->with('error', "Ops. Não foi possivel editar. Cód. {$exception->getCode()} : {$exception->getMessage()}");
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
