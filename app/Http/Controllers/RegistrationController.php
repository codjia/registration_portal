<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Membership;


class RegistrationController extends Controller
{

    public function  index()
    {

        $reg = Registration::all();
        //dd($blog);

        return view('registration.show')->with('clients',$reg);

    }
    public function  membership()
    {

        $reg = Membership::all();
        //dd($blog);

        return view('registration.membership')->with('clients',$reg);

    }

    public function register(Request $request)
    {
                //  dd($request->post('transc'));

        if ($request->method() == 'POST') {
            $rules = [
                'email' => 'required',
                'name' => 'required',
                'date_of_birth' => 'required',
                'gender' => 'required',
                'contact' => 'required|numeric|min:1',
                'occupation' => 'required',
                'hometown' => 'required',
                'address' => 'required',
                'emergency_contact' => 'required|numeric|min:1',
                'relationship' => 'required',
                'skill' => 'required',
                'branch' => 'required',
                'membership' => 'required',
                'ever_attended' => 'required',
                'why_member' => 'required',
                'how_ymca' => 'required',
                'passport_picture' => 'required|image',
                'agreement'=> 'required',
            ];



            $this->validate($request, $rules);

            $data = new Membership();


            $data->email = $request->post('email');
            $data->name = $request->post('name');
            $data->date_of_birth = Carbon::parse($request->post('date_of_birth'))->format('d F Y');
            $data->gender = $request->post('gender');
            $data->contact = $request->post('contact');
            $data->occupation = $request->post('occupation');
            $data->hometown = $request->post('hometown');
            $data->address = $request->post('address');
            $data->emergency_contact = $request->post('emergency_contact');
            $data->relationship = $request->post('relationship');
            $data->skill = $request->post('skill');
            $data->branch = $request->post('branch');
            $data->membership = $request->post('membership');
            $data->ever_attended = $request->post('ever_attended');
            $data->why_member = $request->post('why_member');
            $data->how_ymca = $request->post('how_ymca');
            $data->agreement = $request->post('agreement');


            if (Input::hasFile('passport_picture')) {
                $file = Input::file('passport_picture');
                $file->move('img', $file->getClientOriginalName());
                $data->passport_picture = $file->getClientOriginalName();
                // dd($data);
            }



             $data->save();
            //  dd($data);



            return redirect()->back()->with('success', 'Your Request has successfully been sent ');
        }


    }

    // public function register(Request $request)
    // {
    //             //  dd($request->post('transc'));

    //     if ($request->method() == 'POST') {
    //         $rules = [
    //             'email' => 'required',
    //             'name' => 'required',
    //             'company' => 'required',
    //             'contact' => 'required|numeric|min:1',
    //             'prefered_title' => 'required',
    //             'transc' => 'required',
    //             'time' => 'required',
    //             'further_instruction' => 'required',
    //         //    'audio_file' => 'required|audio',
    //         ];



    //         $this->validate($request, $rules);

    //         $data = new Registration();


    //         $data->email = $request->post('email');
    //         $data->name = $request->post('name');
    //         $data->company = $request->post('company');
    //         $data->contact = $request->post('contact');
    //         $data->prefered_title = $request->post('prefered_title');
    //         $data->prefered_transc = $request->post('transc');
    //         $data->turnaround_time = $request->post('time');
    //         $data->further_instruction = $request->post('further_instruction');


    //         if (Input::hasFile('audio_file')) {
    //             $file = Input::file('audio_file');
    //             $file->move('img', $file->getClientOriginalName());
    //             $data->audio_file = $file->getClientOriginalName();
    //             // dd($data);
    //         }



    //          $data->save();
    //         //  dd($data);



    //         return redirect()->back()->with('success', 'Your Request has successfully been being sent ');
    //     }


    // }
    public function delete( $id)
    {
        $reg = Membership::find($id);

        // dd($reg);

        if ($reg->audio_file != null && Storage::disk('custom')->exists( $reg->audio_file)) {
            Storage::disk('custom')->delete( $reg->audio_file);
        }

        //delete image from db
        $reg->delete();


        return redirect()->back()->with('success', 'Your Record has been deleted successfully');
    }


}
