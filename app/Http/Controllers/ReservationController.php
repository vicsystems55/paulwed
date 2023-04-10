<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use App\Mail\ReservationAdminMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    //

    public function store(Request $request)
    {
        # code...
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'invitees' => 'required'
        ]);

        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'invitees' => $request->invitees,

        ]);

        $datax=[

            'name' => $request->name,
            'phone' => $request->phone,
            'invitees' => $request->invitees,


        ];

        Mail::to($request->email)->send(new ReservationMail($datax));

        Mail::to('tnushipaul@gmail.com')->send(new ReservationAdminMail($datax));

        Mail::to('victorasuquob@gmail.com')->send(new ReservationAdminMail($datax));





        return redirect('/confirmed');
    }


    public function lists()
    {
        # code...

        $lists = Reservation::latest()->paginate(20);

        // return $lists;

        return view('view_list', compact('lists'));

    }
}
