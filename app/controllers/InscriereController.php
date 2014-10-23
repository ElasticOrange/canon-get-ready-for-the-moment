<?php

class InscriereController extends \BaseController {

    /**
     * Constructor to set default values and load data all functions
     * in this controller should use
     *
     * return @void
     */
    public function __construct()
    {
        $this->return_data = [];
    }

    /**
     * Display a listing of the resource.
     * GET /intrebare
     *
     * @return Response
     */
    public function index()
    {
        return View::make('inscriere/index', $this->return_data);
    }

    /**
     * Show the form for creating a new resource.
     * GET /intrebare/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /intrebare
     *
     * @return Response
     */
    public function store()
    {
        if (Inscriere::where('email', Input::get('email'))->count())
        {
            return Response::json([
                'status' => 'Already in the campaign'
            ]);
        }

        $inscriere = new Inscriere;
        $inscriere->obiectiv = Input::get('obiectiv');
        $inscriere->email = Input::get('email');
        $inscriere->save();

        return Response::json([
            'status' => 'Saved'
        ]);
    }

    /**
     * Display the specified resource.
     * GET /intrebare/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /intrebare/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /intrebare/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /intrebare/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
