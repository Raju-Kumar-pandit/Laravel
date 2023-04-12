<?php
namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;


class ResumeController extends Controller{
    public function resume(Request $request)
    {
        $resume = new Resume();
        $resume->title = $request->title;
        $resume->name = $request->name;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->git = $request->git;
        $resume->rank = $request->rank;
        $resume->district = $request->district;
        $resume->state = $request->state;
        $resume->pcode = $request->pcode;
        $resume->nation = $request->nation;
        $resume->objective = $request->objective;
        $resume->save();
        return view("listresume",["resume"=>$resume]);
    }
}