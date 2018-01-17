<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Rwanda Leaders Fellowship</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/sets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/sets/css/flexslider.min.css" rel="stylesheet" type="text/css"/>
        <link href="/sets/css/elegant-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/sets/css/pe-icon-7-stroke.min.css" rel="stylesheet" type="text/css"/>
        <link href="/sets/css/lightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="/sets/css/theme-lava.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    </head>
    <style>
     @foreach($invitation as $value)
    	#output{{$value->id}} canvas{
    		width: 100px;
		    text-align: center;
		    margin-left: 90px;
    	}
    	@endforeach
    	@media print and (color){
    		*{
    			-webkit-print-color-adjust: exact;
    			print-color-adjust: exact;
    			margin-bottom:3508px;
    			margin-top: 2480px;


    		}
    		.text-white{
    			color: #fff !important;
    		}
			.text-right{
			  text-align: right !important;
			}
			.text-left{
			  text-align: left !important;
			}
			.panel-custom{
			  background-color: #0b6ca6 !important;
			  padding-top: 10px !important;
			  padding-bottom: 35px !important;
			}

			.custom-heading{
			    font-size: 15px !important;
			    font-weight: bold !important;
			}
			.text-black{
			  color: #000 !important;
			}
			.border-left{
			  border-right:3px dotted #ffffff !important;
			}
			.head-text{
			  font-size: 18px !important;
			  padding-bottom: 20px !important;
			  font-weight: 600 !important;
			  text-align: center !important;
			}
			.second-border-left{
			border-right:3px dotted #000000;
			}

			.first-row{
			  padding:15px !important;
			}
			.row-back{
			  background-color:#e8e8e8 !important;
			  margin: 0px !important;
			  margin-top: 5px !important;
			}
    }
    </style>

    <body>

    <div class="container">
    	<div class="col-md-10 col-md-offset-1" style="padding-top: 200px !important;">
    		 <!-- <button class="btn btn-success" onclick="window.print()">Print test</button> -->
    		@foreach($invitation as $value)
    		<div class="panel panel-default" id="Usage" style="margin-bottom:30px">
		    	<div class="panel-heading panel-custom">
		    		<div class="col-md-8 border-left">
		    			<div class="pull-left">
		    				<span class="text-white custom-heading">Rwanda Leaders Fellowship</span>
		    			</div>
		    			<div class="pull-right">
		    				<span class="text-white custom-heading"> National Prayer Breakfast 2017</span>
		    			</div>
		    		</div>
		    		<div class="col-md-4">
		    			<span class="text-white custom-heading">Rwanda Leaders Fellowship</span>
		    		</div>
		    	</div>
		    	<div class="panel-body" style="padding: 0px !important;">
		    		<div class="first-row row" style="margin:0px !important;">
		    			<div class="col-md-8 second-border-left" s>
		    				<span class="head-text text-black pull-left">{{$value->firstname}} {{$value->lastname}}</span>
		    				<span class="head-text text-black pull-right">Spouse: {{$value->wife}}</span>
		    			</div>
		    			<div class="col-md-4 text-center">
		    				<span class="head-text text-black">{{$value->firstname}}</span>
		    			</div>
		    		</div>
		    		<div class="first-row row row-back">
		    			<div class="col-md-8 second-border-left" style="padding: 0px;padding-top: 20px !important;">
		    				<div class="row" style="margin: 0px !important;">
		    					<div class="col-md-4 text-left">
			    					<span>{{$value->title}}</span>
			    				</div>
			    				<div class="col-md-5 text-right">
			    					<span>{{$value->companyname}}</span>
			    				</div>
			    				<div class="col-md-3 text-right">
			    					<span>{{$value->id}}</span>
			    				</div>
		    				</div>
		    				<div class="row" style="margin: 0px;padding-top: 30px !important;">
		    					<div class="col-md-3">
			    					<span>Gender: {{$value->sex}}</span>
			    				</div>
			    				<div class="col-md-6">
			    					<span>Email:{{$value->email}}</span>
			    				</div>
			    				<div class="col-md-3">
			    					<span>Mob: {{$value->telephone}}</span>
			    				</div>
		    				</div>
		    				
		    			</div>
		    			<div class="col-md-4">
		    				<div id="output{{$value->id}}">
		    					
		    				</div>
		    			</div>
		    		</div>
		    	</div>
               

		    	<div class="panel-footer panel-custom">
		    		<div class="col-md-8 border-left">
		    			<span class="text-white custom-heading">Welcome to Rwanda Leaders Fellowship</span>
		    		</div>
		    		<div class="col-md-4 text-center">
		    			<span class="text-white custom-heading">http://www.rlf.rw</span>
		    		</div>
		    	</div>
		    </div>
		     @endforeach
    	</div>
    </div>
    


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<script type="text/javascript" src="/sets/js/jquery.qrcode.min.js"></script>
	<script type="text/javascript" src="/sets/js/xepOnline.jqPlugin.js"></script>
    <script type="text/javascript" src="/sets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/sets/js/skrollr.min.js"></script>
    <script type="text/javascript" src="/sets/js/spectragram.min.js"></script>
    <script type="text/javascript" src="/sets/js/flexslider.min.js"></script>
    <script type="text/javascript" src="/sets/js/jquery.plugin.min.js"></script>
    <script type="text/javascript" src="/sets/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="/sets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/sets/js/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="/sets/js/twitterfetcher.min.js"></script>
    <script type="text/javascript" src="/sets/js/scripts.js"></script>
    
    @foreach($invitation as $value)
    <script>
		jQuery(function(){
			jQuery('#output{{$value->id}}').qrcode("{{$value->firstname}} {{$value->lastname}},{{$value->title}} of  {{$value->companyname}} {{$value->wife}} Contacts: {{$value->telephone}},{{$value->email}}");
		})
	</script>
	@endforeach


	</body>

</html>
