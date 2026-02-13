<?php


namespace App\Http\Controllers;


use App\Services\JsonStorage;


class MenuController extends Controller
{
    /**
     * Display all menu items
     */
    public function index(JsonStorage $storage)
    {
// Read menu.json file
        $menu = $storage->read('menu');


// Send data to Blade view
        return view('menu.index', compact('menu'));
    }
}
