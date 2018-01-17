<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rwanda Leaders Fellowship</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sets/css/bootstrap.css" rel="stylesheet">
    <link href="/sets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/sets/css/datatables.bootstrap.min.css" rel="stylesheet">
    <link href="/sets/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/sets/css/buttons-rtl.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sets/css/sb-admin.css" rel="stylesheet">
    <link href="/sets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom Fonts -->
    <link href="/sets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/sets/font-awesome/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/sets/font-awesome/fonts/glyphicons-halflings-regular.woff" rel="stylesheet" type="text/css">
    <link href="/sets/font-awesome/fonts/glyphicons-halflings-regular.ttf" rel="stylesheet" type="text/css">
    <!-- Data Tables Stylesheets Included Here -->
    <link rel="stylesheet" type="text/css" href="/sets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/sets/css/buttons.bootstrap.min.css">
  
</head>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">RLF</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   {{ Auth::user()->name }}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                      <!--   <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li>
                            <a href="/login"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                     <li>
                        <a href="/welcomemessage"><i class="fa  fa-fw fa-book"></i>welcome message</a>
                    </li> 
                    <li>
                        <a href="/speakers"><i class="fa  fa-fw fa-user"></i>speakers</a>
                    </li>
                     <li>
                        <a href="/sponsors"><i class="fa fa-fw fa-user"></i>sponsors</a>
                    </li> 
                    <li>
                        <a href="/slide"><i class="fa fa-fw fa-user"></i>slide</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> Agenda <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="/agenda">Day one</a>
                            </li>
                            <li>
                                <a href="/agendatwo">Day two</a>
                            </li>
                             <li>
                                <a href="/introduction">Introduction</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Attendes"><i class="fa fa-fw fa-user"></i> Attendes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Attendes" class="collapse">
                            <li>
                                <a href="/list">Convetion</a>
                            </li>
                            <li>
                                <a href="/listtwo">Serena</a>
                            </li>
                        </ul>
                    </li> <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#regt"><i class="fa fa-fw fa-book"></i> Registration Nb <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="regt" class="collapse">
                            <li>
                                <a href="/nb">National Player </a>
                            </li>
                            <li>
                                <a href="/nbtwo">Youth</a>
                            </li>
                        </ul>
                    </li>
                  <!--   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Agenda <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Day one</a>
                            </li>
                            <li>
                                <a href="#">Day two</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12">

                <div class="row">
                 <button class="btn btn-primary col-md-2" data-toggle="modal" data-target=".bd-example-modal-lg" class="close" > <i class="fa fa-plus"></i>Add </button>
                    <!-- Upload csv -->
                    <center>
                        <a href="/sets/sample.csv" class="alert alert-success col-md-7 fade in alert-dismissable" style="margin: 20px;">
                            <p>Click here to download the Excel sample Documents</p>
                            <span class="close" data-dismiss="alert" aria-label="close" title="close">
                                <i class="fa fa-close"></i>
                            </span>
                        </a>
                    </center>
                  <button class="btn btn-success col-md-2" data-toggle="modal" data-target=".ls-example-modal-lg"    > </i>Upload csv </button>

                   <div class="modal fade ls-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content" style="height:300px;">
                  
                <div class="row">
                    <div class="col-lg-6">

                        <form style="margin-left: 7%;" action="{{ url('import') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                           <div class="col-md-12" style="margin-left: 50%;margin-top: 55px;">
                               <input type="file" name="import_file" class="form-control">
                           </div>

                            <div class="col-md-12" style="margin-left: 77%;margin-top: 10px;">
                                
                            
                            <button type="submit"  name="submit" class="btn btn-success">Submit </button>
                            <button type="reset" class="btn btn-danger" da>Reset </button>
                            </div>
                        </form>

                    </div>
                </div>
                   
                </div>
                </div>
                </div>
                <!-- end of csv -->

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background: white;height: 786px;margin-top: 109px;width: 714px;">
                  
                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="" method="post" style="margin-left: 7%;">
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

                            <button type="submit"  name="submit" class="btn btn-success">Submit </button>
                            <button type="reset" class="btn btn-danger" da>Reset </button>
                        </form>

                    </div>
                </div>
                   
                </div>
                </div>
                </div>
                   <div class="row">
                    <div class="col-lg-12">
                        <h2>Attendes In Convetion</h2>

                        {{--<h2>Detecting a Radio Box Change and getting the Value in jQuery:</h2>--}}
                        {{--<form id="my_radio_box">--}}
                            {{--<input type="radio" name="my_options" value="option 1" checked="checked" /> Option 1--}}
                            {{--<input type="radio" name="my_options" value="option 2" /> Option 2--}}
                            {{--<input type="radio" name="my_options" value="option 3" /> Option 3--}}
                        {{--</form>--}}
                        <a href="/ticket" style="font-size: 26px;"><i class="glyphicon glyphicon-print"></i>Ticket</a>
                        <div class="table-responsive display" id="demo">
                            <table id="example" class="table table-striped table-bordered display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender </th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Company Name</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>Spouse</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php $i=0;?>
                                            @foreach($invitation AS $value)
                                                <tr >
                                                    <td>{{++$i}}</td>
                                                    <td>{{$value->suffix}} {{$value->firstname}}</td>
                                                    <td>{{$value->lastname}}</td>
                                                    <td>{{$value->sex}}</td>
                                                    <td>{{$value->category}}</td>
                                                    <td>{{$value->title}}</td>
                                                    <td>{{$value->companyname}}</td>
                                                    <td>{{$value->telephone}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->wife}}</td>
                                                  <td>
                                        <button data-toggle="modal" data-target="#editList<?php echo $i;?>" class="pull-left edit btn btn-sm btn-default dlt_sm_table"><i class="glyphicon glyphicon-pencil"></i>
                                            </button><br><br>
                                                      <div onclick="clicked(this);" id="{{$value->id}}">ticket</div>

                                        <form  class="pull-left" action="/list/{{$value->id}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <button onclick="return confirm('Are you sure you want to delete this?');" type="submit" class="delete btn btn-sm btn-danger dlt_sm_table" data-toggle="modal" data-target="#modal-basic"><i class="glyphicon glyphicon-trash"></i></button>
                                        </form>
                                                      {{--<form id="invi" action="/list/{{$value->id}}" method="post">--}}
                                                          {{--<button onclick="return ('$id')" class="text" class="btn btn-primary" type="submit" class="delete btn btn-sm btn-danger dlt_sm_table" data-toggle="modal" data-target="#modal-basic"><i class="glyphicon glyphicon-trash"></i></button>--}}
                                                      {{--</form>--}}
                            <div id="editList<?php echo $i;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog col-md-6 col-md-offset-3" style="margin-left: 33%;">
                                    <div class="modal-content" style= "height: 788px;">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="custom-width-modalLabel">Edit attendes</h4></div>
                                        <div class="modal-body">
                        <div class="container">               
                           <form action="/list/{{$value->id}}" method="Post">
                           <div class="row">
                                  <input type="hidden" name="_method" value="PUT" />
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />



                              <div class="col-md-12">
                                <label >Suffix</label><br>
                                 <select name="suffix" id="suffix" value="" class="form-control"  >
                                    <option value="{{$value->suffix}}"></option>
                                    <option value="Mrs">Mrs</option>           
                                    <option value="Miss">Miss</option>
                                    <option value="Ms">Ms</option>
                                   
                                    </select>
                            </div><br><br><br>
                            <div class="col-md-12">
                                <label>Firstname</label><br>
                                <input type="text" class="form-control" name="firstname" required="" value="{{$value->firstname}}">
                            </div><br><br>

                            <div class="col-md-12">
                                <label>Last Name</label><br>
                                <input type="text" class="form-control" name="lastname" required="" value="{{$value->lastname}}">
                            </div><br><br>

                            <div class="col-md-12">
                                <label>Choose Gender</label><br>
                                <select type="text" name="sex" value="sex" class="form-control" >  
                                    
                                    <option value="Male" name="sex" >Male</option>
                                    <option value="Male" name="sex">Female</option>
                                </select>
                            </div><br><br>

                             <div class="col-md-12">
                                <label>Choose Category </label><br>
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
                            </div><br><br>
                            <div class="col-md-12" >
                                <label>Company Name / Organization</label><br>
                                <input type="text" name="companyname" class="form-control" required="" value="{{$value->companyname}}">
                            </div><br><br>

                            <div class="col-md-12">
                                <label>Job Title</label><br>
                                <input type="text" name="title" class="form-control" required="" value="{{$value->title}}">
                            </div><br><br>

                            <div class="col-md-12">
                                <label>Phone Number</label><br>
                                <input type="text" name="telephone" class="form-control" required="" value="{{$value->telephone}}">
                            </div><br><br>

                            <div class="col-md-12">
                                <label>Email Address</label><br>
                                <input type="text" name="email" class="form-control" required="" value="{{$value->email}}">
                            </div><br><br>
                                 <div class="col-md-12">
                                <label>Coming with Spouse (Yes Full Name/ No Submit )</label><br>
                                <input type="text" name="wife" class="form-control" placeholder="Full Name"
                                 value="{{$value->wife}}">
                              </div><br><br>

                           <div class="col-md-12" ><br>
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                   <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                               </div>
                             </div>  
                        </form>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                            </div> 
                            </div><!-- /.modal -->
                            </div>

                                                   </td>
                                           
                                                    </tr>
                                            @endforeach 
                                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 

                </div>
                <!-- /.row -->
                </div>
  

               
                        

    <!-- jQuery -->
    <script src="/sets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sets/js/bootstrap.min.js"></script>
    

    <!-- Datatables scritps -->
   <script src="/sets/js/jquery.dataTables.min.js"></script>
   <script src="/sets/js/dataTables.bootstrap.min.js"></script>
   <script src="/sets/js/dataTables.buttons.min.js"></script>
   <script src="/sets/js/buttons.bootstrap.min.js"></script>
   <script src="/sets/js/jszip.min.js"></script>
   <script src="/sets/js/pdfmake.min.js"></script>
   <script src="/sets/js/vfs_fonts.js"></script>
   <script src="/sets/js/buttons.html5.min.js"></script>
   <script src="/sets/js/buttons.print.min.js"></script>
   <script src="/sets/js/buttons.colVis.min.js"></script>
   <script type="text/javascript" src="/sets/js/jquery.qrcode.min.js"></script>


    <script type="text/javascript">
    $('#example_wrapper').DataTable();
   $(document).ready(function() {
       var table = $('#example').DataTable( {
           lengthChange: false,
           buttons: [ 'copy', 'excel', 'pdf', 'print' ]
       } );
       table.buttons().container()
           .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
   } );
</script>


                {{--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>--}}
                {{--<script type="text/javascript">--}}

                    {{--$(document).ready(function(){--}}

                        {{--$('#invi').change(function(){--}}
                            {{--selected_value = $("input[name='my_options']:checked").val();--}}
                            {{--alert(selected_value);--}}
                        {{--});--}}

                    {{--});--}}

                {{--</script>--}}

                <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

                <script type="text/javascript">
                    function clicked(item) {
                        alert($(item).attr("id"));
                    }
                </script>

</body>

</html>
