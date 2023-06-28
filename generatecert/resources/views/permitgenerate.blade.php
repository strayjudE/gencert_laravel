<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Indigency</title>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>
        #loading-container{
            position: absolute;
            display: flex;
            height: 100%;
            width: 100%;
            background-color: white;
            z-index: 9999;
        }
        #loading-screen{
            position: absolute;
            left: 48%;
            top: 48%;
            z-index: 9999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white fw-bold">Generate Permit</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner">
            <div class="row mt--2">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Barangay Business Permit</div>
                                <div class="card-tools">
                                    <button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
                                        <i class="fa fa-print"></i>
                                        Print Certificate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body m-5" id="printThis">
                            <div class="d-flex flex-wrap justify-content-center" style="border-bottom:1px solid red">
                                <div class="text-center">
                                    <h3 class="mb-0">Republic of the Philippines</h3>
                                    <h3 class="mb-0">Province of Pangasinan</h3>
                                    <h3 class="mb-0">San Carlos City</h3>
                                    <h1 class="fw-bold mb-0">Brgy. Turac</i></h2>
                                    <p><i>Mobile No. +639954091941</i></p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <div class="text-center p-3" style="border:2px dotted red">
                                        <img src="" alt="brgy.logo" class="img-fluid" width="200" />
                                            <h3 class="mt-3 fw-bold mb-0 text-uppercase">Sonny Cayabyab</h3>
                                            <h5 class="mb-2 text-uppercase">Brgy. Captain</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="text-center mt-5">
                                            <h1 class="mt-4 fw-bold"><u>OFFICE OF THE BARANGAY CAPTAIN</u></h1>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mt-4 fw-bold mb-5" style="font-size:38px;color:darkblue">BARANGAY BUSINESS CLEARANCE</h1>
                                        </div>
                                        <h2 class="mt-5 fw-bold">GRANTED TO:</h2>
                                        <div class="text-center pt-4">
                                            <h1 class="mt-4 fw-bold mb-0">Mang Inasal</h1>
                                            <hr class="w-50 mt-0 mb-0" style="border-top: 2px solid black;">
                                            <h2 class="mt-0">NAME OF BUSINESS OR ESTABLISHMENT</h2>
                                        </div>
                                        <div class="text-center pt-4 mb-5">
                                            <h1 class="mt-4 fw-bold mb-0">Owner Name</h1>
                                            <hr class="w-50 mt-0 mb-0" style="border-top: 2px solid black;">
                                            <h2 class="mt-0">NAME OF BUSINESS OR ESTABLISHMENT</h2>
                                        </div>
                                        <h2 class="mt-5" style="text-indent: 40px;">This clearance is granted in accordance with section 152 of R.A. 7160 of Barangay Tax Ordinance, provided however, that the necessary fees are paid to the Barangay Treasurer.</h2>
                                        <h2 class="mt-3" style="text-indent: 40px;">This is non-transferable and shall be deemed null and void upon failure by the owner to follow the said rules and regulations set forth by the Local Government Unit of <span style="font-size:22px">San Carlos City.</h2>
                                        <h2 class="mt-5">Given this <span class="fw-bold" style="font-size:20px">06/28/2023</span> at <span style="font-size:20px">Brgy. Turac, San Carlos City</span>.</h2>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="p-3 text-right mr-5" style="margin-top:120px">
                                            <h1 class="fw-bold mb-0 text-uppercase">Sonny Cayabyab</h1>
                                            <p class="mr-5">PUNONG BARANGAY</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <h4 class="mb-0"><i>CTC No.</i>:_____________</h4>
                                        <h4 class="mb-0"><i>Issued On.</i>:_____________</h4>
                                        <h4 class="mb-0"><i>Isuued at.</i>: Brgy. Turac, San Carlos City</h4>
                                        <h4 class="mb-0"><i>OR No.</i>:_____________</h4>
                                    </div>
                                    <p class="ml-3"><i>(This permit, while in force, shall be posted in a conspicious place in the business premises.)</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>
</html>