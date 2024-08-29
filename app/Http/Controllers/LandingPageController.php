<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
class LandingPageController extends Controller
{
    protected $message = array(
        'error' => null,
        'message' => null
    );

    public function index()
    {
        $pages = LandingPage::where('user_id',Auth::user()->id)->get();
        return Inertia::render('Dashboard/Pages',[
            "pages" => $pages,
            'message' => $this->message,
        ]);
    }

    function store(Request $request)
    {
        $request->validate([
            'url' => 'string|url',
            'name' => 'string',
            'trackedButton' => 'string'
        ]);
        $user =  User::find(Auth::user()->id);
        $page =  $user->pages()->create([
            'name'  => $request->name,
            'url'   => $request->url,
            'ad_id' => 326745762534, // TODO : GENERATE AN ACTUAL RANDOM NUMBER OR UUID.
            "tracked_button" => $request->tracked_button
        ]);
        // TODO : IMPROVE ERROR HANDLING 
        if(!$page instanceof LandingPage){
            // TODO : SEND AN ACTUAL ERROR
            $this->message['message'] = "Something went Wrong";
            $this->message['error'] = true;
            return $this->index();
        }

        // TODO : SEND AN ACTUAL SUCCESS MESSAGE 
        $this->message['message'] = "Record Added Succefully";
        $this->message['error'] = false;
        return $this->index();
        
    }
    function show() {}

    // TODO : TEST THIS METHOD
    function update(Request $request, LandingPage $page)
    {
        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);

        return $page->update($request->all());
    }

    // TODO : TEST THIS METHOD
    function destroy(LandingPage $page)
    {
        return $page->delete();
    }
}
