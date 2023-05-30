<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("Ini adalah response");
    }

    public function responseHeader()
    {
        $bodyResponse =
        [
            'name' => 'Ardian',
            'school' => 'smk ti bazma'
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('Content-Type', 'Application/Json')
            ->withHeaders([
                'App' => 'Ardian Arya Putra',
                'Classes' => "XI",
                'web' => 'Laravel'
            ]);
    }

    public function encryptionData()
    {
        $encrypt = encrypt("Ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt, $decrypt);
    }

    public function redirectTo()
    {
        return "redirect to";
    }

    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }

    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }

    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.from"));
    }
}
