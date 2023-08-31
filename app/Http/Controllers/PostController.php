<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblClearance;

class PostController extends Controller
{
    public function landing()
    {
        return view ('landingpage.landing');
    }

    public function about()
    {
        return view ('landingpage.about');
    }

    public function accomplishment()
    {
        return view ('landingpage.accomplishment');
    }

    public function login()
    {
        return view ('landingpage.login');
    }

    public function ordinance()
    {
        return view ('landingpage.ordinance');
    }

    public function forms()
    {
        return view ('dashboard.forms');
    }

    public function clearance()
    {
        return view ('dashboard.clearance');

    }

    public function getData()
    {
        $data = tblClearance::get();
        // return $data;
        return view ('dashboard.getData', compact('data'));
    }

    public function saveData(Request $request ){
        // dd($request->all());

        $name = $request->name;
        $purok = $request->purok;
        $date = $request->date;
        $ctc_no = $request->ctc_no;
        $issued_at = $request->issued_at;
        $date_issued = $request->date_issued;
        $or_no = $request->or_no;
        $amount_paid = $request ->amount_paid;
    
        $getData = new tblClearance();
        $getData->name=$name;
        $getData->purok=$purok;
        $getData->date=$date;
        $getData->ctc_no=$ctc_no;
        $getData->issued_at=$issued_at;
        $getData->date_issued=$date_issued;
        $getData->or_no=$or_no;
        $getData->amount_paid=$amount_paid;
        $getData->save();

        return redirect()->back()-> with('success', 'Added Successfuly');
    }

    public function businessData()
    {
        $data = tblClearance::get();
        // return $data;
        return view ('dashboard.businessData', compact('data'));
    }
   
    public function business()
    {
        return view ('dashboard.business');

    }

    public function sendAnnouncement()
    {
        return view ('announcement.sendAnnouncement');

    }
}
