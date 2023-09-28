<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;

class productDetailController extends Controller
{
    public function index(Nft $Nft)
    {
        return view('product-detail',compact('Nft'));
    }

    public function likes($id)
    {
        $NftLikes = Nft::find($id);
        $likes = $NftLikes->likes+1;

        $Nft = Nft::find($id)->update(['likes' => $likes]);
        return back();

    }
}
