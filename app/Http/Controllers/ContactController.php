<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\ContactSent;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|max:50',
            'message' => 'required',
            ],[
            'fullname.required' => 'Proporciona nombre completo.',
            'email.max' => 'Email con máximo 50 caracteres.',
            'message.required' => 'Favor de escribir el mensaje.',
            ]);
            $contact = new Contact();
            $contact->fullname = $request->input('fullname');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $data=new \stdClass();
            $data->mess=$request->message;
            $contact->save();
            Mail::to($request->input('email'))->send(new ContactSent($data));
            return redirect()->route('contact.index')->with('success', 'You message has been sent.');
    }
    */
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $validator = Validator::make($request->all(), [
                'fullName'   => 'required|max:50',
                'email'   => 'required|email|max:50',
                'message' => 'required|max:500',
            ]);
           
            if ($validator->fails()) {
                return response()->json($validator->messages()->toArray(), 400);
            }
   
            $contact = new Contact();
            $contact->fullname = $request->input('fullName');
            $contact->email = $request->input('email');
            $contact->message = $request->input('message');
            $data=new \stdClass();
            $data->mess=$request->message;
            Mail::to($request->input('email'))->send(new ContactSent($data));
            $contact->save();
            return response()->json(["message"=>"Contact message sent successfully."]);
        }



    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
