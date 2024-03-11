<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Mail\PortfolioMail;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index()
    {
        // Logic to show all resources
    }

    public function create()
    {
        // Logic to show the create form
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'message' => 'nullable|string',
        ]);

        $portfolio = new Portfolio;
        $portfolio->name = $validatedData['name'];
        $portfolio->email = $validatedData['email'];
        $portfolio->mobile = $validatedData['mobile'];
        $portfolio->message = $validatedData['message'];
        $portfolio->save();

        $this->html_mail($portfolio);

        return redirect('/contact')->with('success', 'Email successfully sent');

    }


    public function html_mail($portfolio)
    {
        Mail::send('emails.mail', ['data' => $portfolio], function ($message)
        {
            $message->to('surajv2344@gmail.com', 'Suraj')
                ->subject('New message recieved');
            $message->from('surajv2344@gmail.com', 'Suraj');
        });
        
        return true;
    }

    public function show($id)
    {
        // Logic to show a specific resource
    }

    public function edit($id)
    {
        // Logic to show the edit form for a specific resource
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific resource
    }

    public function destroy($id)
    {
        // Logic to delete a specific resource
    }
}
