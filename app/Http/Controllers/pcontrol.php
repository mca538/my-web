<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pmodel;
use App\Models\cartmodel;
use DB;
use Session;
use App\Models\order;
use App\Models\loginmodel;

class pcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
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
            'pid' => 'required|unique:App\Models\pmodel,pid',
            'pn' => 'required',
            'pd' => 'required',
            'pp' => 'required',
            
        ]);

        $getpid=request('pid');
        $getpn=request('pn');
        $getpd=request('pd');
        $getpp=request('pp');

        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        
        
        
        $user=new pmodel();
        $user->pid=$getpid;
        $user->pn=$getpn;
        $user->pd=$getpd;
        $user->pp= $getpp;
        $user->pimage=$name;
        $user->save();
        return redirect('/aindex')->with ('success','Your Product is Added!!');
    }

    public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('pid',$id)
        ->where('userid',$uid)
        ->delete();
        return redirect('/myorders');
    
    }

    public function front()
    {
        return view('front');
    }


    public function orderedit($id)
    {
        $prod=order::find($id);
        
        return view('editorder',compact('prod'));
    }

    public function updateorder(Request $request, $id)
    {
        $prod=order::find($id);


        $getstatus=request('status');

        $prod->status = $getstatus;


        $prod->save();


        return redirect('/vieworders');

    }

    public function vieworders()
    { 
        $prod=order::all();
     return view('vieworders',compact('prod'));

    }

    public function cartlist()
{
    $products=pmodel::all();
    $userId=Session::get('username');
    $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.un', $userId)
    ->select('pmodels.*','cartmodels.id as cart_id')
    ->get();
     return view('cart', compact('products'));
}

public function viewproducts()
{
   
    $prod=pmodel::all();
    return view('viewproducts',compact('prod'));


}

public function myorder()
{
   
    $userId=Session::get('username');
     $orders=DB::table('orders')
    ->join('pmodels', 'orders.pid', '=', 'pmodels.pid')
    ->where('orders.userid', $userId)
    ->get();
     return view('myorders', ['orders'=>$orders]);
}


    public function prodview()
    { 
        $data=['loggeduserinfo'=>loginmodel::where('uname','=',session('username'))->first()];
        $prod=pmodel::all();
        return view('userhome',compact('prod'),$data);


    }


    public function search(Request $request)
    {
        $getpn=request('pn');
        $prod=pmodel::query()
        ->where('pn','LIKE',"%{$getpn}%")
        ->get();
        return view('viewproducts',compact('prod'));
    }

    public function ordernow()
{
    $products=pmodel::all();
    $userId=Session::get('username');
    $total= $products= DB::table('cartmodels')
    ->join('pmodels', 'cartmodels.pid', '=', 'pmodels.pid')
    ->where('cartmodels.un', $userId)
    ->sum('pmodels.pp');
     return view('order', ['total'=>$total]);
}

function orderplace (Request $req)
{
    $userId= Session::get('username');
    $allCart=cartmodel::where('un', $userId)->get();
    foreach($allCart as $cart)
  {
    $order= new order;
    $order->pid=$cart['pid'];
    $order->userid=$cart['un']; 
    $order->address=$req->address;
    $order->status="pending";
    $order->paymentmethod=$req->payment; 
    $order->paymentstatus="pending";
    $order->save();
  } 
      cartmodel::where('un', $userId)->delete();
      return redirect('/userhome')->with ('success','Thankyou for your order!!');
}



    public function cartview()
{
    $cats=cartmodel::all();
    return view('cart',compact('cats'));
}

   
    public function cartadd($pid)
    {
        $row=DB::table('pmodels')->where('pid',$pid)->first();
        $items=['info'=>$row];

        return view('cart',compact('items'));
    }


    public function removecart($id)
{
    cartmodel::destroy($id);

    return redirect('/cartlist');
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

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function usrview()
 {
     $user=pmodel::all();
    // $data=['loggeduserinfo'=>pmodel::where('un','=',session('loggeduser'))->first()];
     return view('apview',compact('user'));
 }

 public function update(Request $request)
 {


    /* $servicedetails=pmodel::find($id);


     $getpid=request('pid');
     $getpn=request('pn');
     $getpd=request('pd');
     $getpp=request('pp');

     $getpimage=$request->file('pimage');
     $name=$getpimage->getClientOriginalName();
     $getpimage->move(public_path('assets/project_img'),$name);

     
     
     
     $user=new pmodel();
     $user->pid=$getpid;
     $user->pn=$getpn;
     $user->pd=$getpd;
     $user->pp= $getpp;
     $user->pimage=$name;
     $user->save();*/


     $updating=DB::table('pmodels')->where('id',$request->input('id'))->update([
        'pn'=>$request->input('pn'),
        'pd'=>$request->input('pd'),
        'pp'=>$request->input('pp')
    ]);
     return redirect('/userview');



    }

     public function edit($id)
    {

    $user=pmodel::find($id);
    return view('pedit',compact('user'));

    }
    public function addtocart(Request $request)
    {
        
         $cartmodels=new cartmodel();
            $cartmodels->un=session('username');//$request->session()->get('newmodel')['id'];
            $cartmodels->pid=$request->pid;
            $cartmodels->save();
            if($cartmodels)
            {
                //return redirect('product');
                return redirect('/viewproducts')->with ('success','Your item is added to cart!!');

            }
        else
        {
            echo "fail";
            //return redirect('auth/login');
        }
        
    }
    public function deleteview($id)
    {
        $user=pmodel::find($id);
        return view('pdeleteview',compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=pmodel::find($id);

        $user->delete();


        return redirect('/userview');


    }
}
