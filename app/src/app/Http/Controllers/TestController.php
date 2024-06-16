<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $accounts = Accounts::paginate(3);
        return view('test', ['accounts' => $accounts]);
    }
    public function exec(Request $request){
        $validated = $request->validate([
            'name' => ['required','min:6'],
            'password' => ['required']
        ]);

        return redirect('/complete');
    }
    public function complete(){

        return view('test2');
    }
}
