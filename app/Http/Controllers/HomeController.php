<?php

namespace App\Http\Controllers;

use App\Download;
use function App\Http\canDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect()->back();
    }

    public function downloadClient()
    {
        Download::create(['user_id' => Auth::id()]);
        return redirect()->away('https://dl.heroesawaken.com/HeroesAwakenTutorial.zip');
    }
}