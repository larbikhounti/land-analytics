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

    public function index(Request $request)
    {
            return Inertia::render('Dashboard/Pages', [
                'message' => $this->message,
                'pages' => LandingPage::query()
                    ->when($request->input('search'), function ($query, $search) {
                        $query->where('name', 'like', "%{$search}%");
                    })
                    ->paginate(10)
                    ->withQueryString()
                    ->through(fn($page) => [
                        'id' => $page->id,
                        'name' => $page->name,
                        'url' => $page->url,
                        'tracked_button' => $page->tracked_button
                    ]),
    
                'filters' => $request->only(['search']),
            ]);
    }

    function store(Request $request)
    {     
        $request->validate([
            'url' => 'required|string|url',
            'name' => 'required|string|required',
            'tracked_button' => 'required|string|required',
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
            return redirect('/pages');
        }

        // TODO : SEND AN ACTUAL SUCCESS MESSAGE 
        $this->message['message'] = "Record Added Succefully";
        $this->message['error'] = false;
        return redirect('/pages');
        
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
