<?php

namespace App\Http\Controllers;


use App\Review;

use App\SiteSettings;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //  start here
    public function indexpage()
    {
      //  $data = [ ];
      //  $reviews = Review::all();

        $settings = SiteSettings::find(1);
        return view('frontend.index', compact('settings'));
    }

    public function clear ()
    {
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');

        return 'Clear Ok!';
    }

    public function install ()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('storage:link');
        Artisan::call('db:seed');

        return 'Migrate Reset, Storage:Link, DB Seed Done!';
    }

}
