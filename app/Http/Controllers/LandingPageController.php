<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;
use Inertia\Inertia;
class LandingPageController extends Controller
{

    public function index()
    {
        return Inertia::render('Dashboard/Pages');
    }

    function store(Request $request)
    {

        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);

        $land = new LandingPage();
        return $land->save($request->all());
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
