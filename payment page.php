<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Payment page</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
         ::-webkit-scrollbar {
            width: 8px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background: #888;
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        body {
            background: #f5f5f5
        }
        
        .rounded {
            border-radius: 1rem
        }
        
        .nav-pills .nav-link {
            color: #555
        }
        
        .nav-pills .nav-link.active {
            color: white
        }
        
        input[type="radio"] {
            margin-right: 5px
        }
        
        .bold {
            font-weight: bold
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="container py-5">
        <!-- For demo purpose -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6">Payment For The Book</h1>
            </div>
        </div>
    
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">                                
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Pay Through  UPI </a>
                                </li>               
                            </ul>
                        </div>
                      
                        <!-- Paypal info -->
                            <div id="paypal" class="tab-pane fade pt-3">
                                <h6 class="pb-2">Select your paypal account type</h6>
                                <form onchange="myFunction()" name="frmRadio" id="radio-buttons">
                                    <div class="form-group ">
                                        <label class="radio-inline"> <input type="radio" id="googlepay" name="optradio"
                                            name="option"
                                            onclick="document.getElementById('radio-buttons').action=''; "> Google
                                        Pay</label>
                                        <label class="radio-inline"> <input type="radio" id="paytm" name="optradio"
                                            onclick="document.getElementById('radio-buttons').action=''; "
                                            class="ml-5">Paytm</label>
                                        <label class="radio-inline"> <input type="radio" name="optradio" id="phonepe"
                                            class="ml-5"
                                            onclick="document.getElementById('radio-buttons').action=''; ">Phonepe</label>
                                    </div>
                                    <div id="button"></div>
                                    <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                            </div>
                            </form>
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
            <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                  <script type='text/javascript'>
                $(function() {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            </script>
            <script>
                function myFunction() {
                    if (document.getElementById("googlepay").checked) {
                        document.getElementById("button").innerHTML = "<p> <a href='https://pay.google.com/gp/w/u/0/home/signup?sctid=8298021898220379'><button type='button' class='btn btn-primary'><i class='fab fa-paypal mr-2'></i>Proceed </button></a> </p>";
                    }
                    if (document.getElementById("paytm").checked) {
                        document.getElementById("button").innerHTML = "<p> <a href='https://paytm.com/'><button type='button' class='btn btn-primary'><i class='fab fa-paypal mr-2'></i>Proceed </button></a> </p>";
                    }
                    if (document.getElementById("phonepe").checked) {
                        document.getElementById("button").innerHTML = "<p> <a href='https://phonepe.com/'><button type='button' class='btn btn-primary'><i class='fab fa-paypal mr-2'></i>Proceed </button></a> </p>";
                    }

                }
            </script>




</body>

</html>