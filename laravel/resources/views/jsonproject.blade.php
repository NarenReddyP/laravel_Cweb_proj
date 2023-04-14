<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendors Min CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/vendors.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/json_assets/css/responsive.css">

    <title>Olaf - Admin Dashboard Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <!-- Start Sidemenu Area -->
    <div class="">
        <div class="sidemenu-header">
            <a href="dashboard-analytics.html" class="navbar-brand  align-items-center">
                <img src="assets/json_assets/img/small-logo.png" alt="image">
                <span>Olaf</span>
            </a>

            <!-- <div class="burger-menu d-none d-lg-block">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div> -->

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


        <!-- Breadcrumb Area -->
        <div class="breadcrumb-area">
            <h1>Dashboard</h1>

            <ol class="breadcrumb">
                <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

                <li class="item">Dashboard</li>

                <li class="item">Pricing</li>
            </ol>
        </div>
        <!-- End Breadcrumb Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area ptb-100">               
            <div class="row">                                
                <div class="col-lg-6 col-md-6">              
                    <div class="single-pricing-box slider">  
                        <div class="tab">                    

                           


                            <button class="tablinks" onclick="openCity(event, 'Request Details')">Request Details</button>
                            <button class="tablinks" onclick="openCity(event, 'Applicant Details')">Applicant Details</button>
                            <button class="tablinks" onclick="openCity(event, 'Informant Details')">Informant Details</button>
                            <button class="tablinks" onclick="openCity(event, 'GHMC Certificate Details')">GHMC Certificate Details</button>
                            <button class="tablinks" onclick="openCity(event, 'Document List')">Document List</button>

                        </div> 


                        <div id="Request Details" class="tabcontent">
                            <form class="row overflow">
                                <div class="form-group col-6">
                                    <label class="">Request Type<span class="span">*</span>:</label>
                                    <input type="text" name="ddlRequestType" id="ddlRequestType"
                                        class="form-control copy-input ">

                                </div>
                                <div class="form-group col-6">
                                    <label>Acknowledgement No<span class="span">*</span>:</label>
                                    <input type="text" name="txtAckNo" id="txtAckNo" class="form-control copy-input">
                                </div>

                            </form>
                        </div>


                        

                        <div id="Applicant Details" class="tabcontent">
                            <form class="row">
                                <div class="form-group col-6">
                                    <label>Old Application Number:</label>
                                    <input name="txtApplicationNumber" id="txtApplicationNumber" type="text"
                                        class="form-control copy-input">

                                </div>
                                <div class="form-group col-6">
                                    <label>Registration Number:</label>
                                    <input name="txtRegNo" id="txtRegNo" type="text" class="form-control ">
                                </div>
                                <div class="form-group col-6">
                                    <label>Actual Child Name:</label>
                                    <input type="text" name="txtActualName" id="txtActualName"
                                        class="form-control copy-input ">
                                </div>
                                <div class="form-group col-6">
                                    <label>Changed Child Name<span class="span">*</span>:</label>
                                    <input type="text" name="txtChangedName" id="txtChangedName"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Father Name:</label>
                                    <input type="text" name="txtActualFatherName" id="txtActualFatherName"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Mother Name:</label>
                                    <input type="text" name="txtActualMotherName" id="txtActualMotherName"
                                        class="form-control copy-input ">
                                </div>

                                <div class="form-group col-6">
                                    <label>Gender:</label>
                                    <input type="text" name="txtGender" id="txtGender" class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Date Of Birth:</label>
                                    <input type="text" name="txtActualDate" id="txtActualDate"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Circle:</label>
                                    <input type="text" name="txtActualCircle" id="txtActualCircle"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Ward:</label>
                                    <input type="text" name="txtWard" id="txtWard" class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Locality:</label>
                                    <input type="text" name="txtLocality" id="txtLocality"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Place Of Birth:</label>
                                    <input type="text" name="txtActualPlace" id="txtActualPlace"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Address at Time of Birth:</label>
                                    <input type="text" name="txtActualAppAddress" id="txtActualAppAddress"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Permanent Address:</label>
                                    <input type="text" name="txtPermAddress" id="txtPermAddress"
                                        class="form-control copy-input">
                                </div>

                                <div class="form-group col-6">
                                    <label>Remarks:</label>
                                    <input type="text" name="txtRemarks" id="txtRemarks"
                                        class="form-control copy-input">
                                </div>
                        </div>
                        </form>


                        <div id="Informant Details" class="tabcontent">
                            <form class="row">
                                <div class="form-group col-6">
                                    <label>Informant Name<span class="span">*</span>:</label>
                                    <input type="text" name="txtInfName" id="txtInfName"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Relationship<span class="span">*</span>:</label>
                                    <select name="ddlRelation" id="ddlRelation" class="form-control copy-select">
                                        <option selected="selected" value="Select">Select</option>
                                        <option value="07">C/O</option>
                                        <option value="02">D/O</option>
                                        <option value="06">F/O</option>
                                        <option value="04">H/O</option>
                                        <option value="05">M/O</option>
                                        <option value="01">S/O</option>
                                        <option value="03">W/O</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Ration Card No:</label>
                                    <input type="text" name="txtRationCard" id="txtRationCard"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Aadhaar No:</label>
                                    <input type="text" name="txtAadharNo" id="txtAadharNo"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Address<span class="span">*</span>: (Characters Remaining )</label>
                                    <input type="text" name="txtInfAddress" id="txtInfAddress"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Pincode<span class="span">*</span>:</label>
                                    <input type="text" name="txtInfPinCode" id="txtInfPinCode"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Mobile No<span class="span">*</span>:</label>
                                    <input type="number" name="txtPosMobile" id="txtPosMobile"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Email ID:</label>
                                    <input type="email" name="txtPosEmail" id="txtPosEmail"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Phone No<span class="span">*</span>:</label>
                                    <input type="number" name="txtInfPhoneNo" id="txtInfPhoneNo"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>Delivery Type<span class="span">*</span>:</label>
                                    <select type="text" name="ddlDelivery" id="ddlDelivery"
                                        class="form-control copy-select">
                                        <option selected="selected" value="Select">Select</option>
                                        <option value="01">Manual</option>
                                        <option value="02">Postal</option>
                                    </select>
                                </div>


                            </form>

                        </div>
                        <div id="GHMC Certificate Details" class="tabcontent">
                            <form class="row">
                                <div class="form-group col-6">
                                    <label>Purpose of Certificate<span class="span">*</span>:</label>
                                    <input type="text" name="txtPurpose" id="txtPurpose"
                                        class="form-control copy-input">
                                </div>
                                <div class="form-group col-6">
                                    <label>No of Copies<span class="span">*</span>:</label>
                                    <input type="text" name="txtNoofCopies1" id="txtNoofCopies1"
                                        class="form-control copy-input">
                                </div>
                            </form>
                        </div>
                        <div id="Document List" class="tabcontent">
                            <form class="row">
                                <div class="form-group col-12">
                                    <div >
                                        <input type="checkbox" class="copy-check" id="click" onclick="getinputbox()" >
                                        <span >Application (Duly signed by both parents if Child is less than 3
                                            Years)<span class="span">*</span>:</span><br>
                                    </div>
                                    <div id="application" style="display:none">

                                        <span>File Browse:</span>
                                        <input type="file" name="filePhysicalDocument" id="filePhysicalDocument"
                                            class="form-control file copy-file">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <input type="checkbox" class="copy-check" id="click1" onclick="getinputbox1()" >
                                    <span>Birth Certificate<span class="span">*</span>:</span><br>
                                    <div id="birth" style="display:none">
                                        <span >File Browse:</span>
                                        <input type="file" name="fileAffidavit" id="fileAffidavit" 
                                            class="form-control file copy-file">
                                    </div>
                                   
                                </div>
                                <div class="form-group col-12">
                                    <input type="checkbox" class="copy-check" id="click2" onclick="getinputbox2()">
                                    <span>Residence Proof<span class="span">*</span>:</span><br>
                                  <div id="proof" style="display: none;">
                                    <span>File Browse:</span>
                                    <input type="file" name="fileResidenceProof" id="fileResidenceProof"
                                        class="form-control file copy-file">
                                  </div>
                                </div>
                                <div class="form-group col-12">
                                    <input type="checkbox" class="copy-check" id="click3" onclick="getinputbox3()">
                                    <span>Notary Affidavit on Rs.10/- Non-Judicial Stamped paper<span
                                            class="span">*</span>:</span><br>
                                   <div id="notary" style="display: none;">
                                    <span>File Browse:</span>
                                    <input type="file" name="fileNotaryAffidavit" id="fileNotaryAffidavit"
                                        class="form-control file copy-file">
                                   </div>
                                </div>
                                    <div style="text-align: end;margin: 15px; padding-top: 10px; border-radius: 5px;"><button class="btn-primary"
                                    style="border-radius: 6px;">Save</button></div>
                            </form>
                        </div>
                            

                    </div>




                </div>




                <div class="col-lg-6 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-pricing-box slider">
                        <form class="">
                            <div class="row form-group">
                                <label class="col-6">CIRCLE/LOCALITY :</label>
                                <div class="col-6" id="txtLocality">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">1. Date Of Birth :</label>
                                <div class="col-6" id="txtActualDatee">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">2. Sex :</label>
                                <div class="col-6" id="txtGender">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">3. Child Name :</label>
                                <div class="col-6" id="txtActualName">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12"><b>a)</b>If Registered Mention the Child Name</label>
                                <label class="col-12"><b>b)</b>If Child Name not included a separate form to be filled
                                    by Father and Mother of the child</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">4. Name of the Father :</label>
                                <div class="col-6" id="txtActualName">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">5. Name of the Mother :</label>
                                <div class="col-6" id="txtActualMotherName">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">6. Place of Birth :</label>
                                <div class="col-6" id="txtActualPlace">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">(Tick the appropriate entry <b>a,b,c</b> below and give the name
                                    of the Hospital/Institute or the Address of the House where the <b>Birth</b> took
                                    place. If other place give location)</label>

                            </div>
                            <div class="form-group row">
                                <label class="col-6">a) Hospital/Instituion Name :</label>
                                <div class="col-6" id="txtActualPlace">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">b) House Address :</label>
                                <div class="col-6" id="txtActualAppAddress">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-6">c) Other place :</label>
                                <div class="col-6" id="txtInfAddress">

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

                        </form>

                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- End Pricing Area -->

    <div class="flex-grow-1"></div>

    <!-- Start Footer End -->
    <footer class="footer-area">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <p>Copyright <i class='bx bx-copyright'></i> 2020 <a href="#">Olaf</a>. All rights reserved</p>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 text-right">
                <p>Designed by ❤️ <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
            </div>
        </div>
    </footer>
    <!-- End Footer End -->

    </div>
    <!-- End Main Content Wrapper Area -->


    <!-- Vendors Min JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- ApexCharts JS -->
    <script src="assets/json_assets/js/apexcharts/apexcharts.min.js"></script>
    <script src="assets/json_assets/js/apexcharts/apexcharts-stock-prices.js"></script>
    <script src="assets/json_assets/js/apexcharts/apexcharts-irregular-data-series.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-line-chart.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-pie-donut-chart.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-area-charts.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-column-chart.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-bar-charts.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-mixed-charts.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-radialbar-charts.js"></script>
    <script src="assets/json_assets/js/apexcharts/apex-custom-radar-chart.js"></script>

    <!-- ChartJS -->
    <script src="assets/js/chartjs/chartjs.min.js"></script>
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

    <!-- jvectormap Min JS -->
    <script src="assets/json_assets/js/jvectormap-1.2.2.min.js"></script>
    <!-- jvectormap World Mil JS -->
    <script src="assets/json_assets/js/jvectormap-world-mill-en.js"></script>
    <!-- Custom JS -->
    <script src="assets/json_assets/js/custom.js"></script>
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
        function getinputbox() {

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

            var checkBox = document.getElementById("click2");
            var text = document.getElementById("proof");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>   <script>
        function getinputbox3() {

            var checkBox = document.getElementById("click3");
            var text = document.getElementById("notary");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

        }
    </script>
</body>

</html>