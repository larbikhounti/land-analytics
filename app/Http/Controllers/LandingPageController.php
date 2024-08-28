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
            'ad_id' => 326745762534
        ]);

        if(!$page instanceof LandingPage){
            return $this->index();
        }

        return $this->index();
        
    }
    function show() {}

    function update(Request $request, LandingPage $page)
    {
        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);

        return $page->update($request->all());
    }

    function destroy(LandingPage $page)
    {
        return $page->delete();
    }
}
