<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Town;
use Illuminate\Http\Request;
use App\Sto;
use Illuminate\Support\Facades\Input;

class StoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sto = Sto::all();
        $city = Town::all();
        return view('pages.index', ['sto' => $sto,'city'=>$city]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//            'image' => 'required',
//            'town' => 'required',
//            'contact' => 'required',
//            'description' => 'required',
//            'data' => 'required',
//            'hour' => 'required',
//        ]);
//
//        $file = $request->file('image');
//        $destinationPath = 'upload';
//        $file->move($destinationPath, $file->getClientOriginalName());
//
//        $sto = new Sto();
//        $sto->name = $request->name;
//        $sto->image = $file->getClientOriginalName();
//        $sto->address = $request->address;
//        $sto->description = $request->description;
//        $sto->data = $request->data;
//        $sto->hour = $request->hour;
//
//        $city = new Town();
//        $city->name = $request->town;
//        $sto->save();
//        $sto->town()->save($city);
//
//        foreach ($request->contact as $con) {
//            $contacts = new Contact();
//            $contacts->contact = $con;
//            $sto->contact()->save($contacts);
//        }
//
//        return redirect('/sto');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $sto = Sto::find($id);
//        $contact = $sto->contact;
//        $town = $sto->town;
//        return view('pages.show', ['sto' => $sto,
//            'town' => $town,
//            'contact' => $contact,
//        ],
//            compact('sto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function show($id)
    {
        $sto = Sto::find($id);
        $contact = $sto->contact;
//        $town = $sto->town;
        return view('pages.show', ['sto' => $sto,
//            'town' => $town,
            'contact' => $contact,
        ],
            compact('sto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $sto = Sto::find($id);
//        $sto->delete();
//        return redirect('sto');
    }


}
