<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $file = $request->file('arquivo');
        $storage = Storage::disk('public')->put('images', $file);

        $pathinfo = pathinfo($storage);
        return redirect("storage/{$pathinfo['dirname']}/{$pathinfo['basename']}");
    }

    public function generate(Request $request)
    {
        $extension = 'jpg';
        
        $photo = Image::make($request->file('foto'))
            ->resize(300, 200)
            ->encode($extension);

        $name = bin2hex(random_bytes(8)).'.'.$extension;

        Storage::disk('public')->put("images/$name", $photo);

        return redirect("storage/images/$name");
    }

}
