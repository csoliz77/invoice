<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 8/26/14
 * Time: 3:55 PM
 */


class ClientController extends \BaseController {

    protected $client;
    public function __construct(Client $client){

        $this->client = $client;
    }

    public function index(){

        $clients = $this->client->all();

        return View::make('client.index', compact('clients'));
    }

    public function show($id)
    {

        $client = $this->client->find($id);

        return View::make('client.show', compact('client'));
    }

    public function create(){
        return View::make('client.create');

    }

    public function store(){

        $this->client->firstname = Input::get('firstname');
        $this->client->lastname = Input::get('lastname');
        $this->client->save();

        return Redirect::to('client');


    }

    public function edit($id){

        $client = $this->client->find($id);
        return View::make('client.edit', compact('client'));
    }


    public function update($id){


        $client = $this->client->find($id);
        $client->firstname = Input::get('firstname');
        $client->lastname = Input::get('lastname');
        $client->save();
        return Redirect::to('client');
    }


    public function destroy($id)
    {

        $this->client->destroy($id);
        Session::flash('message', 'Successfully Deleted');
        return Redirect::to('client');



    }

} 