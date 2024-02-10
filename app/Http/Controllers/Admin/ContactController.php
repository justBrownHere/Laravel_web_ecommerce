<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Services\Contact\ContactService;

class ContactController extends Controller
{
    protected $contact;
    public function __construct(ContactService $contact){
        $this->contact = $contact;
    }
    public function index(){
        return view('admin.contact.contact',[
            'title' => 'Liên Hệ',
            'contacts'=> $this->contact->getContact()
        ]);
    }
}
