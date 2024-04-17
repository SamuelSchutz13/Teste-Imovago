<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        $findPerson = Person::all();
        return view('index', compact('findPerson'));
    }

    public function cadastrarPessoa() {
        return view('pages.create');
    }

    public function deletarPessoa(Request $request) {
        $person = Person::find($request->id);
        $person->delete();
        return redirect()->route('index');
    }
}
