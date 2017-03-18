<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\Address;
use YourSchool\Person;
use YourSchool\PhysicalPerson;
use YourSchool\Student;
use YourSchool\User;

class StudentController extends Controller
{

    private $title = 'Estudante';
    private $route = 'platform.students.';
    private $identify = 'student';
    private $path = 'students';
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
        $students = Student::all();

        dd($students);
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

        return view('layouts.defaults.model', compact('config'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();

        try {

            $data = $request->except('password');

            $user = new User;
            $data['password'] = $user->generatePassword();
            $user = $user->create($data);

            $address = new Address;

            $search = $address->whereZipCode($data['zip_code'])->whereNumber($data['zip_code'])->get()->first();

            if (empty($search)) {
                $address = $address->create($data);
            } else {
                $address = $search;
            }

            $person = new Person;
            $data['address_id'] = $address->id;
            $data['user_id'] = $user->id;
            $person = $person->create($data);

            $physical_person = new PhysicalPerson;
            $data['person_id'] = $person->id;
            $physical_person = $physical_person->create($data);

            $student = new Student;
            $data['studying'] = false;
            $data['physical_person_id'] = $physical_person->id;
            $student = $student->create($data);

            \DB::commit();

            return redirect()->back()->with("success", "Estudante {$student->name} cadastrado com sucesso!");

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::find($id);

        $config = $this->config;
        $config['route'] .= 'update';
        $config['action'] = 'edit';

        return view('layouts.defaults.model', compact('config', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        \DB::beginTransaction();

        try {
            $data = $request->except('password');
            $student = Student::find($id);

            $student->update($data);
            $student->physical_person->update($data);

            $address = Address::whereZipCode($data['zip_code'])->whereNumber($data['number'])->get()->first();

            if (empty($address)) {
                $address = Address::create($data);
            }

            $data['address_id'] = $address->id;
            $student->physical_person->person->update($data);

            $student->physical_person->person->user->update($data);

            return redirect()->back()->with('success', "Estudante {$student->name} editado com sucesso");

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
