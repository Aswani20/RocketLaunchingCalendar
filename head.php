<?
?>
<html lang="en" data-ng-app="website">
<head>
    <style type="text/css">
	body{

    margin-top: -50px;

	}
	.Friday{
	    height: 30%;
    background: url(Home_files/1.png);
    background-repeat: no-repeat;
    background-size: contain;
	opacity:0.5;

	}
	.regtxt{
		
		
	}

	

	.subimg{
		transition-duration : 0.5s;
		    width: 175px;
    height: 170px;
    border: #eb4f56 6px;
    border-style: inset;
    border-radius: 100%;
    background-color: white;
	}
	.subimg:hover{

	transition-duration : 0.5s;
	     border: #bdbdcc 6px;
		
    border-style: inset;
    border-radius: 100%;
	}
.mytext{
	
	
    color: #eb4f56;
    /* cursor: text; */
    WIDTH:  100px;
    font-family: 'Noto Sans', sans-serif;
    font-weight: 100;
    /* font-style: normal; */
    font-size: 18px !important;
    /* margin-left: -15px; */
    background-color: transparent;
    /* border-color: #eb4f56; */
    font-size: 15px;
    padding: 12px 15px;
    /* min-width: 150px; */
    /* position: relative; */
    /* text-align: center; */
    z-index: 1;
    /* transition: .3s; */

    /* border: 2px solid; */
    border-radius: 5px;
    transition-duration: 1s;

	
}

.proftext{
  font-size: 20px !important;    
}
@media only screen and (max-width: 500px) {
    .proftext {
       font-size: 15px !important;
    }
}
  .divbodys {
          position:  relative;
    width: 800px;
    margin:  auto;
	font-size:20px;
	border: #eb4f56;
    border-radius: 10px;
    border-style: solid;

    }
@media only screen and (max-width: 500px) {
    .divbodys {
	    background-color: #000000b5;
          position:  relative;
  width: 100%;
    margin:  auto;
	border: #eb4f56;
    border-radius: 10px;
    border-style: none;
    }
}

  .divbody {
          position:  relative;
    width: 800px;
    margin:  auto;
    }
@media only screen and (max-width: 500px) {
    .divbody {
          position:  relative;
    width: 200px;
    margin:  auto;
    }
}
	.myinput{
	color: #eb4f56;
	cursor: text;
    font-family: 'Noto Sans', sans-serif;
    font-weight: 100;
    font-style: normal;
    font-size: 18px !important;
    margin-left: -15px;
    background-color: transparent;
    border-color: #eb4f56;
    font-size: 15px;
    padding: 12px 15px;
    min-width: 150px;
    position: relative;
    text-align: center;
    z-index: 1;
    transition: .3s;
    line-height: 22px;
    border: 2px solid;
    border-radius: 5px;
    transition-duration: 1s;

	}
		.myinput:focus{
		    transition-duration: 1s;

    cursor: text;
    border-color: #4f5beb;
    color: #4f5beb;

	}
	#Lecture:hover{
	  
	}
	
        @charset "UTF-8";

        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
		.subtexts{
			    position: relative;
    font-size: 28px;
    color:  #eb4f56;
    top: 38px;
    text-shadow: 0px 6px 7px rgb(151, 50, 55);
    font-family: 'Cairo', sans-serif;
		}
    </style>



    <title>Home</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="canonical" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./Home_files/assets.min.css">
    <link rel="stylesheet" href="./Home_files/styles.css">
    <style>
        @import url(//fonts.googleapis.com/css?family=Noto+Sans:regular,italic,700,700italic|Noto+Serif:regular,italic,700,700italic&subset=latin);
    </style>
    <link rel="stylesheet" href="./Home_files/styles(1).css" id="moto-website-style">








</head>
<body class="moto-background">

							<?
							$currentdepartment=$_SESSION['CurrentDepartment'];
							if (isset($_GET['dep'])){
							$_SESSION['CurrentDepartment'] = $_GET['dep'];
							}
							if(isset($_SESSION['CurrentDepartment'])){}else{
							
							$_SESSION['CurrentDepartment'] = "Physics,Math,Space";
							}
							
						
							?>



    <div class="page">

        <header id="section-header" class="header moto-section" data-widget="section" style="
    background: url('img/mt-1297-content-bg01.jpg') no-repeat;
    background-size:  cover;
    /* background-size: 100%; */
" data-container="section">
            <div class="moto-widget moto-widget-block moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-spacing="maaa" style="/* background-image:url(img/embraced_ws_by_casperium.jpg); */background-position:left top;background-repeat:no-repeat;background-size:cover;" data-bg-image="2017/12/mt-1297-content-bg01.jpg">

                <div class="container-fluid">
                    <div class="row">
                        <div class="moto-cell col-sm-12" data-container="container">


                            <div class="moto-widget moto-widget-row row-fixed moto-justify-content_center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="saaa" style="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">


                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">


                                            <div class="moto-widget moto-widget-row moto-justify-content_center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="xs" data-widget="row" data-spacing="aaaa" style="">

                                                <div class="container-fluid">
                                                    <div class="row" data-container="container">


                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                                            <div data-widget-id="wid_1514402673_n1opiu52o" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image">
                                                               <a class="moto-widget-image-link moto-link" href="" data-action="page">
                                                                    
<div style="
    background-image: url(./Home_files/mt-1297-logo.png);
    height: 121px;
    width: 300px;
    background-repeat: no-repeat;
    position: absolute;
    background-size: 107px;
    left: 20px;
    background-position-y: 0;
    "></div><div style="
    /*background-image: url(./img/Logo.gif);*/
    height: 116px;
    width: 300px;
    background-repeat: no-repeat;
    background-size: contain;
    position: relative;
    left: 205px;
    "></div>
                                                                </a>
                                                            </div>


                                                        </div>




                                                        <div class="moto-widget moto-widget-row__column moto-cell col-xs-8 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">


                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
                                                                <div class="moto-widget-text-content moto-widget-text-editable"></div>
                                                            </div>


                                                        </div>



                                                    </div>
                                                </div>
                                            </div>


                                        </div>




                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-9 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">




                                            <div data-widget-id="wid_1514402673_oyxoj9alr" class="moto-widget moto-widget-menu moto-preset-default moto-align-right moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default" data-widget="menu">
                                                <a href="#" style="
    background-color: #eb4f56;
" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fa ">⟱</i></a>
                                                <ul style="
										

" class="moto-widget-menu-list moto-widget-menu-list_horizontal">

                                                    <li class="moto-widget-menu-item">
                                                        <a href="index.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Home</a>
                                                    </li>
													<?
													if(isset($_SESSION['login_user'])){
													?>
													 
													<?
													}else{
													?>

													<?}?>

													
                                                    <li class="moto-widget-menu-item">
                                                        <a href="#" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Search in Rocket Launches</a>
                                                    </li>


                                                  
                                                    <li class="moto-widget-menu-item">
                                                        <a href="https://www.facebook.com/herooiboo" target="_blank" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Contact With US</a>
                                                    </li>
													<?	if(isset($_SESSION['login_user'])){
													?>
													<li class="moto-widget-menu-item">
                                                        <a href="logout.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Logout </a>
                                                    </li>
													<?}?>
                                                </ul>
                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>



                            <div data-widget-id="wid_1514402673_aljwyjrmh" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_desktop" data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="desktop">
                                <div class="moto-widget-spacer-block" style="height:10px"></div>
                            </div>



                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="lala" style="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">


                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">









                                        </div><div class="moto-widget moto-widget-row__column moto-cell col-sm-11 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
                                                <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_7">Team X Produce . . <br></p><p class="moto-text_system_6">First Calendar Events Ever in RocketLaunches</p></div>
                                            </div>
											<center> <div class="row" >
											
											<div data-widget-id="wid_1514402673_279cweyf6" class=" moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-automoto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="button" style="
    margin: 10;
">
                                                <a href="days.php" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;View As List&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                                            </div>
											
											<div data-widget-id="wid_1514402673_279cweyf6" class="calendarview moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="button" style="

      margin: 10;
">
                                                <a href="index.php" data-action="page" class="moto-widget-button-link moto-size-medium moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View As Calendar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                                            </div>

											
											</div>
											
                                        </div>



                                    </div>
                                </div>	</center> 
                            </div>



                            <div data-widget-id="wid_1514402673_h7ggjteit" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-visible-on_desktop" data-widget="spacer" data-preset="default" data-spacing="masa" data-visible-on="desktop">
                                <div class="moto-widget-spacer-block" style="height:30px"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="footer" style="
 background: #333;
    height: 30px;
    width: 100%;
    color: white;
    bottom: 0;
    position: fixed;
    text-align: center;
    z-index: 100000;
    padding-top: 8px;
">
            (c) 2018-2019 Team X
        </div>