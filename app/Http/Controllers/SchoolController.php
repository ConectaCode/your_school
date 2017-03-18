<?php

namespace YourSchool\Http\Controllers;

use Doctrine\DBAL\Exception\DatabaseObjectNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\Address;
use YourSchool\LegalEntity;
use YourSchool\Person;
use YourSchool\School;
use YourSchool\User;

class SchoolController extends Controller
{

    private $title = 'Escola';
    private $route = 'platform.schools.';
    private $identify = 'school';
    private $path = 'schools';
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
        $secretary_of_education = \Auth::user()->person->legal_entity->secretary_of_education->id;

        $schools = School::whereSecretaryOfEducationId($secretary_of_education)->get();

        dd($schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config = $this->config;
        $config['action'] = 'create';
        $config['route'] .= 'store';

        return view('layouts.defaults.model', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();

        try {
            $user = new User;
            $data = $request->except(['password']);
            $data['password'] = $user->generatePassword();
            $user = $user->create($data);

            $address = new Address;

            $search = $address->whereZipCode($request['zip_code'])->whereNumber($request['number'])->get()->first();

            if (empty($search)) {
                $address = $address->create($data);
            } else {
                $address = $search;
            }

            $person = new Person;

            $data['address_id'] = $address->id;
            $data['user_id'] = $user->id;

            $person = $person->create($data);

            $legal_entity = new LegalEntity;
            $data['person_id'] = $person->id;
            $data['secretary_of_education_id'] = \Auth::user()->person->legal_entity->secretary_of_education->id;
            $legal_entity = $legal_entity->create($data);

            $school = new School;
            $data['legal_entity_id'] = $legal_entity->id;
            $school = $school->create($data);

            \DB::commit();

            return redirect()->back()->with('success', "Escola {$school->name} cadastrada com sucesso!");
        } catch (ValidationException $exception) {

            \DB::rollBack();

            return redirect()->back()->with('error', "Ops. Não foi possível cadastrar. Cód. {$exception->getCode()} : {$exception->getMessage()}");

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
        $data = School::find($id);
        if (!empty($data)) {
            $config = $this->config;
            $config['action'] = 'edit';
            $config['route'] .= 'update';


            return view('layouts.defaults.model', compact('data', 'config'));
        } else {
            return redirect()->route($this->config['route'] . 'index')->with('error', 'Não foram encontrados registros');
        }
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
            $school = School::find($id);

            $data = $request->except(['secretary_of_education_id', 'password']);

            $school->update($data);

            $school->legal_entity->update($data);

            $address = Address::whereZipCode($request['zip_code'])->whereNumber($request['number'])->get()->first();

            if (empty($address)) {
                $address = $school->legal_entity->person->address->create($data);
            }

            $school->legal_entity->person->user->update($data);

            $data['address_id'] = $address->id;
            $school->legal_entity->person->update($data);

            \DB::commit();

            return redirect()->back()->with('success', "Escola {$school->name} editada com sucesso!");
        } catch (DatabaseObjectNotFoundException $exception) {

            \DB::rollBack();

            return redirect()->back()->with('success', "Ops. Não foi possível editar. Cód. {$exception->getCode()} : {$exception->getMessage()}");
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
