<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        return view('home');
    }

    public function theFirm() {

        return view('the_firm');
    }

    public function people() {
        $people = People::get();
        return view('people', compact('people'));
    }

    public function people_show($people) {

        $people = People::whereSlug($people)->firstOrFail();
        return view('profiles.index', compact('people'));
    }

    /* Profiles */

    public function william() {

        return view('profiles.william');
    }

    public function khairulnisa() {

        return view('profiles.khairulnisa');
    }

    public function jessie() {

        return view('profiles.jessie');
    }

    public function man() {

        return view('profiles.man');
    }

    public function heaw() {

        return view('profiles.heaw');
    }

    /* Practices */
    public function litigation() {

        return view('practices.litigation');
    }
    public function corporateCommercial() {

        return view('practices.corporate-commercial');
    }
    public function propertyConveyancing() {

        return view('practices.property-conveyancing');
    }
    public function consumerBusiness() {

        return view('practices.consumer-business');
    }
    public function willsProbate() {

        return view('practices.wills-probate');
    }
    public function divorce() {

        return view('practices.divorce');
    }
    /* Practices end */

    public function article() {

        return view('article');
    }

    public function articles() {

        return view('articles');
    }

    public function contact() {

        return view('contact');
    }
}
