<?php

class SnippetsController extends \BaseController
{

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make("snippets/index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($snippet = '')
    {
        return View::make("snippets/create")->with("snippet", $snippet);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //validate
        $validationErrors = Snippet::validate(Input::all());

        if ($validationErrors) {
            return Redirect::route("newSnippet");
        }

        $newSnippet = Snippet::create(array(
                    "snippet" => Input::get('snippet')
        ));

        if ($newSnippet) {
            return Redirect::route('showSnippet', $newSnippet->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $snippet = Snippet::find($id);

        if (!$snippet) {
            return Redirect::to("/");
        }

        return View::make("snippets/show", $snippet->toArray());
    }

    public function fork($id)
    {
        $snippet = Snippet::find($id);

        if (!$snippet) {
            return Redirect::to("/");
        }

        return $this->create($snippet->snippet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        return View::make("snippets/edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
