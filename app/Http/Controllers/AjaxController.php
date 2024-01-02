<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContactFormRequest $request){

        $datas = [
            'name' => Str::title($request->name),
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ];


        $latestDatas = Contact::create($datas);
        if($latestDatas){
            return back()->with(['message'=> 'Formunuz başarıyla gönderildi.']);
        } else {
            return back()->with(['message'=> 'Formunuz gönderilirken bir hata oluştu.']);
        }
    }
}
