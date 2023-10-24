<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConvertImageController extends Controller
{
    public function index()
    {
        return view('convert.index');
    }

    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'image_quality' => ['required', 'numeric', 'min:0', 'max:100'],
            'images.*' => ['required', 'image'],
        ]);

        try {
            $convertedImages = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $originalName = $image->getClientOriginalName();
                    $imageName = "converted_images/" . Str::uuid() . '.webp';
                    $convertionQuality = $request->input('image_quality');
                    Image::make($image)->save($imageName, $convertionQuality);
                    $convertedImages[] = [
                        'name' => $originalName,
                        'path' => $imageName,
                    ];
                }
                return back()->withSuccess('Images converted successfully!')->with('convertedImages', $convertedImages);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while converting images!'])->withInput();
        }
    }
}
