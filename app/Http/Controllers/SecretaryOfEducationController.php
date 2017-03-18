<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\Address;
use YourSchool\LegalEntity;
use YourSchool\Person;
use YourSchool\SecretaryOfEducation;
use YourSchool\User;

class SecretaryOfEducationController extends Controller
{

    private $title = 'Secretaria de Educação';
    private $route = 'platform.secretaryOfEducations.';
    private $identify = 'secretaryOfEducation';
    private $path = 'secretaryOfEducations';
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
        $secretary_of_education = SecretaryOfEducation::all();

        dd($secretary_of_education);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();

        try {
            $data = $request->all();

            $user = new User();
            $data['password'] = $user->generatePassword();
            $user = $user->create($data);

            $address = new Address;
            $search = $address->whereZipCode($data['zip_code'])->whereNumber($data['number'])->get()->first();

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
            $legal_entity = $legal_entity->create($data);

            $secretary_of_education = new SecretaryOfEducation;
            $data['legal_entity_id'] = $legal_entity->id;
            $secretary_of_education = $secretary_of_education->create($data);

            \DB::commit();

            $message = "Secretaria de Educação - {$secretary_of_education->name} cadastrada com sucesso!";

            return redirect()->back()->with('success', $message);
        } catch (ValidationException $exception) {

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
