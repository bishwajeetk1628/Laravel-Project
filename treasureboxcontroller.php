<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signup;
class treasureboxcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treasurebox/treasurebox');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
                         "name"=>"required",
                         "gender"=>"required",
                         "mobile"=>"required",
                         "email"=>"required",
                         "password"=>"required"
            ]);
        $signup=new signup([
             "name"=>$request->get("name"),
             "gender"=>$request->get("gender"),
             "mobile"=>$request->get("mobile"),
             "email"=>$request->get("email"),
             "password"=>$request->get("password")
            ]);
        $signup->save();
        return redirect()->route('treasurebox/treasurebox')->with('success','data added');
       

    }
     public function session(Request $request)
    {
         $this->validate($request,[
            "email"=>"required",
            "password"=>"required"
            ]);
         $user_data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'));
         if(Auth::attempt($user_data))
         {
            return redirect('treasurebox/treasurebox');
         }
          else
          {
            return back()->with('errors','wrong Login details');
          }
     }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
