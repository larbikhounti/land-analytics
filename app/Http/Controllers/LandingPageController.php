<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
class LandingPageController extends Controller
{

    public function index()
    {
        $pages = LandingPage::where('user_id',Auth::user()->id)->get();
        return Inertia::render('Dashboard/Pages',[
            "pages" => $pages
        ]);
    }

    function store(Request $request)
    {

        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);
        
 
        $user =  User::find(Auth::user()->id);
        $page =  $user->pages()->create([
            'name'  => $request->name,
            'url'   => $request->url,
            'ad_id' => 326745762534 // TODO : GENERATE AN ACTUAL RANDOM NUMBER OR UUID
        ]);
        // TODO : IMPROVE ERROR HANDLING 
        if(!$page instanceof LandingPage){
            // TODO : SEND AN ACTUAL ERROR
            return $this->index();
        }

        // TODO : SEND AN ACTUAL SUCCESS MESSAGE 
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
