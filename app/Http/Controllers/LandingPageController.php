<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    function index()
    {
        return LandingPage::all();
    }

    function store(Request $request)
    {

        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);

        $land = new LandingPage();
        if (!$land->save($request->all())) {
            return false;
        }

        return true;
    }
    function show() {}

    function update(Request $request, LandingPage $page)
    {
        $request->validate([
            'url' => 'string|url',
            'name' => 'string'
        ]);

        if (!$page->update($request->all())) {
            return false;
        }
    }

    function destroy(LandingPage $page)
    {
        if (!$page->delete()) {
            return false;
        }

        return true;
    }
}
