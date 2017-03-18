<?php

namespace YourSchool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use YourSchool\Address;
use YourSchool\Person;
use YourSchool\PhysicalPerson;
use YourSchool\Responsible;
use YourSchool\User;

class ResponsibleController extends Controller
{
    private $title = 'Responsável';
    private $route = 'platform.responsibles.';
    private $identify = 'responsible';
    private $path = 'responsibles';
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
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();

        try{
            $data = $request->all();

            $user = new User;
            $data['password'] = $user->generatePassword();
            $user = $user->create($data);

            $address = new Address;
            $search = $address->whereZipCode($data['zip_code'])->whereNumber($data['number'])->get()->first();

            if (empty($search)){
                $address = $address->create($data);
            }else{
                $address = $search;
            }

            $person = new Person;
            $data['user_id'] = $user->id;
            $data['address_id'] = $address->id;
            $person = $person->create($data);

            $physical_person = new PhysicalPerson;
            $data['person_id'] = $person->id;
            $physical_person = $physical_person->create($data);

            $responsible = new Responsible;
            $data['physical_person_id'] = $physical_person->id;
            $responsible = $responsible->create($data);

            \DB::commit();

            return redirect()->back()->with('success', "Responsável {$responsible->name} cadastrado com sucesso!");
        }catch (ValidationException $exception){
            \DB::rollBack();

            return redirect()->back()->with('error', "Ops. Não foi possivel cadastrar. Cód. {$exception->getCode()} : {$exception->getMessage()}");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return str_random(10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
