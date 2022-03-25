<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apconregistration;
use Illuminate\Support\Facades\DB;

class ApconRegistrationController extends Controller
{
    public function index()
    {
        return 'done';
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'Surname'=> 'required|string|max:255',
        //     'Email' => 'required|email|unique:users',
        //     'First'=> 'required|string|max:255',
        //     'Middle'=> 'required|string|max:255',
        //     // 'ProfileImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        //     'Title'=>'required',
        //     'Organization'=>'required|string',
        //     'Location'=>'required|string',
        //     'City'=>'required|string',
        //     'State'=>'required|string',
        //     'ContactAddress'=>'required|string',
        //     'Phone'=>'required',
        //     'DOB'=> 'required',
        //     'PlaceofBirth'=>'required',
        //     'NextofKinName'=> 'required|string|max:255',
        //     'NextofKinAddress'=> 'required|string',
        //     // 'signature_image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg',


        // ]);
        // if ($request->hasFile('ProfileImage')) {
        //     $destinationPath = 'public/images';
        //     $files = $request->file('ProfileImage'); // will get all files

        //     foreach ($files as $file) {//this statement will loop through all files.
        //         $file_name = $file->getClientOriginalName(); //Get file original name
        //         $file->move($destinationPath , $file_name); // move files to destination folder
        //     }
        // }

        // if ($request->file('ProfileImage') == null) {
        //     $path = "";
        // }else{
        //    $path = $request->file('ProfileImage')->store('public/images');
        // }
        Apconregistration::Create([
            'ApconCategory' => $request->Apconreg,
            'Title' => $request->Title,
            'Surname' => $request->Surname,
            'First' => $request->First,
            'Middle' => $request->Middle,
            'Gender' => $request->gender,
            'Email' => $request->Email,
            'ContactAddress' => $request->ContactAddress,
            'Phone' => $request->Phone,
            'DOB' => $request->DOB,
            'PlaceofBirth' => $request->PlaceofBirth,
            'NextofKinName' => $request->NextofKinName,
            'NextofKinAddress' => $request->NextofKinAddress,
// 'Profilepicture'=>$path,
            // 'signature_date'=>$request->signature_date,
            // // 'ProfileImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'City'=>$request->City,
           'State'=>$request->State,
            'Country'=>$request->Country,
            'Organization_Name'=> $request->OrganizationName,
            'Organization_Location'=> $request->OrganizationLocation,


            // // 'signature_image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg',


        ]);
foreach($request->Institution as $ins){
$d=($ins);
}
$data=[
'Institution'=>$request->Institution,
'Certificate'=>$request->certificate,
'GraduationYear'=> $request->Year,
];
        DB::table('regqualifications')
        ->Insert($data);

        return response()->json([
            'status' => 200,
            'message' => 'Student Added Successfully',
'output'=>$d,
        ]);
    }
}
