<?php

class GameController extends \BaseController {

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
     * GET /game
     *
     * @return Response
     */
    public function index()
    {
        //
        return View::make('game/index', $this->return_data);
    }

    /**
     * Show the form for creating a new resource.
     * GET /game/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /game
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /game/{id}
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
     * GET /game/{id}/edit
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
     * PUT /game/{id}
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
     * DELETE /game/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
