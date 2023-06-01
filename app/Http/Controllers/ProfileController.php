<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

use App\Models\Product;
use App\Http\Controllers\Auth;
use File;
use GuzzleHttp\Handler\Proxy;

class ProfileController extends Controller
{
    public function show($id)
    {
        $coba = $id;

        $profile = Profile::where('id', $id)->get();


        return View("profile.tampil", ["profile" => $profile]);
    }

    public function edit($id)
    {
        $coba = $id;
        // dd($coba);
        $profile = Profile::where('id', $id)->get();
        return View("profile.edit", ["profile" => $profile]);
    }

    public function update(Request $request, $id)
    {

        // $coba = $request->has("image");
        // dd($coba);

        $profile = Profile::where('id', $id)->get();

        foreach ($profile as $a) {
            $hasil = $a->id;
            $gambar = $a->profil_picture;
            // dd($gambar);
        }

        $request->validate(
            [
                "username" => "required",
                "namalengkap" => "required",
                "gender" => "required",
                "date" => "required",
                "image" => "mimes:jpg,png,jpeg|max:2048",
            ]
        );

        if ($request->has("image")) {
            $path = 'image/';
            File::delete($path . $gambar);
            $newImageName = time() . "." . $request->image->extension();
            $request->image->move(public_path("image"), $newImageName);
            // $profile->image = $newImageName;
        }

        // if ($request->has("image")) {
        //     $path = 'image/';
        //     File::delete($path . $gambar);
        //     $newImageName = time() . "." . $request->image->extension();
        //     $request->image->move(public_path("image"), $newImageName);
        //     $profile->image = $newImageName;
        // } else {
        //     $imageName = time() . "." . $request->image->extension();
        //     $request->image->move(public_path("image"), $imageName);
        // }

        // $imageName = time() . "." . $request->image->extension();
        // $request->image->move(public_path("image"), $imageName);

        //untuk mencari pk dari profil
        $profile = Profile::find($hasil);
        // dd($profile);
        $profile->username = $request->input("username");

        $profile->gender = $request->input("gender");
        $profile->date_of_birth = $request->input("date");
        $profile->profil_picture = $newImageName;

        $profile->save();

        $user = User::find($id);
        $user->name = $request->input("namalengkap");
        $user->save();

        return redirect("/");
    }
}
