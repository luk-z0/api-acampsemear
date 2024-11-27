<?php

namespace App\Http\Controllers;

use App\Models\SupportContact;
use App\Models\SupportMotivation;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function contact(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:20',
            'phone' => 'required|max:20',
            'email' => 'required|email',
            'support_motivations_id' => 'required',
            'description' => 'required|max:1800'
        ];

        $alerts = [
            'name.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome precisa ter no máximo 20 caracteres',
            'email' => 'o email informado está inválido',
            'description.max' => 'O campo permite o máximo de 1800 caracteres',
            'required' => 'O campo :attribute precisa ser preenchido',
        ];

        $request->validate($rules, $alerts);

        SupportContact::create($request->all());
        return redirect()->route('sucess');
    }

    public function callForm()
    {
        $motivations = SupportMotivation::all();
        return view('support', compact('motivations'));
    }
}
