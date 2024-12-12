<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\AboutUsModel;
use App\Models\BlogModel;
use App\Models\FooterModel;
use App\Models\FrontModel;
use App\Models\HomeBannerModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use App\Mail\EmailController;
use App\Models\ContactModel;

class FrontController extends Controller
{

    public function index()
    {
        $home_banner = HomeBannerModel::all();
        $home_about = AboutUsModel::all();
        $home_service = ServiceModel::all();
        $header_service_data = ServiceModel::all();
        $home_blog = BlogModel::all();
        $home_footer = FooterModel::all();

        return view('front.index', [
            'home_banner' => $home_banner,
            'home_about' => $home_about,
            'home_service' => $home_service,
            'header_service_data' => $header_service_data,
            'home_blog' => $home_blog,
            'home_footer' => $home_footer
        ]);
    }

    public function service_detail($id){

        $service_detail_data = ServiceModel::find($id);
        $header_service_data = ServiceModel::all();
        $home_footer = FooterModel::all();

        return view('front.services1', [
            'service_detail_data' => $service_detail_data,
            'header_service_data' => $header_service_data,
            'home_footer' => $home_footer
        ]);
    }

    public function sendEmail(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'datetime' => 'required|date',
            'company_name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Store the contact details in the database
            $contact = new ContactModel();
            $contact->first_name = $validatedData['first_name'];
            $contact->last_name = $validatedData['last_name'];
            $contact->email = $validatedData['email'];
            $contact->phone_number = $validatedData['phone_number'];
            $contact->datetime = $validatedData['datetime'];
            $contact->company_name = $validatedData['company_name'];
            $contact->message = $validatedData['message'];
            $contact->save();

            // Send email
            $mailData = [
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phone_number'],
                'datetime' => $validatedData['datetime'],
                'company_name' => $validatedData['company_name'],
                'message' => $validatedData['message'],
            ];

            Mail::to('ujjainwala.furkan@gmail.com')->send(new EmailController($mailData));

            // Redirect back with success message
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // If there's an error, redirect back with an error message
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }
    }

    // public function showContacts()
    // {
    //     // Retrieve contacts from the database in descending order of their IDs
    //     $contacts = ContactModel::orderBy('id', 'desc')->get();
    //     // dd($contacts);

    //     return view('contacts', ['contacts' => $contacts]);
    // }

    public function contact() {
        $header_service_data = ServiceModel::all();
        $home_footer = FooterModel::all();

        return view('front.Contact', [
            'header_service_data' => $header_service_data,
            'home_footer' => $home_footer
        ]);
    }

    // public function home() {
    //     return view('front.index');
    // }


    // public function about_us(){

    //     $home_about = AboutUsModel::all();
    //     $header_service_data = ServiceModel::all();

    //     return view('front.about_us', [
    //         'home_about' => $home_about,
    //         'header_service_data' => $header_service_data
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        ///
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FrontModel $frontModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FrontModel $frontModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FrontModel $frontModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FrontModel $frontModel)
    {
        //
    }
}
