<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Services\Contact\ContactService;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index(Request $request)
    {
        $result = $this->contactService->create($request);
        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/contact');
    }

    public function show()
    {
        $products = $this->contactService->getContact();
        return view('contact', [
            'title' => 'Giỏ Hàng',
            'contact' => $contacts,
            'contacts' => Session::get('contacts')
        ]);
    }


    public function addContact(Request $request)
    {
        $this->contactService->addContact($request);

        return redirect()->back();
    }
    public function send(){
        
    }
}