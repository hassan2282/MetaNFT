<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\contactRequest;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;

class contactController extends Controller
{
    public function store(contactRequest $contactRequest){
        $contact = new Contact([
            'name' => $contactRequest->name,
            'email' => $contactRequest->email,
            'subject' => $contactRequest->subject,
            'message' => $contactRequest->message,
        ]);
        $contact->save();
        if ($contact){
            return back()->with('success','پیام شما برای بررسی ارسال شد');
        }else{
            return back()->with('error','متاسفانه مشکلی پیش اومده');
        }
    }

    public function index()
    {
        $contacts = Contact::query();
        if ($key = \request('search'))
        {
            $contacts->where('name','LIKE',"%{$key}%")
                ->orWhere('email','LIKE',"%{$key}%")
                ->orWhere('subject','LIKE',"%{$key}%")
                ->orWhere('message','LIKE',"%{$key}%");
        }
        $contacts = $contacts->latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $delete = $contact->delete();
            if ($delete){
                Alert::success('success','contact successfully deleted!');
            }
        return back();
    }
}
