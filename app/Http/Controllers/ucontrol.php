<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginmodel;
use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ucontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminhome()
    {
        return view('adminhome');
    }
    
    public function usrhome()
    {
        return view('userhome');
    }
    public function usrlogin()
    {
        return view('login');
        
    }

    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    public function logout()
    {
        if(session()->has('username'))
        {
            session()->pull('username');
            return redirect('/login');
        }
        else
        {
            return redirect('/login');
        }

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
            'name' => 'required',
            'uname' => 'required|unique:App\Models\loginmodel,uname',
            'email' => 'required',
            'mobile' => 'required',
            'ugend' => 'required',
            'pswd' => 'required|min:5'
        ]);

        $getname=request('name');
        $getuname=request('uname');
        $getemail=request('email');
        $getmobile=request('mobile');
        $getgender=request('ugend');
        $getpswd=request('pswd');
        


       

        $user=new loginmodel();
        $user->name=$getname;
        $user->uname=$getuname;
        $user->email=$getemail;
        $user->mobile= $getmobile;
        $user->gender=$getgender;
        $user->pswd= $getpswd;
        
        $user->save();
        return view('login');
    }

        public function logs(Request $request)
        
        

    {

        $userinfo2 = loginmodel::where([['uname',$request->uname],['pswd',$request->pswd]])->first();
        if($request->email=='admin' && $request->pass=='admin')
        {
            $request-> session()->put('username','admin');
            return redirect('/adminhome');

        }
        else if($userinfo2)
        {
            $request->session()->put('username',$userinfo->uname);
                    $request->session()->put('loggedusersid',$userinfo->sid);
                    return redirect('/userhome');
        }
        else{
            return back()->with('fail','Invalid Credentials !');
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
