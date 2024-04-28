<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestPerson;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        $findPerson = Person::all();
        return view('index', compact('findPerson'));
    }

    public function cadastrarPessoa(FormRequestPerson $request) {
        if($request->method() == 'POST') {
            $data = $request->all();
            Person::create($data);
            return redirect()->route('index');
        }

        return view('pages.create');
    }

    public function deletarPessoa(Request $request) {
        $id = $request->id;
        $search = Person::find($id)->delete();
        return response()->json(['success' => true]);
        return redirect()->route('index');
    }
}
