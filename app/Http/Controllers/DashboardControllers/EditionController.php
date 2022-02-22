<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;

use App\Edition;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardControllers\ImageController;
use Illuminate\Support\Facades\File;


class EditionController extends Controller
{

    protected $imageController;
    public function __construct(ImageController $imageController)
    {
        $this->imageController = $imageController;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editions = Edition::all();
        return view('/Dashboard/edition.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $edition = new Edition();
        return view('/Dashboard/edition.create', ['object' => $edition], compact('edition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->date = date('Y-m-d H:i:s');
        $edition = Edition::create($this->validateRequest(null));
        $this->imageController->storeEditionMainImage($edition);
        return redirect('/Dashboard/edition')->with('message', 'The Edition was registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function show(Edition $edition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function edit(Edition $edition)
    {
        //
        return view('/Dashboard/edition.edit', ['object' => $edition], compact('edition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edition $edition)
    {
    //
    $edition->update($this->validateRequest($edition->id));
    $this->imageController->storeeditionMainImage($edition);
    return redirect('/Dashboard/edition')->with('message', "The information was edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edition $edition)
    {
    //
    if (is_file(public_path('storage/' . $edition->image))) {
        File::delete([
            public_path('storage/' . $edition->image)
        ]);
    }
    $edition->delete();
    return redirect('/Dashboard/edition')->with('message', "The edition was deleted successfully");
    }
    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'date' => 'required',
            'link' => 'required',
            'image' => 'required|file|image|max:5000',
        ]);
    }
}
