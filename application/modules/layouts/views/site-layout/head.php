<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

	<!doctype html>

 <html class="" lang="en"> 

    <head>

       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

		<title>D</title>

		<link href="<?php echo base_url('assets/cityook/css/style.css');?>" rel="stylesheet">

		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'/>

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"/>



	

		

		

		<script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,

0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");

for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);

mixpanel.init("YOUR TOKEN");</script><!-- end Mixpanel -->

		<!-- end Mixpanel -->



		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cityook/css/bootstrap.min.css');?>" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cityook/css/style-1.10.min.css');?>" />

		<link href="<?php echo base_url('assets/cityook/css/owl.carousel.css');?>" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cityook/css/li-scroller.css');?>" />
		

		<style type="text/css">

			.bodyContent{

				padding-top: 70px;

			}



			.newPromoBadge

			{

				display: inline-block;

				min-width: 10px;

				padding: 3px 7px;

				line-height: 1;

				color: #FFF;

				white-space: nowrap;

				vertical-align: baseline;

				border-radius: 10px;

				background: red;

				bottom: 70px !important;

				left: 42px !important;

				z-index: 9;

				font-style: normal;

				font-weight: normal;

				font-size: 15px !important;

			}



			.bodyContent {

				padding-top: 65px;

			}

			.cityDescription h2{

				text-align: justify;

			}

			.areasServedHeading{

				position: absolute;

				top: 13px;

				left: 25px;

				font-size: 17px;

				font-family: 'FuturaBT';

			}

			.areasServed.section {

			     padding: 0;

			}



			#areasServed ul li{

				font-family: 'FuturaBT' !important;

			}



			.menuMain a span{

				display: inline-block;

				white-space: nowrap;

				margin-left: -5px;

			}

			/*download app button css*/

			.downloadAppButton{

				position: absolute;

				top: 200px;

				position: fixed;

				z-index: 1040;

				right: -138px;

				display: none;

			}

			.downloadApp-trigger{

				width: 170px;

				background-color: #263C4D;

				display: inline-block;

				vertical-align: top;

				color: rgb(228, 228, 228);

				border-top-left-radius: 5px;

				border-bottom-left-radius: 5px;

				cursor: pointer;

				box-shadow: -2px 0px 7px -4px;

				box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);

				-moz-box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);

				-webkit-box-shadow: -2px 0px 7px -4px rgba(225,225,225,0.65);

			}



			.downloadApp-trigger h4{

				padding-left: 10px;

				padding-right: 10px;

				padding-bottom: 10px;

			}

			.downloadApp-trigger h4 a {

				/*display: block; */

				color:white !important;

				text-decoration:  none;

			}

			.downloadApp-trigger h4:hover span{

				color: #ffd650;

			}

			.rotated-text {

			    display: inline-block;

			    overflow: hidden;

			    width: 1.5em;

			}

			.rotated-text__inner {

			    display: inline-block;

			    letter-spacing: 2px;

			  transform: rotate(-90deg);

			  /*transform-origin:top left;*/

			  -ms-transform: rotate(-90deg); /* IE 9 */

			  /*-ms-transform-origin:top left; /* IE 9 */

			  -webkit-transform: rotate(-90deg); /* Safari and Chrome */

			  /*-webkit-transform-origin:top left; /* Safari and Chrome */

			  -moz-transform: rotate(-90deg); /* Firefox */

			  /*-moz-transform-origin:top left; /* Firefox */

			  -o-transform: rotate(-90deg); /* Opera */

			  /*-o-transform-origin:top left; /* Opera */

			}

			.rotated-text__inner:before {

			    content: "";

			    float: left;

			    margin-top: 100%;

			}

			.menuMain .menu__items, .menuMain .menu__items.active, .menuMain .menu__items:hover{

				background-size: 85% !important;

			}





			@media only screen and (max-width: 420px){

				.navbar-header .navbar-brand img{

					height: 100%;

					width: auto;

				}

			}



		</style>

		

	</head>