<?php

namespace App\Http\Controllers;

use App\Http\Requests\NftRequest;
use App\Models\Nft;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Nft.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NftRequest $NftRequest)
    {
        $image_Name = time() .'-'. $NftRequest->name .'.'. $NftRequest->image->extension();
        $NftPath = $NftRequest->image->move('images', $image_Name);

       $Nft = new Nft;
       $Nft->name = $NftRequest->name;
       $Nft->discription = $NftRequest->discription;
       $Nft->prise = $NftRequest->prise;
       $Nft->size = $NftRequest->size;
       $Nft->propertie = $NftRequest->propertie;
       $Nft->royality = $NftRequest->royality;
       $Nft->user_id = auth()->user()->id;
       $Nft->image_path = $NftPath;
       $NftSave = $Nft->save();
       if($NftSave){
           Alert::Success('Success','Your NFT Successfully Created!!!');
       }else{
           Alert::error('Error','Something Went Wrong!!!');
       }
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        $Nfts = User::find($id)->Nft;
        return view('author',compact('user','Nfts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
