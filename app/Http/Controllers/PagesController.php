<?php

namespace App\Http\Controllers;

use App\Mail\SendContactUsMail;
use App\Mail\SendPopUpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index(){
        return view('website.pages.index');
    }

    public function Aboutus(){
        return view('website.pages.about');
    }

    public function Contactus(){
        return view('website.pages.contact');
    }

    // Services Pages
    public function AllServices(){
        return view('website.pages.all-services');
    }

    public function SurveillanceServices(){
        return view('website.pages.SurveillanceServices');
    }

    public function CheatingPartner(){
        return view('website.pages.CheatingPartner');
    }

    public function BackgroundCheck(){
        return view('website.pages.BackgroundChecks');
    }

    public function LegalInvestigation(){
        return view('website.pages.LegalInvestigation');
    }

    public function GPSTracker(){
        return view('website.pages.GPSTracker');
    }
    
    public function Corporate(){
        return view('website.pages.Corporate');
    }
    
    public function PeopleTracing(){
        return view('website.pages.PeopleTracing');
    }
    
    public function InternationalClient(){
        return view('website.pages.InternationalClient');
    }
    
    public function Landload(){
        return view('website.pages.Landloads');
    }
    
    public function FAQs(){
        return view('website.pages.FAQs');
    }

    public function PrivacyPolicy(){
        return view('website.pages.PrivacyPolicy');
    }

    public function ContactForm(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $mail = Mail::to('mianhamxa914@gmail.com')->send(new SendContactUsMail($request->all()));
        if($mail){
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => false]);
        }
    }
    
    public function PopUpForm(Request $request){
        $request->validate([
            'name' => 'required',
            'email_address' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $mail = Mail::to('mianhamxa914@gmail.com')->send(new SendPopUpMail($request->all()));
        if($mail){
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => false]);
        }
    }
}
