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
                        <h2 class="text-white fw-bold">Generate Certificate</h2>
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
                                <div class="card-title">Certificate of Indigency</div>
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
                                <div class="col-md-9">
                                    <div class="text-center">
                                        <h2 class="mt-4 fw-bold">OFFICE OF THE BARANGAY CAPTAIN</h2>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mt-4 fw-bold mb-5">Certificate of Indigency</h1>
                                    </div>
                                    <h2 class="mt-5">TO WHOM IT MAY CONCERN:</h2>
                                    <h2 class="mt-3" style="text-indent: 40px;">This is to certify that <span class="fw-bold" style="font-size:25px">Jessica Soho</span>, 
                                    of legal age, <span class="fw-bold" style="font-size:25px">Female</span>, <span class="fw-bold" style="font-size:25px">Single</span>,
                                    and Filipino is a resident of <span class="fw-bold" style="font-size:25px">Brgy. Turac</span> and that he/she is one of indigents in our barangay.</h2>
                                    <h2 class="mt-3" style="text-indent: 40px;">This certification/clearance is hereby issued to the above-named person for whatever legal purpose it may serve him/her best.</h2>
                                    <h2 class="mt-5">Given this <span class="fw-bold" style="font-size:25px">06/28/2023</span> at the office of the Punong Barangay, <span class="fw-bold" style="font-size:25px">Brgy. Turac</span>
                                    this Municipality, Philippines.</h2>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-3 text-right mr-3">
                                        <h2 class="fw-bold mb-0 text-uppercase">Sonny Cayabyab</h2>
                                        <p class="mr-3">PUNONG BARANGAY</p>
                                    </div>
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