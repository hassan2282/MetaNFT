<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $allNfts = Nft::all();
        $latestNfts = Nft::latest();
        $Nfts = Nft::latest()->take(7)->get();
        return view('home.index',compact('Nfts','allNfts','latestNfts'));
    }
}
