<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-header">
                          Registration National Prayer Breakfast
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">return to web</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> From  08H:30 to 16H:00 15th/01/2017  
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="col-md-3">
                                <label style="margin-left: -15px;">Suffix</label>
                                 <select name="suffix" id="suffix" value="" class="form-control"  style="margin-left: -16px;">

                                    <option value="Mrs">Mrs</option>           
                                    <option value="Miss">Miss</option>
                                    <option value="Ms">Ms</option>
                                   
                                    </select>
                            </div><br><br><br>
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" class="form-control" name="firstname" required="">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" required="">
                            </div>

                            <div class="form-group">
                                <label>Choose Gender</label>
                                <select type="text" name="sex" value="sex" class="form-control">  
                                    
                                    <option value="Male" name="sex">Male</option>
                                    <option value="Male" name="sex">Female</option>
                                </select>
                            </div>

                             <div class="form-group">
                                <label>Choose Category </label>
                                    <select name="category" id="category" value="" class="form-control" >

                                    <option value="">Choose Category</option>           
                                    <option value="Ministers">Ministers</option>
                                    <option value="Senators">Senators</option>
                                    <option value="Private Sector">Private Sectors</option>
                                    <option value="ICT Chamber">ICT Chamber</option>
                                    <option value="Young Entrepreurs">Entrepreurs</option>
                                    <option value="Minijust">Minijust</option>
                                    <option value="Permanent Secretary">Permanent Secretary</option>
                                    <option value="Heads Of Government Instutition">Heads Of Government Instutition</option>
                                    <option value="Church Leaders">Church Leaders</option>
                                    <option value="Ambassadors">Ambassadors</option>
                                    <option value="NGOS"> NGOS</option>
                                    <option value="Others">Others</option>
                                   
                                    </select>
                                            </div>
                            <div class="form-group">
                                <label>Company Name / Organization</label>
                                <input type="text" name="companyname" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="title" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="telephone" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" class="form-control" required="">
                            </div>
                                 <div class="form-group">
                                <label>Coming with Spouse (Yes Full Name/ No Submit )</label>
                                <input type="text" name="wife" class="form-control" placeholder="Full Name">
                              </div>

                            <button type="submit" class="btn btn-success">Submit </button>
                            <button type="reset" class="btn btn-danger" da>Reset </button>

                        </form> 
                        
                    </div>
                        <a class="navbar-brand" href="#">
                <center>
                    <div class="logo-section">
                        <img src="/assets/img/logo.jpeg" style="width:100px;margin-top: -201%;margin-left: 230%;" >
                    </div>
                </center>
                    </a><br><br>
                     <div class="col-lg-6" style="margin-top: -77px;">
                    
                        <h1>NB</h1>
                        @foreach($nb AS $value)

                        <tr>
                           <td>{{$value->nb}}</td> 
                        </tr>

                        @endforeach
                        <p></p>

                        <center>
                            <div class="logo-section">
                                 <img src="/assets/img/convention.jpg" style="width:100px;margin-top: -201%;" >
                            </div>
                </center>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/sets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var checkbox = document.getElementById('checkbox');
var delivery_div = document.getElementById('delivery');
checkbox.onclick = function() {
    console.log(this);
   if(this.checked) {
     delivery_div.style['display'] = 'block';
   } else {
     delivery_div.style['display'] = 'none';
   }
};


    </script>

</body>

</html>
