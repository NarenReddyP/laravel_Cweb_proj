<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\UserModel;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use File;


class JsonController extends Controller
{

public function jsonregisterform()
{
  return view('jsonregisterform');
}

public function jsonloginuserform()
{
  return view('jsonloginform');
}


public function jsonuserregister(Request $request){

   $validator = Validator::make($request->all(), [
   'Username' => 'required|min:4|max:12|unique:jsonuser_login_tbl',
   'email' => 'required|unique:user_login_tbl|email',
  //  'mobile'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:user_login_tbl',
   'password' => 'min:6|required_with:Cpassword|same:Cpassword',
   'Cpassword' => 'min:6',
   'Gender' => 'required'
   ]);
  
    if ($validator->fails()) {
    return redirect('/jsonregisterform')
               ->withErrors($validator)
               ->withInput();
    }
 
    $jsonparameters = array(

    'username'=>$request->input('Username'),
    'email'=>$request->input('email'),
    'email_verified_at'=>now(),
    'is_verified'=>'1',
    // 'mobile'=>$request->input('mobile'),
    'password'=>bcrypt($request->input('password')),
    'Cpassword'=>$request->input('Cpassword'),
    'remember_token'=>'',
    'created_at'=>now(),
    'updated_at'=>now(),
    'Gender'=>$request->input('Gender'),
    'Date'=>now()
    
    );

   $singupdata = UserModel::jsonregisterdata($jsonparameters);

   //return view('login');

    return back()->with('success', 'Amazing! Your Account has been Created Successfully.');

}

public function jsonuserlogin(Request $request){

  $validator = Validator::make($request->all(),[
  'jsonUsername' => 'required',
  'jsonpassword' => 'required'

   ]);

   if ($validator->fails()) {
   return redirect('/jsonloginform')
             ->withErrors($validator)
             ->withInput();
   }

    $data = array ( 
    'username'=>$request->input('jsonUsername'),
    'password'=>$request->input('jsonpassword')
    );
    
    if(Auth::attempt($data)){

      $user = Auth::user();
      // print_r($user);
      $userid = $user['id'];
      $usertype = $user['usertype'];
      // print_r($userid);
      // exit;
      Session::put('userid', $userid);
    
      Session::put('usertype', $usertype);
     
      Session::put('user', $request->input('jsonUsername'));
    // $request->session()->regenerate();
    // return Redirect::to('jsonview');
      return Redirect::to('jsonview');
  }

    else{

    return back()->with('Passwordd', 'Your entered wrong username or password!');

   }

   }

   public function jsonlogout(Request $request) {
 
    Session::flush();
    Auth::logout();

    return redirect('jsonloginform');
    }


    public function viewjson(Request $request){

      //  $json_data = DB::table('jsondataobj')->pluck('jsonobject');
      $sessiondata = Session::get('userid');

      if(!$sessiondata){
        return redirect()->to('jsonloginform');

       }
       else{


        $json_data = '{
            "form_title": "Child Name Inclusion in Birth Register",
            "form_name": "CDMA",
            "affidevit_content": "",
            "tabs": [
              {
                "button_name": "Request Details",
                "fields": [
                  {
                    "label": "Request Type",
                    "input_type": "text",
                    "id": "ddlRequestType",
                    "name": "ddlRequestType",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Acknowledgement No",
                    "input_type": "text",
                    "id": "txtAckNo",
                    "name": "txtAckNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Applicant Details",
                "fields": [
                  {
                    "label": "Old Application Number",
                    "input_type": "text",
                    "id": "txtApplicationNumber",
                    "name": "txtApplicationNumber",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Registration Number",
                    "input_type": "text",
                    "id": "txtRegNo",
                    "name": "txtRegNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Actual Child Name",
                    "input_type": "text",
                    "id": "txtActualName",
                    "name": "txtActualName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Changed Child Name",
                    "input_type": "text",
                    "id": "txtChangedName",
                    "name": "txtChangedName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Father Name:",
                    "input_type": "text",
                    "id": "txtActualFatherName",
                    "name": "txtActualFatherName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Mother Name:",
                    "input_type": "text",
                    "id": "txtActualMotherName",
                    "name": "txtActualMotherName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Gender:",
                    "input_type": "text",
                    "id": "txtGender",
                    "name": "txtGender",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Date Of Birth",
                    "input_type": "text",
                    "id": "txtActualDate",
                    "name": "txtActualDate",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Circle",
                    "input_type": "text",
                    "id": "txtActualCircle",
                    "name": "txtActualCircle",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Ward",
                    "input_type": "text",
                    "id": "txtWard",
                    "name": "txtWard",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Locality",
                    "input_type": "text",
                    "id": "txtLocality",
                    "name": "txtLocality",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Place Of Birth",
                    "input_type": "text",
                    "id": "txtActualPlace",
                    "name": "txtActualPlace",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Address at Time of Birth",
                    "input_type": "text",
                    "id": "txtActualAppAddress",
                    "name": "txtActualAppAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Permanent Address",
                    "input_type": "text",
                    "id": "txtPermAddress",
                    "name": "txtPermAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Remarks",
                    "input_type": "text",
                    "id": "txtRemarks",
                    "name": "txtRemarks",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Informant Details",
                "fields": [
                  {
                    "label": "Informant Name",
                    "input_type": "text",
                    "id": "txtInfName",
                    "name": "txtInfName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Relationship",
                    "input_type": "select",
                    "id": "ddlRelation",
                    "name": "ddlRelation",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": [
                      {
                        "label": "C/O",
                        "value": "C/O"
                      },
                      {
                        "label": "D/O",
                        "value": "D/O"
                      },
                      {
                        "label": "F/O",
                        "value": "F/O"
                      },
                      {
                        "label": "H/O",
                        "value": "H/O"
                      },
                      {
                        "label": "M/O",
                        "value": "M/O"
                      },
                      {
                        "label": "S/O",
                        "value": "S/O"
                      },
                      {
                        "label": "W/O",
                        "value": "W/O"
                      }
                    ]
                  },
                  {
                    "label": "Ration Card No",
                    "input_type": "text",
                    "id": "txtRationCard",
                    "name": "txtRationCard",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Aadhaar No",
                    "input_type": "text",
                    "id": "txtAadharNo",
                    "name": "txtAadharNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Address",
                    "input_type": "text",
                    "id": "txtInfAddress",
                    "name": "txtInfAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Pincode",
                    "input_type": "text",
                    "id": "txtInfPinCode",
                    "name": "txtInfPinCode",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Mobile No",
                    "input_type": "tel",
                    "id": "txtPosMobile",
                    "name": "txtPosMobile",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Email ID",
                    "input_type": "Email",
                    "id": "txtPosEmail",
                    "name": "txtPosEmail",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Phone No",
                    "input_type": "Email",
                    "id": "txtInfPhoneNo",
                    "name": "txtInfPhoneNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Delivery Type",
                    "input_type": "select",
                    "id": "ddlDelivery",
                    "name": "ddlDelivery",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": [
                      {
                        "label": "Manual",
                        "value": "Manual"
                      },
                      {
                        "label": "Postal",
                        "value": "Postal"
                      }
                    ]
                  }
                ]
              },
              {
                "button_name": "GHMC Certificate Details",
                "fields": [
                  {
                    "label": "Purpose of Certificate",
                    "input_type": "text",
                    "id": "txtPurpose",
                    "name": "txtPurpose",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "txtPurpose",
                    "input_type": "text",
                    "id": "txtAckNo",
                    "name": "txtAckNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Document List",
                "fields": [
                  {
                    "label": "Application (Duly signed by both parents if Child is less than 3 Years)",
                    "input_type": "checkbox",
                    "id": "click",
                    "name": "click",
                    "action": "onclick=getinputbox0()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "filePhysicalDocument",
                      "file_name": "filePhysicalDocument",
                      "div_id": "application",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                    
                  },
                  {
                    "label": "Birth Certificate",
                    "input_type": "checkbox",
                    "id": "click1",
                    "name": "click1",
                    "action": "onclick=getinputbox1()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "fileAffidavit",
                      "file_name": "fileAffidavit",
                      "div_id": "birth",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  },
                  {
                    "label": "Residence Proof",
                    "input_type": "checkbox",
                    "id": "click2",
                    "name": "click2",
                    "action": "onclick=getinputbox2()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "fileResidenceProof",
                      "file_name": "fileResidenceProof",
                      "div_id": "proof",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  },
                  {
                    "label": "Notary Affidavit on Rs.10/- Non-Judicial Stamped paper",
                    "input_type": "checkbox",
                    "id": "click3",
                    "name": "click3",
                    "action": "onclick=getinputbox3()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name": {
                      "input_type": "file",
                      "file_id": "fileNotaryAffidavit",
                      "file_name": "fileNotaryAffidavit",
                      "div_id": "notary",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  }
                ]
              }
            ]
          }';
       
          $post_data = $request->all($json_data);
        
          $data['json_data'] = json_decode($json_data, true);
       
           $data['value'] = $post_data;

           $json_dataa = json_encode($data);

          $json_array = json_decode($json_data, true);
        
                foreach($post_data as $pkey=>$pvalue){
            
                foreach($json_array['tabs'] as $tabkey => $tab){
              

                foreach($tab['fields'] as $fieldkey => $field ){
                  
                 
                if($field['name'] == $pkey){

                         }
                       
                        }
               
               }
              // dd($pkey);
          }
          
          
          

        // Session::get('userid');

        return view('jsonview',$data);
           }
    }

  
    public function jsonpostdb(Request $request){

          $post_data = $request->all();

          
          $json_data = '{
            "form_title": "Child Name Inclusion in Birth Register",
            "form_name": "CDMA",
            "affidevit_content": "",
            "tabs": [
              {
                "button_name": "Request Details",
                "fields": [
                  {
                    "label": "Request Type",
                    "input_type": "text",
                    "id": "ddlRequestType",
                    "name": "ddlRequestType",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Acknowledgement No",
                    "input_type": "text",
                    "id": "txtAckNo",
                    "name": "txtAckNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Applicant Details",
                "fields": [
                  {
                    "label": "Old Application Number",
                    "input_type": "text",
                    "id": "txtApplicationNumber",
                    "name": "txtApplicationNumber",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Registration Number",
                    "input_type": "text",
                    "id": "txtRegNo",
                    "name": "txtRegNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Actual Child Name",
                    "input_type": "text",
                    "id": "txtActualName",
                    "name": "txtActualName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Changed Child Name",
                    "input_type": "text",
                    "id": "txtChangedName",
                    "name": "txtChangedName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Father Name:",
                    "input_type": "text",
                    "id": "txtActualFatherName",
                    "name": "txtActualFatherName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Mother Name:",
                    "input_type": "text",
                    "id": "txtActualMotherName",
                    "name": "txtActualMotherName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Gender:",
                    "input_type": "text",
                    "id": "txtGender",
                    "name": "txtGender",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Date Of Birth",
                    "input_type": "text",
                    "id": "txtActualDate",
                    "name": "txtActualDate",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Circle",
                    "input_type": "text",
                    "id": "txtActualCircle",
                    "name": "txtActualCircle",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Ward",
                    "input_type": "text",
                    "id": "txtWard",
                    "name": "txtWard",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Locality",
                    "input_type": "text",
                    "id": "txtLocality",
                    "name": "txtLocality",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Place Of Birth",
                    "input_type": "text",
                    "id": "txtActualPlace",
                    "name": "txtActualPlace",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Address at Time of Birth",
                    "input_type": "text",
                    "id": "txtActualAppAddress",
                    "name": "txtActualAppAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Permanent Address",
                    "input_type": "text",
                    "id": "txtPermAddress",
                    "name": "txtPermAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Remarks",
                    "input_type": "text",
                    "id": "txtRemarks",
                    "name": "txtRemarks",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Informant Details",
                "fields": [
                  {
                    "label": "Informant Name",
                    "input_type": "text",
                    "id": "txtInfName",
                    "name": "txtInfName",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Relationship",
                    "input_type": "select",
                    "id": "ddlRelation",
                    "name": "ddlRelation",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": [
                      {
                        "label": "C/O",
                        "value": "C/O"
                      },
                      {
                        "label": "D/O",
                        "value": "D/O"
                      },
                      {
                        "label": "F/O",
                        "value": "F/O"
                      },
                      {
                        "label": "H/O",
                        "value": "H/O"
                      },
                      {
                        "label": "M/O",
                        "value": "M/O"
                      },
                      {
                        "label": "S/O",
                        "value": "S/O"
                      },
                      {
                        "label": "W/O",
                        "value": "W/O"
                      }
                    ]
                  },
                  {
                    "label": "Ration Card No",
                    "input_type": "text",
                    "id": "txtRationCard",
                    "name": "txtRationCard",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Aadhaar No",
                    "input_type": "text",
                    "id": "txtAadharNo",
                    "name": "txtAadharNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Address",
                    "input_type": "text",
                    "id": "txtInfAddress",
                    "name": "txtInfAddress",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Pincode",
                    "input_type": "text",
                    "id": "txtInfPinCode",
                    "name": "txtInfPinCode",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Mobile No",
                    "input_type": "tel",
                    "id": "txtPosMobile",
                    "name": "txtPosMobile",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Email ID",
                    "input_type": "Email",
                    "id": "txtPosEmail",
                    "name": "txtPosEmail",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Phone No",
                    "input_type": "Email",
                    "id": "txtInfPhoneNo",
                    "name": "txtInfPhoneNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "Delivery Type",
                    "input_type": "select",
                    "id": "ddlDelivery",
                    "name": "ddlDelivery",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": [
                      {
                        "label": "Manual",
                        "value": "Manual"
                      },
                      {
                        "label": "Postal",
                        "value": "Postal"
                      }
                    ]
                  }
                ]
              },
              {
                "button_name": "GHMC Certificate Details",
                "fields": [
                  {
                    "label": "Purpose of Certificate",
                    "input_type": "text",
                    "id": "txtPurpose",
                    "name": "txtPurpose",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  },
                  {
                    "label": "txtPurpose",
                    "input_type": "text",
                    "id": "txtAckNo",
                    "name": "txtAckNo",
                    "action": "",
                    "value": "",
                    "required": "false",
                    "options": []
                  }
                ]
              },
              {
                "button_name": "Document List",
                "fields": [
                  {
                    "label": "Application (Duly signed by both parents if Child is less than 3 Years)",
                    "input_type": "checkbox",
                    "id": "click",
                    "name": "click",
                    "action": "onclick=getinputbox0()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "filePhysicalDocument",
                      "file_name": "filePhysicalDocument",
                      "div_id": "application",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                    
                  },
                  {
                    "label": "Birth Certificate",
                    "input_type": "checkbox",
                    "id": "click1",
                    "name": "click1",
                    "action": "onclick=getinputbox1()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "fileAffidavit",
                      "file_name": "fileAffidavit",
                      "div_id": "birth",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  },
                  {
                    "label": "Residence Proof",
                    "input_type": "checkbox",
                    "id": "click2",
                    "name": "click2",
                    "action": "onclick=getinputbox2()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name":  {
                      "input_type": "file",
                      "file_id": "fileResidenceProof",
                      "file_name": "fileResidenceProof",
                      "div_id": "proof",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  },
                  {
                    "label": "Notary Affidavit on Rs.10/- Non-Judicial Stamped paper",
                    "input_type": "checkbox",
                    "id": "click3",
                    "name": "click3",
                    "action": "onclick=getinputbox3()",
                    "value": "",
                    "required": "false",
                    "options": [],
                    "filee_name": {
                      "input_type": "file",
                      "file_id": "fileNotaryAffidavit",
                      "file_name": "fileNotaryAffidavit",
                      "div_id": "notary",
                      "filevalue": "",
                      "browse_name": "File Browse:"
                    }
                  }
                ]
              }
            ]
          }';
               
                $json_array = json_decode($json_data, true);
           
                foreach($post_data as $pkey=>$pvalue)           {
              
                foreach($json_array['tabs'] as $tabkey => $tab) {

                foreach($tab['fields'] as $fieldkey => $field )  {                
                 
            if($field['name'] == $pkey){ 
                    
                    $json_array['tabs'][$tabkey]['fields'][$fieldkey]['value']=$pvalue; 
                 
            if(isset($json_array['tabs'][$tabkey]['fields'][$fieldkey]["filee_name"])){
                        $fileckname = $json_array['tabs'][$tabkey]['fields'][$fieldkey]["filee_name"]['file_name'];
            if($request->has($fileckname)){ 
                        $newFile = $request->file($fileckname);

            if($newFile){
                        $newfilename = time(). '_' . $newFile->getClientOriginalName(); 
                         
                        $path = $newFile->move('assets\\json_assets\\images\\', $newfilename);  

                            // dd($path);
                        $json_array['tabs'][$tabkey]['fields'][$fieldkey]["filee_name"]["filevalue"] = $newfilename; 
                        } 
                      }
                      else
                      {
                        $json_array['tabs'][$tabkey]['fields'][$fieldkey]["filee_name"]["filevalue"] = '';
                      }
                         } 
                 
                 } 
                 
                         }
               
                         }
                         }  
             
          $store_arry=json_encode($json_array);
           
          $jsondata = array('jsonarray'=>$store_arry,'u_id'=>Session::get('userid'));
          
          $dbjsondata=User::jsondatadb($jsondata);

          return redirect('jsonview')->with('success', 'Your data has been submitted successfully.');   
    }
   
         public function jsonprojectt(){
        
      
          return view('jsonproject');

    }

          //*****************************************  *//
        //        Display User JSON Data               //
      //******************************************** *//

      public function index()
{
    $usertype = Session::get('usertype');
  if ($usertype == 'admin') {
    $data = DB::table('jsondbdata')->get();
    return view('tabledataview', ['data' => $data]);
  }else{
    $data = DB::table('jsondbdata')->where('u_id', Session::get('userid'))->get();  

    return view('tabledataview', ['data' => $data]);
  }
}

      public function edit($id)
      {
        
      $data = DB::table('jsondbdata')->find($id);
      // dd($data);
      $json_data = json_decode($data->jsonarray, true);
    
      return view('jsonuser', compact('json_data', 'id'));
      }

      public function view($id)
      {
       
      $data = DB::table('jsondbdata')->find($id);
      // dd($data);
      $json_data = json_decode($data->jsonarray, true);
    
      return view('jsonuserview', compact('json_data', 'id'));
      }


      public function update(Request $request) 
      {
      $id = $request->input('id'); 
      // $data = DB::table('jsondbdata')->find($id);
      $data = DB::table('jsondbdata')->where('id',$id)->first();
      $json_obj =$data->jsonarray;
    
      $post_data = $request->all();
      
      $json_data = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json_obj), true );
     
         foreach($post_data as $pkey=>$pvalue)            {
       
         foreach($json_data['tabs'] as $tabkey => $tab)   {
         
         foreach($tab['fields'] as $fieldkey => $field )  {                
           
             
         if($field['name'] == $pkey){ 
            //  echo $field['name']."-----".$pvalue."<br/>";
         $json_data['tabs'][$tabkey]['fields'][$fieldkey]['value']=$pvalue; 
 
          } 
                  }
                  }
                  }  
                  
              $newData = json_encode($json_data);
              // dd($json_data);
              DB::enableQueryLog();
              DB::table('jsondbdata')->where('id', $id)->update(['jsonarray' => $newData]);
              // dd(DB::getQueryLog());
              return redirect('/jsonview')->with('success', 'Data updated successfully!');
      }

      public function destroy(Request $request)
      {
    
    $id = $request->input('id');
    $record = DB::table('jsondbdata')->find($id);

    if (!$record) {
        return response()->json(['message' => 'Record not found'], 404);
    }
    // Delete the record
    $deleted = DB::table('jsondbdata')->where('id', $id)->delete();
    // Return a response, if needed
    if($deleted){
      echo 1;
    //  return response()->json(['message' => 'User Record deleted successfully']); 
      
    }
    else {
       //return response()->json(['message' => 'Failed to delete user record'], 500);
       echo 0;
    }
    
      }
 
      public function viewjsonuser(Request $request){

        // $dataa = $request->all();
  
          $json_data = '{
              "form_title": "Child Name Inclusion in Birth Register",
              "form_name": "CDMA",
              "affidevit_content": "",
              "tabs": [
                {
                  "button_name": "Request Details",
                  "fields": [
                    {
                      "label": "Request Type",
                      "input_type": "text",
                      "id": "ddlRequestType",
                      "name": "ddlRequestType",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Acknowledgement No",
                      "input_type": "text",
                      "id": "txtAckNo",
                      "name": "txtAckNo",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    }
                  ]
                },
                {
                  "button_name": "Applicant Details",
                  "fields": [
                    {
                      "label": "Old Application Number",
                      "input_type": "text",
                      "id": "txtApplicationNumber",
                      "name": "txtApplicationNumber",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Registration Number",
                      "input_type": "text",
                      "id": "txtRegNo",
                      "name": "txtRegNo",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Actual Child Name",
                      "input_type": "text",
                      "id": "txtActualName",
                      "name": "txtActualName",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Changed Child Name",
                      "input_type": "text",
                      "id": "txtChangedName",
                      "name": "txtChangedName",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Father Name:",
                      "input_type": "text",
                      "id": "txtActualFatherName",
                      "name": "txtActualFatherName",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Mother Name:",
                      "input_type": "text",
                      "id": "txtActualMotherName",
                      "name": "txtActualMotherName",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Gender:",
                      "input_type": "text",
                      "id": "txtGender",
                      "name": "txtGender",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Date Of Birth",
                      "input_type": "text",
                      "id": "txtActualDate",
                      "name": "txtActualDate",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Circle",
                      "input_type": "text",
                      "id": "txtActualCircle",
                      "name": "txtActualCircle",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Ward",
                      "input_type": "text",
                      "id": "txtWard",
                      "name": "txtWard",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Locality",
                      "input_type": "text",
                      "id": "txtLocality",
                      "name": "txtLocality",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Place Of Birth",
                      "input_type": "text",
                      "id": "txtActualPlace",
                      "name": "txtActualPlace",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Address at Time of Birth",
                      "input_type": "text",
                      "id": "txtActualAppAddress",
                      "name": "txtActualAppAddress",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Permanent Address",
                      "input_type": "text",
                      "id": "txtPermAddress",
                      "name": "txtPermAddress",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Remarks",
                      "input_type": "text",
                      "id": "txtRemarks",
                      "name": "txtRemarks",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    }
                  ]
                },
                {
                  "button_name": "Informant Details",
                  "fields": [
                    {
                      "label": "Informant Name",
                      "input_type": "text",
                      "id": "txtInfName",
                      "name": "txtInfName",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Relationship",
                      "input_type": "select",
                      "id": "ddlRelation",
                      "name": "ddlRelation",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": [
                        {
                          "label": "C/O",
                          "value": "C/O"
                        },
                        {
                          "label": "D/O",
                          "value": "D/O"
                        },
                        {
                          "label": "F/O",
                          "value": "F/O"
                        },
                        {
                          "label": "H/O",
                          "value": "H/O"
                        },
                        {
                          "label": "M/O",
                          "value": "M/O"
                        },
                        {
                          "label": "S/O",
                          "value": "S/O"
                        },
                        {
                          "label": "W/O",
                          "value": "W/O"
                        }
                      ]
                    },
                    {
                      "label": "Ration Card No",
                      "input_type": "text",
                      "id": "txtRationCard",
                      "name": "txtRationCard",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Aadhaar No",
                      "input_type": "text",
                      "id": "txtAadharNo",
                      "name": "txtAadharNo",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Address",
                      "input_type": "text",
                      "id": "txtInfAddress",
                      "name": "txtInfAddress",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Pincode",
                      "input_type": "text",
                      "id": "txtInfPinCode",
                      "name": "txtInfPinCode",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Mobile No",
                      "input_type": "tel",
                      "id": "txtPosMobile",
                      "name": "txtPosMobile",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Email ID",
                      "input_type": "Email",
                      "id": "txtPosEmail",
                      "name": "txtPosEmail",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Phone No",
                      "input_type": "Email",
                      "id": "txtInfPhoneNo",
                      "name": "txtInfPhoneNo",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "Delivery Type",
                      "input_type": "select",
                      "id": "ddlDelivery",
                      "name": "ddlDelivery",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": [
                        {
                          "label": "Manual",
                          "value": "Manual"
                        },
                        {
                          "label": "Postal",
                          "value": "Postal"
                        }
                      ]
                    }
                  ]
                },
                {
                  "button_name": "GHMC Certificate Details",
                  "fields": [
                    {
                      "label": "Purpose of Certificate",
                      "input_type": "text",
                      "id": "txtPurpose",
                      "name": "txtPurpose",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    },
                    {
                      "label": "txtPurpose",
                      "input_type": "text",
                      "id": "txtAckNo",
                      "name": "txtAckNo",
                      "action": "",
                      "value": "",
                      "required": "false",
                      "options": []
                    }
                  ]
                },
                {
                  "button_name": "Document List",
                  "fields": [
                    {
                      "label": "Application (Duly signed by both parents if Child is less than 3 Years)",
                      "input_type": "checkbox",
                      "id": "click",
                      "name": "click",
                      "action": "onclick=getinputbox0()",
                      "value": "",
                      "required": "false",
                      "options": [],
                      "filee_name":  {
                        "input_type": "file",
                        "file_id": "filePhysicalDocument",
                        "file_name": "filePhysicalDocument",
                        "div_id": "application",
                        "filevalue": "",
                        "browse_name": "File Browse:"
                      }
                      
                    },
                    {
                      "label": "Birth Certificate",
                      "input_type": "checkbox",
                      "id": "click1",
                      "name": "click1",
                      "action": "onclick=getinputbox1()",
                      "value": "",
                      "required": "false",
                      "options": [],
                      "filee_name":  {
                        "input_type": "file",
                        "file_id": "fileAffidavit",
                        "file_name": "fileAffidavit",
                        "div_id": "birth",
                        "filevalue": "",
                        "browse_name": "File Browse:"
                      }
                    },
                    {
                      "label": "Residence Proof",
                      "input_type": "checkbox",
                      "id": "click2",
                      "name": "click2",
                      "action": "onclick=getinputbox2()",
                      "value": "",
                      "required": "false",
                      "options": [],
                      "filee_name":  {
                        "input_type": "file",
                        "file_id": "fileResidenceProof",
                        "file_name": "fileResidenceProof",
                        "div_id": "proof",
                        "filevalue": "",
                        "browse_name": "File Browse:"
                      }
                    },
                    {
                      "label": "Notary Affidavit on Rs.10/- Non-Judicial Stamped paper",
                      "input_type": "checkbox",
                      "id": "click3",
                      "name": "click3",
                      "action": "onclick=getinputbox3()",
                      "value": "",
                      "required": "false",
                      "options": [],
                      "filee_name": {
                        "input_type": "file",
                        "file_id": "fileNotaryAffidavit",
                        "file_name": "fileNotaryAffidavit",
                        "div_id": "notary",
                        "filevalue": "",
                        "browse_name": "File Browse:"
                      }
                    }
                  ]
                }
              ]
            }';
  
            $post_data = $request->all($json_data);
            // dd($post_data);
            $data['json_data'] = json_decode($json_data, true);
            //  dd($data);
  
             $data['value'] = $post_data;
  
             $json_dataa = json_encode($data);
  
            $json_array = json_decode($json_data, true);
            // dd($json_array);
                  foreach($post_data as $pkey=>$pvalue){
      
                  foreach($json_array['tabs'] as $tabkey => $tab){
              
                  foreach($tab['fields'] as $fieldkey => $field ){
       
                  if($field['name'] == $pkey){

                           }
        
                           }
                 
                           }
              
  
                       }
  
        
  
          return view('jsonuser',$data);
          return view('jsonuser',['jsonarray'=> $data]);
        //  dd($data);
      }


         //***************************************** ** */
        //     END   Display User JSON Data             /
      //******************************************** */

    public function fileindex()
    {
      return view('indexfile');

      // dd($data);
    }

    public function filecreate()
    {
      return view('creatfile');

      // dd($data);
    }

}
