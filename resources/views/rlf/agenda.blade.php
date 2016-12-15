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
    <link href="/sets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">RLF</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret">James</b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
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
                        <a href="/agenda"><i class="fa fa-fw fa-book"></i>agenda</a>
                    </li>
                     <li>
                        <a href="/speakers"><i class="fa  fa-fw fa-user"></i>speakers</a>
                    </li>
                    <li>
                        <a href="/sponsors"><i class="fa  fa-fw fa-user"></i>sponsors</a>
                    </li>
                     <li>
                        <a href="/slide"><i class="fa  fa-fw fa-user"></i>slide</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
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
                <div class="row">
                 <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="margin-left: -1174px;" class="close" > <i class="fa fa-plus"></i>Add agenda</button>
                     <div class="col-md-3" style="margin-left: 895px;"">
                        <form action="#" method="get">
                            <div class="input-group">
                            <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background: white;height: 500px;margin-top: 109px;">
                  <form role="form" action="" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                             <div class="col-md-12">
                                    <label style="margin-left: 47%;margin-top: 28px;">Agenda</label>
                                    <hr>
                                </div><br><br>   
                             <div class="col-md-6" >
                                
                                <label>Start Time</label>
                                <input class="form-control" type="time" name="start_date">
                                <p class="help-block"></p>
                            </div>
                             <div class="col-md-6" >
                                <label>End Time</label>
                                <input class="form-control" type="time" name="end_date">
                                <p class="help-block"></p>
                            </div>

                            <div class="col-md-12">
                                <label>Title  of  agenda</label>
                                <input class="form-control" placeholder="Enter text" name="title">
                            </div>
                            
                            <div class="col-md-12">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea><br>
                            </div><br>
                            <div class="col-md-12" style="margin-left: 39%;">
                                <label></label>
                                <input type="submit" name="submit" class="btn btn-success" >
                                <input type="reset" name="reset" class="btn btn-primary"  data-dismiss="modal">

                            </div> 
                    </form>
                   
                </div>
                </div>
                </div>
                   <div class="row">
                    <div class="col-lg-12">
                        <h2>List Of Users</h2>
                        <div class="table-responsive" align="center">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Start time</th>
                                        <th>End Name</th>
                                        <th>Title of Agenda</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0;?>
                                            @foreach($agenda AS $value)
                                                <tr class="success">
                                                    <td>{{++$i}}</td>
                                                    <td>{{$value->start_date}}</td>
                                                    <td>{{$value->end_date}}</td>
                                                    <td>{{$value->title}} </td>
                                                    <td>{{$value->address}} </td>
                                                    <td>{{$value->description}} </td>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#editAgenda<?php echo $i;?>" class="pull-left edit btn btn-sm btn-default dlt_sm_table"><i class="glyphicon glyphicon-pencil"></i>
                                                        </button><br><br>
                                            <form " class="pull-left" action="/agenda/{{$value->id}}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <button onclick="return confirm('Are you sure you want to delete this?');" type="submit" class="delete btn btn-sm btn-danger dlt_sm_table" data-toggle="modal" data-target="#modal-basic>"><i class="glyphicon glyphicon-trash"></i></button>
                                            </form>
                            <div id="editAgenda<?php echo $i;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog col-md-6 col-md-offset-3" style="margin-left: 33%;">
                                    <div class="modal-content" style= "height: 500px;">
                                        <div class="modal-header">
                                        <h4 class="modal-title" id="custom-width-modalLabel">Edit Agenda</h4></div>
                                        <div class="modal-body">
                                            
                           <form action="/agenda/{{$value->id}}" method="Post">
                           <div class="row">
                                  <input type="hidden" name="_method" value="PUT" />
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            
                               <div class="col-md-6" >
                                
                            <label>Start Time</label>
                            <input class="form-control" type="time" name="start_date" value="{{$value->start_date}}">
                                
                            </div>
                             <div class="col-md-6" >
                                <label>End Time</label>
                                <input class="form-control" type="time" name="end_date" value="{{$value->end_date}}">
                                
                            </div>

                            <div class="col-md-12">
                                <label>Title  of  agenda</label>
                                <input class="form-control" placeholder="Enter text" name="title" value="{{$value->title}}">
                            </div>
                            
                            <div class="col-md-12">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$value->address}}">
                            </div>

                            <div class="col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description" value="{{$value->description}}"></textarea><br>
                            </div><br>
                            
                               <div class="col-md-12" style="margin-left:35%;"><br>
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                                   <button type="reset" name="cancel" value="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                               </div>
                           </div>
                        </form>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
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
  

               
                        

    <!-- jQuery -->
    <script src="/sets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/sets/js/bootstrap.min.js"></script>

</body>

</html>
