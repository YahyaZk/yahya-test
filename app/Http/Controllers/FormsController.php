<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
  public function form1()
  {
    return view('forms.form1');
  }

  public function form1_data(Request $request)
  {
    //   dd($request->all());
    //   dd($request->except('_token'));
     //   dd($request->only('name','Age'));
    $name = $request->name;
    $Age = $request->Age;
    return "Welcom $name , Your age is $Age";
    }
    public function form2()
    {
        return view('forms.form2');
    }
    public function form2_data(Request $request)
    {
        dd($request->all());
    }
    public function form3  ()
    {
        return view('forms.form3');
    }
    public function form3_data (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        dd($request->all());
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data (Request $request)
    {
        $request->validate([
            // 'fname' => 'required |min:3|max:20',
            'fname' => 'required |min:3|max:20',
            'lname' => 'required |min:3|max:20',
            'email' => 'required |email|ends_with:gmail.com',
            'password' => 'required|confirmed',
            'bio' => 'required'
        ]);

        dd($request->all());
    }


}


