<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplController extends Controller
{
    public function index(){
        $appl=Application::all();
        return view('admin', compact('appl'));
    }

    public function create(Request $request){
        $request->validate([
            'title'=>'required|string',
            'Description' =>'required|string', 
            'date'=>'required|date',
            'address'=>'required|string',
            'status'=>'required|string',
            'user_id'=>'required',
        ]);

        Application::create(['title'=>$request->title, 'Description'=>$request->Description, 'date'=>$request->date, 'address'=>$request->address, 'phone'=>$request->phone, 'status'=>'Новая', 'user_id'=>'1']);
         
        return redirect()->route('user');
    }

    public function regect($id){
        $application=Application::findOrFail($id);
        $application->status='Отклонена';
        $application->save();
        return redirect()->route('index');
    }
    public function accept($id){
        $application=Application::findOrFail($id);
        $application->status='Приянта';
        $application->save();
        return redirect()->route('index');
    }
}


