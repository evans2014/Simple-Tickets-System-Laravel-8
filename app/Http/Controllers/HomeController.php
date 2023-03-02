<?php

namespace App\Http\Controllers;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
public function index()
    {
          if(Auth::user()->is_admin){
              $tickets = Ticket::paginate(10);
          } else {
              $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);
          }

        return view('home', compact(['tickets']));
    }
}
