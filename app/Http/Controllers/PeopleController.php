<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    public function index()
    {
        return view('people.index', [
            'people' => People::filter(request(['name']))->get()
        ]);
    }

    public function create_view()
    {
        return view('people.create');
    }

    public function create()
    {
        $data = request()->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);

        People::create($data);

        return redirect()->route('people.index');
    }

    public function person_view($uuid)
    {
        return view('people.person', [
            'person' => People::where('uuid', $uuid)->firstOrFail()
        ]);
    }

    public function edit_view($uuid)
    {
        return view('people.edit', [
            'person' => People::where('uuid', $uuid)->firstOrFail()
        ]);
    }

    public function edit($uuid)
    {
        $data = People::where('uuid', $uuid)->firstOrFail();

        $data->name = request('name');
        $data->last_name = request('last_name');
        
        $data->save();

        return redirect()->route('people.index');
    }

    public function delete($uuid)
    {
        $data = People::where('uuid', $uuid)->firstOrFail();
        $data->delete();

        return redirect()->route('people.index');
    }

    public function search()
    {
        $search = request('search');
        $people = People::where('name', 'like', '%'.$search.'%')->orWhere('last_name', 'like', '%'.$search.'%')->get();
        return view('people.search', [
            'people' => $people
        ]);
    }
}
