<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function iletisimkaydet(Request $request){
        $data = $request->all();

        $data['ip'] = $request->ip();

        $sonveri = Contact::create($data);
        return $sonveri;
    }
}
