<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('username') )
        {
            if(session('username')=='admin')
            {
                if($request->path()!='adminhome' && $request->path()!='ap' && $request->path()!='delete/{id}' && $request->path()!='vieworders'&& $request->path()!='viewproducts'&& $request->path()!='psearch'&& $request->path()!='aindex'&& $request->path()!='logout'&& $request->path()!='userview')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='userhome' && $request->path()!='cartadd/{pid}'&& $request->path()!='aboutus'&& $request->path()!='contactus'&& $request->path()!='userview'&& $request->path()!='add_to_cart'&& $request->path()!='cartlist'&& $request->path()!='removecart/{id}'&& $request->path()!='ordernow'&& $request->path()!='myorders'&& $request->path()!='viewproducts'&& $request->path()!='vieworders'&& $request->path()!='order/{id}/edit'&& $request->path()!='cancelorder/{id}/{userid}'&& $request->path()!='logout')
                {
                    return back();
                }

            }

        }
        else
        {

            if($request->path()!='/' && $request->path()!='reg'&& $request->path()!='login')
            {
                return redirect('/')->with ('fail','You must be logged in');
            }

        }
        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
    }
