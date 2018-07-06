<!DOCTYPE html>
<html lang="en">
<head>
	<title>OES-Admin</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Metro 4 -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/metro/css/metro-all.css');?>">
    <style type="text/css">
        .ani-swoopInTop {
          animation-name: swoopInTop;
          animation-duration: 0.5s;
        }
        .ani-swoopOutTop {
          animation-name: swoopOutTop;
          animation-duration: 0.5s;
        }
        @keyframes swoopInTop {
          0% {
            opacity: 0;
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: scaleY(1.5) translate3d(0, -400px, 0);
          }
          40% {
            opacity: 1;
            animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
            transform: scaleY(1.2) translate3d(0, 0, 0);
          }
          65% {
            transform: scaleY(1) translate3d(0, 20px, 0);
          }
          100% {
            animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
            transform: scaleY(1) translate3d(0, 0, 0);
          }
        }
        @keyframes swoopOutTop {
          0% {
            animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
            transform: scaleY(1) translate3d(0, 0, 0);
          }
          40% {
            opacity: 1;
            transform: scaleY(1) translate3d(0, 20px, 0);
          }
          60% {
            animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
            transform: scaleY(1.2) translate3d(0, 0, 0);
          }
          100% {
            opacity: 0;
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: scaleY(1.5) translate3d(0, -400px, 0);
          }
        }
        .ani-rollInLeft {
          animation-name: rollInLeft;
          animation-duration: .5s;
        }
        @keyframes rollInLeft {
          0% {
            animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateX(-400px) rotate(445deg);
            opacity: 0;
          }
          30% {
            opacity: 1;
          }
          50% {
            transform: translateX(20px) rotate(20deg);
          }
          100% {
            animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
            transform: translateX(0) rotate(0deg);
          }
        }
        .ani-rollOutRight {
          animation-name: rollOutRight;
          animation-duration: .5s;
        }
        @keyframes rollOutRight {
          0% {
            opacity: 1;
            animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
            transform: translateX(0) rotate(0deg);
          }
          40% {
            opacity: 1;
            transform: translateX(-20px) rotate(20deg);
          }
          100% {
            opacity: 0;
            animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateX(400px) rotate(445deg);
          }
        }
    </style>
</head>
<body class="h-vh-100">

    <aside class="sidebar pos-absolute z-2"
           data-role="sidebar"
           data-toggle="#sidebar-toggle-4"
           id="sb4"
           data-shift=".shifted-content-2"
           data-static-shift=".shifted-content-2"
           >
        <div class="sidebar-header bg-red" data-image="images/sb-bg-1.jpg">
            <div class="avatar">
                <img data-role="gravatar" data-email="sergey@pimenov.com.ua">
            </div>
            <span class="title fg-white">Raymundo R. Alfeche Jr.</span>
            <span class="subtitle fg-white">Multimedia Head</span>
        </div>
        <ul class="sidebar-menu">
            <li><a><span class="mif-home icon"></span>Home</a></li>
            <li><a><span class="mif-books icon"></span>NAS</a></li>
            <li><a><span class="mif-featured-play-list icon"></span>Attendance</a></li>
            <li><a><span class="mif-list-numbered icon"></span>Grade</a></li>
            <li><a><span class="mif-list icon"></span>Evaluation Question</a></li>
            <li class="divider"></li>
            <li><a><span class="mif-images icon"></span>Icons</a></li>
        </ul>
    </aside>

    <div class="shifted-content-2 h-100 p-ab">

        <div class="app-bar-expand-md pos-absolute bg-red fg-white z-1" data-role="appbar">
            <button class="app-bar-item c-pointer" id="sidebar-toggle-4">
                <span class="mif-menu fg-white"></span>
            </button>
            <a href="#" class="brand no-hover fg-white-hover order-1" style="font-weight: bold;">ONLINE EVALUATION SYSTEM OF NON ACADEMIC SCHOLARS OF ACT</a>

                        <div class="app-bar-container ml-auto order-3 order-md-4">
                            <a href="#" class="app-bar-item"><span class="mif-bell"></span></a>
                            <div class="app-bar-container">
                                <a class="app-bar-item dropdown-toggle marker-light" href="#"><span class="mif-plus"></span></a>
                                <ul class="d-menu place-right" data-role="dropdown">
                                    <li><a href="javascript:void();" onclick="openNewUserDialogActions()">New User</a></li>
                                    <li><a href="javascript:void();"" onclick="openImportNasDialogActions()">Import NAS</a></li>
                                    <li><a href="">Import Attendance</a></li>
                                    <li><a href="">Import Grade</a></li>
                                    <li><a href="">Import Evaluation Question</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                            <div class="app-bar-container">
                                <a class="app-bar-item dropdown-toggle marker-light pl-1 pr-5" href="#">
                                    <img class="rounded" data-role="gravatar" data-email="sergey@pimenov.com.ua" data-size="25">
                                </a>
                                <ul class="v-menu place-right" data-role="dropdown">
                                    <li><a href="">Signed as <strong>(Username)</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Your profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
        </div>

        <div class="h-100" style="overflow-y: auto;height: 100%">
            <div data-role="navview">
                <div class="navview-pane bg-lightRed">
                    <button class="pull-button">
                           <span class="default-icon-menu"></span>
                    </button>
                    <div class="suggest-box">
                            <input data-role="search" data-clear-button="false">
                            <button class="holder">
                                <span class="mif-search"></span>
                            </button>
                    </div>
                    <ul class="navview-menu">
                        <li class="item-separator"></li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-home"></span></span>
                                <span class="caption">Home</span>
                            </a>
                        </li>

                        <li class="item-separator"></li>

                        <li class="item-header">Masterfile</li>

                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-users"></span></span>
                                <span class="caption">NAS</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-featured-play-list"></span></span>
                                <span class="caption">User Accounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-list2"></span></span>
                                <span class="caption">Evaluation Question</span>
                            </a>
                        </li>
                        <li class="item-separator"></li>

                        <li class="item-header">Evaluation Components</li>

                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-users"></span></span>
                                <span class="caption">Attendance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-featured-play-list"></span></span>
                                <span class="caption">Grade</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-list2"></span></span>
                                <span class="caption">Evaluation</span>
                            </a>
                        </li>
                        <li class="item-header">Reports</li>

                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-users"></span></span>
                                <span class="caption">Evaluation Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-featured-play-list"></span></span>
                                <span class="caption">List of NAS Allowance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-list2"></span></span>
                                <span class="caption">List of NAS Renewal Remarks</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><span class="mif-list2"></span></span>
                                <span class="caption">List of NAS Number of units</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navview-content">
                    <h1></h1>
                </div>
            </div>
        </div>
    </div>
    <!--
	<aside class="sidebar pos-absolute z-2"
           data-role="sidebar"
           data-toggle="#sidebar-toggle-3"
           id="sb3"
           data-static="md"
           data-shift=".shifted-content">
        <div class="sidebar-header bg-brandColor2 fg-white" data-image="images/sb-bg-1.jpg">
            <div class="avatar">
                <img data-role="gravatar" data-email="sergey@pimenov.com.ua">
            </div>
            <span class="title">Raymundo R. Alfeche Jr.</span>
            <span class="subtitle">SWS Director</span>
        </div>
        <ul class="sidebar-menu">
            <li><a><span class="mif-home icon"></span>Home</a></li>
            <li><a><span class="mif-books icon"></span>Guide</a></li>
            <li><a><span class="mif-files-empty icon"></span>Examples</a></li>
            <li class="divider"></li>
            <li><a><span class="mif-images icon"></span>Icons</a></li>
        </ul>
    </aside>
    <div class="shifted-content h-100 p-ab">
        <div class="app-bar pos-absolute bg-brandColor2 fg-white z-1" data-role="appbar">
            <button class="app-bar-item c-pointer" id="sidebar-toggle-3">
                <span class="mif-menu fg-white"></span>
            </button>
            <a href="#" class="brand no-hover fg-white-hover order-1" style="font-weight: bold;">ONLINE EVALUATION SYSTEM OF NON ACADEMIC SCHOLARS OF ACT</a>

                        <div class="app-bar-container ml-auto order-3 order-md-4">
                            <a href="#" class="app-bar-item"><span class="mif-bell"></span></a>
                            <div class="app-bar-container">
                                <a class="app-bar-item dropdown-toggle marker-light" href="#"><span class="mif-plus"></span></a>
                                <ul class="d-menu place-right" data-role="dropdown">
                                    <li><a href="">New User</a></li>
                                    <li><a href="">Import NAS</a></li>
                                    <li><a href="">Attendance</a></li>
                                    <li><a href="">Grade</a></li>
                                    <li><a href="">Evaluation Question</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                            <div class="app-bar-container">
                                <a class="app-bar-item dropdown-toggle marker-light pl-1 pr-5" href="#">
                                    <img class="rounded" data-role="gravatar" data-email="sergey@pimenov.com.ua" data-size="25">
                                </a>
                                <ul class="v-menu place-right" data-role="dropdown">
                                    <li><a href="">Signed as <strong>(Username)</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Your profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
        </div>

        <div class="h-100 p-4" >
            <p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p>
            <p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p><p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p><p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p><p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p><p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                ...
            </p>
            
        </div>
    </div>
	<!-- jQuery first, then Metro UI JS -->
	<script type="text/javascript" src="<?php echo base_url('assets/metro/js/jquery-3.2.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/metro/js/metro.js');?>"></script>
	<script>
        var toast = Metro.toast.create;
        function invalidForm(){
            var form  = $(this);
            form.addClass("ani-ring");
            setTimeout(function(){
                form.removeClass("ani-ring");
            }, 1000);
        }
        function validateForm(){
            $(".login-form").animate({
                opacity: 0
            });
        }
        function openNewUserDialogActions(){
                Metro.dialog.create({
                    title: "Create new user",
                    content: "<div><form><div class='form-group'><label>Enter email</label><input type='email' placeholder='Example:alfeche492@gmail.com' data-role='input'></div><div class='form-group'><label>Select Department</label><select data-role='select'><option>CCS</option><option>CASP</option><option>CBM<option class='bg-red'>Manage Department</option></select></div></form></div>",
                    onShow: function(el){
                               el.addClass("ani-swoopInTop");
                               setTimeout(function(){
                                   el.removeClass("ani-swoopInTop");
                               }, 500);
                           },
                    actions: [
                        {
                            caption: "Create",
                            cls: "js-dialog-close alert",
                            onclick: function(){
                                toast("User has been successfully created",null,5000,'info');
                            }
                        },
                        {
                            caption: "Cancel",
                            cls: "js-dialog-close"
                        }
                    ],
                    onHide: function(el){
                               el.addClass("ani-swoopOutTop");
                               setTimeout(function(){
                                   el.removeClass("ani-swoopOutTop");
                               }, 500);
                           }
                });
            }
            function openImportNasDialogActions(){
                Metro.dialog.create({
                    title: "Import NAS from excel file",
                    content: '<div><input type="file" data-role="file" data-caption="Upload excel file"></div>',
                    onShow: function(el){
                               el.addClass("ani-swoopInTop");
                               setTimeout(function(){
                                   el.removeClass("ani-swoopInTop");
                               }, 500);
                           },
                    actions: [
                        {
                            caption: "Import",
                            cls: "js-dialog-close alert",
                            onclick: function(){
                                toast("Imported successfully",null,5000,'info');
                            }
                        },
                        {
                            caption: "Cancel",
                            cls: "js-dialog-close"
                        }
                    ],
                    onHide: function(el){
                               el.addClass("ani-swoopOutTop");
                               setTimeout(function(){
                                   el.removeClass("ani-swoopOutTop");
                               }, 500);
                           }
                });
            }
    </script>
</body>
</html>
</body>
</html>