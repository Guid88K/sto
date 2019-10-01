<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Sto;
use App\Town;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminStoController extends Controller
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
        $user = Auth::user();
        return view('admin.index', ['sto' => $sto, 'city' => $city, 'user' => $user]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $town = Town::all();
        $user = Auth::user();
        return view('pages.create', ['town' => $town, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'town' => 'required',
            'contact' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        $destinationPath = 'upload';
        $file->move($destinationPath, $file->getClientOriginalName());

        $sto = new Sto();
        $sto->name = $request->name;
        $sto->image = $file->getClientOriginalName();
        $sto->address = $request->address;
        $sto->town = $request->town;

        $sto->description = $request->description;
        $check_monday = Input::get('monday', false);
        if ($check_monday == 'monday') {
            $sto->start_hour_monday = 'вихідний';
        } else {
            $sto->start_hour_monday = $request->start_hour_monday;
            $sto->end_hour_monday = $request->end_hour_monday;
        }

        $check_tuesday = Input::get('tuesday', false);
        if ($check_tuesday== 'tuesday') {
            $sto->start_hour_tuesday = 'вихідний';
        } else {
            $sto->start_hour_tuesday = $request->start_hour_tuesday;
            $sto->end_hour_tuesday = $request->end_hour_tuesday;
        }
        $check_wednesday = Input::get('wednesday', false);
        if ($check_wednesday == 'wednesday') {
            $sto->start_hour_wednesday = 'вихідний';
        } else {
            $sto->start_hour_wednesday = $request->start_hour_wednesday;
            $sto->end_hour_wednesday = $request->end_hour_wednesday;
        }
        $check_thursday = Input::get('thursday', false);
        if ($check_thursday == 'thursday') {
            $sto->start_hour_thursday = 'вихідний';
        } else {
            $sto->start_hour_thursday = $request->start_hour_thursday;
            $sto->end_hour_thursday = $request->end_hour_thursday;
        }
        $check_friday = Input::get('friday', false);
        if ($check_friday == 'friday') {
            $sto->start_hour_friday = 'вихідний';
        } else {
            $sto->start_hour_friday = $request->start_hour_friday;
            $sto->end_hour_friday = $request->end_hour_friday;
        }
        $check_saturday = Input::get('saturday', false);
        if ($check_saturday == 'saturday') {
            $sto->start_hour_saturday = 'вихідний';
        } else {
            $sto->start_hour_saturday = $request->start_hour_saturday;
            $sto->end_hour_saturday = $request->end_hour_saturday;
        }
        $check_sunday = Input::get('sunday', false);
        if ($check_sunday == 'sunday') {
            $sto->start_hour_sunday = 'вихідний';
        } else {
            $sto->start_hour_sunday = $request->start_hour_sunday;
            $sto->end_hour_sunday = $request->end_hour_sunday;
        }


//        $city = new Town();
//        $city->name = $request->town;

        $sto->save();
        $check_city = Town::where('name_town', '=', $request->town)->first();

        if ($check_city === null) {
            $town = new Town;
            $town->name_town = $request->town;
            $sto->town()->save($town);
        }


        foreach ($request->contact as $con) {
            $contacts = new Contact();
            $contacts->contact = $con;
            $sto->contact()->save($contacts);
        }
        return redirect('/sto_public');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $sto = Sto::find($id);
//        $contact = $sto->contact;
//        return view('pages.show', ['sto' => $sto,
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
        $sto = Sto::find($id);
        $town = Town::all();
        $contact = $sto->contact;
        $user = Auth::user();
        return view('pages.edit', [
            'sto' => $sto,
            'contact' => $contact,
            'user' => $user,
            'town' => $town
        ]);
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
        $request->validate([
            'name' => 'required',
            'town' => 'required',
            'contact' => 'required',
            'description' => 'required',

        ]);
        $file = $request->file('image');

        if ($file != null) {
            $destinationPath = 'upload';
            $file->move($destinationPath, $file->getClientOriginalName());

            $sto = Sto::find($id);
            $sto->name = $request->name;
            $sto->image = $file->getClientOriginalName();
            $sto->address = $request->address;
            $sto->town = $request->town;
            $sto->description = $request->description;
            $check_monday = Input::get('monday', false);
            if ($check_monday == 'monday') {
                $sto->start_hour_monday = 'вихідний';
            } else {
                $sto->start_hour_monday = $request->start_hour_monday;
                $sto->end_hour_monday = $request->end_hour_monday;
            }

            $check_tuesday = Input::get('tuesday', false);
            if ($check_tuesday== 'tuesday') {
                $sto->start_hour_tuesday = 'вихідний';
            } else {
                $sto->start_hour_tuesday = $request->start_hour_tuesday;
                $sto->end_hour_tuesday = $request->end_hour_tuesday;
            }
            $check_wednesday = Input::get('wednesday', false);
            if ($check_wednesday == 'wednesday') {
                $sto->start_hour_wednesday = 'вихідний';
            } else {
                $sto->start_hour_wednesday = $request->start_hour_wednesday;
                $sto->end_hour_wednesday = $request->end_hour_wednesday;
            }
            $check_thursday = Input::get('thursday', false);
            if ($check_thursday == 'thursday') {
                $sto->start_hour_thursday = 'вихідний';
            } else {
                $sto->start_hour_thursday = $request->start_hour_thursday;
                $sto->end_hour_thursday = $request->end_hour_thursday;
            }
            $check_friday = Input::get('friday', false);
            if ($check_friday == 'friday') {
                $sto->start_hour_friday = 'вихідний';
            } else {
                $sto->start_hour_friday = $request->start_hour_friday;
                $sto->end_hour_friday = $request->end_hour_friday;
            }
            $check_saturday = Input::get('saturday', false);
            if ($check_saturday == 'saturday') {
                $sto->start_hour_saturday = 'вихідний';
            } else {
                $sto->start_hour_saturday = $request->start_hour_saturday;
                $sto->end_hour_saturday = $request->end_hour_saturday;
            }
            $check_sunday = Input::get('sunday', false);
            if ($check_sunday == 'sunday') {
                $sto->start_hour_sunday = 'вихідний';
            } else {
                $sto->start_hour_sunday = $request->start_hour_sunday;
                $sto->end_hour_sunday = $request->end_hour_sunday;
            }
            $sto->save();
//        $city = Town::find($id);
//        $city->name = $request->town;

//        $sto->town()->save($city);

            foreach ($request->contact as $con) {
                $d_contact = $sto->contact;
                foreach ($d_contact as $cd) {
                    $cd->delete();
                }
                $contacts = new Contact();
                $contacts->contact = $con;
                $sto->contact()->save($contacts);
            }
        } else {
            $sto = Sto::find($id);
            $sto->name = $request->name;
            $sto->address = $request->address;
            $sto->town = $request->town;
            $sto->description = $request->description;
            $check_monday = Input::get('monday', false);
            if ($check_monday == 'monday') {
                $sto->start_hour_monday = 'вихідний';
            } else {
                $sto->start_hour_monday = $request->start_hour_monday;
                $sto->end_hour_monday = $request->end_hour_monday;
            }

            $check_tuesday = Input::get('tuesday', false);
            if ($check_tuesday== 'tuesday') {
                $sto->start_hour_tuesday = 'вихідний';
            } else {
                $sto->start_hour_tuesday = $request->start_hour_tuesday;
                $sto->end_hour_tuesday = $request->end_hour_tuesday;
            }
            $check_wednesday = Input::get('wednesday', false);
            if ($check_wednesday == 'wednesday') {
                $sto->start_hour_wednesday = 'вихідний';
            } else {
                $sto->start_hour_wednesday = $request->start_hour_wednesday;
                $sto->end_hour_wednesday = $request->end_hour_wednesday;
            }
            $check_thursday = Input::get('thursday', false);
            if ($check_thursday == 'thursday') {
                $sto->start_hour_thursday = 'вихідний';
            } else {
                $sto->start_hour_thursday = $request->start_hour_thursday;
                $sto->end_hour_thursday = $request->end_hour_thursday;
            }
            $check_friday = Input::get('friday', false);
            if ($check_friday == 'friday') {
                $sto->start_hour_friday = 'вихідний';
            } else {
                $sto->start_hour_friday = $request->start_hour_friday;
                $sto->end_hour_friday = $request->end_hour_friday;
            }
            $check_saturday = Input::get('saturday', false);
            if ($check_saturday == 'saturday') {
                $sto->start_hour_saturday = 'вихідний';
            } else {
                $sto->start_hour_saturday = $request->start_hour_saturday;
                $sto->end_hour_saturday = $request->end_hour_saturday;
            }
            $check_sunday = Input::get('sunday', false);
            if ($check_sunday == 'sunday') {
                $sto->start_hour_sunday = 'вихідний';
            } else {
                $sto->start_hour_sunday = $request->start_hour_sunday;
                $sto->end_hour_sunday = $request->end_hour_sunday;
            }
            $sto->save();
//        $city = Town::find($id);
//        $city->name = $request->town;

//        $sto->town()->save($city);

            foreach ($request->contact as $con) {
                $d_contact = $sto->contact;
                foreach ($d_contact as $cd) {
                    $cd->delete();
                }
                $contacts = new Contact();
                $contacts->contact = $con;
                $sto->contact()->save($contacts);
            }
        }

        return redirect('/sto_public');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sto = Sto::find($id);
        $sto->delete();
        return redirect('sto_public');
    }
}
