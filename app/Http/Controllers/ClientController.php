<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view ('index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'fname' =>'required',
            'lname' =>'required',
            'contact' =>'required',
            'email' =>'required',
            'gender' =>'required',
            'dob' =>'required',
            'street_no' =>'required',
            'street_address' =>'required',
            'city' =>'required',
        ]);

        $client = new Client();
        $client->fname = $request->fname;
        $client->lname = $request->lname;
        $client->contact = $request->contact;
        $client->email = $request->email;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->street_no = $request->street_no;
        $client->street_address = $request->street_address;
        $client->city = $request->city;

        if($request->status == "on"){
            $client->status = 'active';
        }else{
            $client->status = 'inactive';
        }

        $client->save();
        
        return redirect()->back()->with('success','Client has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        // dd($client);
        return view('show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        // dd($client);

        return view('edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client = client::where('id',$client->id)->first();

        $validated = $request->validate([
            'fname' =>'required',
            'lname' =>'required',
            'contact' =>'required',
            'email' =>'required',
            'gender' =>'required',
            'street_no' =>'required',
            'street_address' =>'required',
            'city' =>'required',
        ]);

        $client->fname = $request->fname;
        $client->lname = $request->lname;
        $client->contact = $request->contact;
        $client->email = $request->email;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->street_no = $request->street_no;
        $client->street_address = $request->street_address;
        $client->city = $request->city;

        if($request->status == "on"){
            $client->status = 'active';
        }else{
            $client->status = 'inactive';
        }

        $client->save();
        
        return redirect()->back()->with('success','Client has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back()->with('success','Client has been deleted successfully');
    }
}
