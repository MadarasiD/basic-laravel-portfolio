<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Category;
use App\Models\ContactSetting;
use App\Models\Experience;
use App\Models\Hero;
use App\Models\Message;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\SkillsItemSetting;
use App\Models\SkillsSectionSetting;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::all();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skillSetting = SkillsSectionSetting::first();
        $skillItem = SkillsItemSetting::all();
        $experiences = Experience::first();
        $contactSetting = ContactSetting::first();
        return view('frontend.home', compact(
            'hero', 
            'typerTitles', 
            'services', 
            'about',
            'portfolioTitle',
            'portfolioCategories',
            'portfolioItems',
            'skillSetting',
            'skillItem',
            'experiences',
            'contactSetting'
        ));
    }

    public function showPortfolio($id)
    {
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'subject' => ['required', 'max:300'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:2000'],
            'terms' => ['required']
       ]);

       if (!$request->has('terms')) {
        return response(['status' => 'error', 'message' => 'Az adatkezelési tájékoztató elfogadása kötelező.']);
    }

       $message = new Message();
       $message->name = $request->name;
       $message->email = $request->email;
       $message->subject = $request->subject;
       $message->message = $request->message;
       $message->save();

       Mail::send(new ContactMail($request->all()));

       return response(['status' => 'success', 'message' => 'Az üzenet sikeresen elküldve!']);
    }

}
