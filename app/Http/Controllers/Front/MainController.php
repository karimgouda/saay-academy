<?php

namespace App\Http\Controllers\Front;

use App\Models\Goal;
use App\Models\Build;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Leader;
use App\Models\Worker;
use App\Models\Company;
use App\Models\Discuss;
use App\Models\Feature;
use App\Models\Partner;
use App\Models\Promise;
use App\Models\Quality;
use App\Models\AboutSlider;
use App\Models\AboutHistory;
use App\Models\HomeCategory;
use App\Models\ServicesMenu;
use Illuminate\Http\Request;
use App\Models\AboutStatistic;
use App\Models\Characteristic;
use App\Models\ServicesGallery;
use App\Models\ServicesTrouble;
use App\Models\ServicesSolution;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use App\Services\SEOFrontRenderService;

class MainController extends Controller
{
    public function __construct()
    {
        SEOFrontRenderService::generalRender();
    }
    
    /**
     * Home Page
     *
     * @return Response
     */
    public function home()
    {
        $banner             = Banner::where('page_type', 'home')->first();
        $features           = Feature::limit(3)->get();
        $characteristics    = Characteristic::limit(4)->get();
        $goal               = Goal::first();
        $quality            = Quality::first();
        $build              = Build::first();
        $skills             = Skill::limit(3)->get();
        $homeCategories     = HomeCategory::limit(4)->get();
        $partners           = Partner::get();
        $discuss            = Discuss::first();
        $workers            = Worker::get();

        return view('web.frontend.pages.home', compact('banner', 'features', 'characteristics', 'goal', 'quality', 'build', 'skills', 'homeCategories', 'partners', 'discuss', 'workers'));
    }

    /**
     * About Page
     *
     * @return Response
     */
    public function about()
    {
        $banner     = Banner::where('page_type', 'about')->first();
        $leader     = Leader::first();
        $sliders    = AboutSlider::get();
        $statistics = AboutStatistic::limit(4)->get();
        $history    = AboutHistory::first();

        return view('web.frontend.pages.about', compact('banner', 'leader', 'sliders', 'statistics', 'history'));
    }

    /**
     * Services Page
     *
     * @return Response
     */
    public function services()
    {
        $banner     = Banner::where('page_type', 'services')->first();
        $menus      = ServicesMenu::get();
        $solutions  = ServicesSolution::get();
        $troubles   = ServicesTrouble::get();
        $galleries  = ServicesGallery::get();

        return view('web.frontend.pages.services', compact('banner', 'menus', 'solutions', 'troubles', 'galleries'));
    }

    /**
     * Contact Page
     *
     * @return Response
     */
    public function contact()
    {
        return view('web.frontend.pages.contact');
    }

    /**
     * Store new contact
     *
     * @param ContactRequest $request
     * @return void
     */
    public function storeContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', __("pages.contact.We've received your request successfully!"));
    }

    /**
     * Privacy & Policy Page
     *
     * @return Response
     */
    public function privacyPolicy()
    {
        $banner             = Banner::where('page_type', 'privacy_&_policy')->first();
        $privacyPolicies    = PrivacyPolicy::get();

        return view('web.frontend.pages.privacy_&_policy', compact('banner', 'privacyPolicies'));
    }

    /**
     * Terms & Conditions Page
     *
     * @return Response
     */
    public function termsConditions()
    {
        $banner = Banner::where('page_type', 'terms_&_conditions')->first();
        $termConditions = TermsCondition::get();

        return view('web.frontend.pages.terms_&_conditions', compact('banner', 'termConditions'));
    }
}
