<?php

namespace App\Http\Controllers;

use App\Models\HomePageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the About Us page with dynamic content.
     */
    public function about()
    {
        $aboutContent = HomePageContent::getSection('about_us');
        return view('pages.about-us.about-us', compact('aboutContent'));
    }

    /**
     * Display the Contact Us page with dynamic content.
     */
    public function contact()
    {
        $contactContent = HomePageContent::getSection('contact_us');
        return view('pages.contact-us.contact-us', compact('contactContent'));
    }
}
