<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('persons.index', ['persons' => $persons]);
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required'
        ]);

        $newPerson = Person::create($data);

        return redirect(route('person.index'));
    }

    public function edit(Person $person)
    {
        return view('persons.edit', ['person' => $person]);
    }

    public function update(Person $person, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required'
        ]);

        $person->update($data);

        return redirect(route('person.index'))->with('success', 'Person Updated Succesffully');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect(route('person.index'))->with('success', 'Person deleted Successfully');
    }
}
