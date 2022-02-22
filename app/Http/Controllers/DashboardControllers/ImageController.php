<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use App\Images;
use Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEditionMainImage($edition)
    {
        if (request()->has('image')) {
            $edition->update(['image' => request()->image->store('images', 'public')]);
            $image = Image::make(public_path('storage/' . $edition->image))->fit(2590, 1619);
            $image->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $image)
    {
        if (is_file(public_path($image->name))) {
            File::delete([
                public_path($image->name)
            ]);
        }

        $image->delete();

        return redirect()->back()->with('message', "The picture was deleted successfully");
    }

    public function deleteNullImages()
    {
        $images = Images::where('project_id', null)->get();
        foreach ($images as $image) {
            if (is_file(public_path($image->name))) {
                File::delete([
                    public_path($image->name)
                ]);
                $image->delete();
            }
        }
    }
}
