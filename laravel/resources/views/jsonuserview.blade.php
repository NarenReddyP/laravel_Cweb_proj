<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vendors Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/json_assets/css/vendors.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/json_assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/json_assets/css/responsive.css') }}">

    <title>Olaf-Admin Dashboard Template</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/json_assets/img/favicon.png') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .btn:hover {
         color:#ffffff;
         font-weight: 900;
         box-shadow: 5px 5px 5px #ffffff;
         letter-spacing: 2px;
  
        }
       #infoid {
        border-color: #A84448;
        color: #A84448;
        /* padding-left:70%; */
        text-align: center;
        float: right;
        width: 120px;
        height: 35px;
        margin-right: 10px;
        }
       #infoid:hover {
        background: #A84448;
        color: #ffffff;
        font-weight:600;
        border-radius:10px;
       }
       #tabid button:hover{
            border: 1px solid #A84448;
        }
 

        </style>

</head>

<body>

    <!-- Start Sidemenu Area -->
    <div class="" style="padding:10px;">
        <div class="sidemenu-header" >
            <a href="{{ route('jsonview') }}" class="navbar-brand  align-items-center" >  <!--dashboard-analytics.html old href location-->
                <img src="{{ asset('assets/json_assets/img/logo.png') }}" alt="image">
                {{-- <span>Olaf</span> --}}
                
            </a>
            

            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>

    </div>
    <!-- End Sidemenu Area -->

    <!-- Start Main Content Wrapper Area -->
    <div class="main-content d-flex flex-column">

        

        <!-- Top Navbar Area -->
        @if ($message = Session::get('success'))
        <div style="color:green;" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <!-- Breadcrumb Area -->
        <div class="breadcrumb-area" style="background-color:#8DC26F;">
            <h1>Dashboard</h1>

            <ol class="breadcrumb">
                <li class="item"><a href="{{ route('jsonview') }}"><i class='bx bx-home-alt'></i></a></li>

                <li class="item">Dashboard</li>

                <li class="item">Pricing</li>
                
            </ol>
            <a href="{{ route('tabledataview') }}" style="text-align: end;text-decoration:none;padding-left:70%;font-weight:900;margin:10px 10px;color:#A84448;"><button type="submit" class="#" id="infoid">BACK</button></a>
            {{-- <a href="{{ route('jsonuser') }}" style="text-align: end;text-decoration:none;padding-left:70%;font-weight:900;margin:10px 10px;color:#A84448;"></a> --}}
            
        </div>
        <!-- End Breadcrumb Area -->
       
                     
@if(isset($json_data['tabs']))
        <!-- Start Pricing Area -->
        <section class="pricing-area ptb-100">
                <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="single-pricing-box slider">
                        
                <div class="tab" id="tabid">
                <h5 style="color:#A84448;font-weight:700;">Edit Your Data</h5>
                            @foreach ($json_data['tabs'] as $tab)
                            <button style="font-weight:800;" class="tablinks" onclick="openCity(event, '{{$tab['button_name']}}')">{{$tab['button_name']}}</button>
                            
                            @endforeach
                </div>

@php $id =  Request::segment(2);  @endphp


<form class="row overflow"  method="POST" action="#" style="border-radius:15px; background-color:#8DC26F;" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $id }}">  
@foreach ($json_data['tabs'] as $key=>$value)

                           
<div id="{{ $value['button_name'] }}" class="tabcontent col-12">

    {{-- <img id="imgbg" src="{{ asset('assets/json_assets/img/bg.JPG') }}" alt="image" > --}}

        {{-- @php $i=1; @endphp --}}
        @foreach($value['fields'] as $fld_key=>$fld_val)
        
        {{-- @php print_r($valll); @endphp --}}
<div class="form-group col-6">

<label class="">{{ $fld_val['label'] }}<span class="span">@if($fld_val['required'] == "true")*@endif</span>:</label>
        @if($fld_val['input_type'] == "text" ||  $fld_val['input_type'] == "radio" || $fld_val['input_type'] == "tel" || $fld_val['input_type'] == "Email")
        <input type="{{ $fld_val['input_type'] }}" name="{{ $fld_val['name'] }}" id="{{ $fld_val['id'] }}"  @if($fld_val['required'] == "true")required @endif  class="form-control copy-input" value="{{ $fld_val['value'] }}">
        
        
        @elseif ($fld_val['input_type'] == "checkbox")
        <div>
            <input type="{{ $fld_val['input_type'] }}" class="copy-check" name="{{ $fld_val['name'] }}" id="{{ $fld_val['id'] }}" {{ $fld_val['action'] }} value="{{ $fld_val['value'] }}"> 
            
        </div>
                @if(!empty($fld_val['filee_name']))
                <div class="form-group col-12">
                    
                <div id="{{ $fld_val['filee_name']['div_id'] }}" style="display:none">
                <span>{{ $fld_val['filee_name']['browse_name'] }}</span>
                <input type="{{ $fld_val['filee_name']['input_type'] }}" id="{{ $fld_val['filee_name']['file_id'] }}" name="{{ $fld_val['filee_name']['file_name'] }}" class="form-control file copy-file" value="{{ $fld_val['filee_name']['filevalue'] }}">
                </div>
                
                </div>
                 
                @endif
        @else
        <select name="{{ $fld_val['name'] }}" id="{{ $fld_val['id'] }}" class="form-control copy-select" value="{{ $fld_val['value'] }}">
        <option value="{{ $fld_val['value'] }}">---Select---</option>

        @foreach ($fld_val['options'] as $optionkey=>$optionval)
            <option value="{{ $optionval['value'] }}">{{ $optionval['label'] }}</option>
        @endforeach

        </select>
        
        @endif

            

</div>

       @endforeach 
        {{-- <div style="text-align: end;margin: 10px; padding-top: 10px; border-radius: 5px;">
            <button type="submit" class="btn" style="border-radius: 6px;background-color:#A84448;font-weight:700;text-transform:uppercase;">Update</button>
        </div> --}}
             
</div>

            
@endforeach

             
</form>  
       
@endif

        </div>
        </div>
    {{-- </div> --}}


        <div class="col-lg-6 col-md-6 offset-lg-0 offset-md-3" style="background-color:#8DC26F;">
        <div class="single-pricing-box slider"> 
                    <div class="row form-group">
                    <label class="col-6">CIRCLE/LOCALITY :</label>
                    <div class="col-6" id="txtLocality" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                    </div>
                <div class="form-group row">
                    <label class="col-6">1. Date Of Birth :</label>
                    <div class="col-6" id="txtActualDate" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">2. Sex :</label>
                    <div class="col-6" id="txtGender" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">3. Child Name :</label>
                    <div class="col-6" id="txtActualName" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12"><b>a)</b>If Registered Mention the Child Name</label>
                    <label class="col-12"><b>b)</b>If Child Name not included a separate form to be filled
                        by Father and Mother of the child</label>
                </div>
                <div class="form-group row">
                    <label class="col-6">4. Name of the Father :</label>
                    <div class="col-6" id="txtActualFatherName" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">5. Name of the Mother :</label>
                    <div class="col-6" id="txtActualMotherName" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">6. Place of Birth :</label>
                    <div class="col-6" id="txtActualPlace" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">(Tick the appropriate entry <b>a,b,c</b> below and give the name
                        of the Hospital/Institute or the Address of the House where the <b>Birth</b> took
                        place. If other place give location)</label>

                </div>
                <div class="form-group row">
                    <label class="col-6">a) Hospital/Instituion Name :</label>
                    <div class="col-6" id="txtActualPlace" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">b) House Address :</label>
                    <div class="col-6" id="txtActualAppAddress" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">c) Other place :</label>
                    <div class="col-6" id="txtInfAddress" style="font-weight:800;color:#A84448;text-transform: uppercase;">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">7. No. Of Copies Required :</label>
                    <div class="col-6" id="txtNoofCopies1">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">8. a) Do you want the Birth Certificate by Courier- Yes /
                        No</label>
                    <label class="col-12">b) If Yes give Name and Address with Pin Code</label>

                </div>
                <div class="form-group row" style="margin-top: 50px;">
                    <label class="col-3">Name & address,</label>
                    <div class="col-3">

                    </div>
                    <label class="col-6" style="text-align: end;">(Signature of the Applicant)</label>

                    <div class="col-6">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-6">Telephone No :</label>


                    <div class="col-6" id="txtPosMobile">

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">Note:- Birth certificate will be issued subject to entry found
                        Registered in <b>BIRTH RECORDSC&DMA/PANCHYATS.</b></label>

                </div>
                <div class="form-group row">
                    <label class="col-6">Documents Required :</label>



                </div>
                <div class="form-group row">
                    <label class="col-12">1. Application Form * <b>(NOT MANDATORY FOR CITIZEN
                            LOGIN</b></label>

                </div> 

          </div>
       </div>
    </div>
</div>
</section>
<!-- End Pricing Area -->

<div class="flex-grow-1"></div>

    <!-- Start Footer End -->
    <footer class="footer-area" style="background-color:#8DC26F;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <p style="padding-left:50px;">Copyright <i class='bx bx-copyright'></i> 2023 <a href="#">Olaf</a>. All rights reserved</p>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 text-right">
                <p style="padding-right:50px;">Designed by ❤️ <a href="http://www.inducosolutions.com/" target="_blank">Induco Solutions Pvt Ltd</a></p>
            </div>
        </div>
    </footer>
    <!-- End Footer End -->

    </div>
    <!-- End Main Content Wrapper Area -->


    <!-- Vendors Min JS -->
    <script src="{{ asset('assets/json_assets/js/vendors.min.js') }}"></script>
    
    {{-- <script src="assets/js/chartjs/chartjs.min.js"></script> --}}
    <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-light"></div>
        <div class="bg-secondary"></div>
        <div class="bg-info"></div>
        <div class="bg-success"></div>
        <div class="bg-success-light"></div>
        <div class="bg-danger"></div>
        <div class="bg-warning"></div>
        <div class="bg-purple"></div>
        <div class="bg-pink"></div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script type="text/Javascript">
        window.localStorage.setItem('signup_role', 'signatory');
        console.log(window.localStorage.getItem('signup_role'));
        $("input[name='gridRadios']").change(function() {
            window.localStorage.setItem('signup_role', $(this).val());
            console.log(window.localStorage.getItem('signup_role'));
        });
    </script>
    <script>
        function getinputbox0() {
            // alert('hello');
            //alert('0');
            var checkBox = document.getElementById("click");
            var text = document.getElementById("application");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>
    <script>
        function getinputbox1() {
            //alert('1');
            var checkBox = document.getElementById("click1");
            var text = document.getElementById("birth");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>
       <script>
        function getinputbox2() {
            //alert('2');
            var checkBox = document.getElementById("click2");
            var text = document.getElementById("proof");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>   
    <script>
        function getinputbox3() {
// alert('3');
            var checkBox = document.getElementById("click3");
            var text = document.getElementById("notary");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>

   <!--CIRCLE/LOCALITY SCRIPTS:  JQUERY-->

<script>
 $(".copy-input").keyup(function(){
 var element_id=$(this).attr("id");
 $(".slider").find("#"+element_id).html($(this).val());
});
 
$(document).ready(function () {
    $(".alert-success").delay(5000).fadeOut("slow");
});

</script>

</body>

</html>