<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	<head>

        <!-- Styles -->
        <style>
            body {
				background-image:url(https://manjaro.org/img/bg.svg);
				background-size: auto;
				background-color: #f0f0f0;
				background-size: contain;
				background-repeat: no-repeat;
				background-position: -232px 232px;
				background-attachment: fixed;
				width: 95%;
			}
			#colspan{
			background-color: white;
			background-position: center center;
			box-shadow: 0 0 25px;
			width: 30%;
			height: 1127.15px;
			text-align: justify;
			float: left;
			padding: 0 8px;
			padding-right: 16px;
			
			}
			.container-padding {
			box-shadow: 0 0 25px;
			width: 70%;
			height: 588.2px;
			background-color: rgb(255, 255, 255);
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 15px;
			line-height: 22.5px;
			margin-left: 34%;
			padding-bottom: 0.15px;
			padding-left: 16px;
			padding-top: 0.15px;
			}
			
			.padding { 
				text-align: left;
			}
			.padding-bottom {
			box-shadow: 0 0 25px;
			width: 70%;
			position: bottom;
			height: 588.2px;
			background-color: rgb(255, 255, 255);
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 15px;
			line-height: 22.5px;
			margin-left: 34%;
			padding-bottom: 0.15px;
			padding-left: 16px;
			padding-top: 0.15px;
			margin-top: 16px;
			}
			
			
			
			.load {
			background-color: rgb(241, 241, 241);
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
			}
			.progress {
			background-color:  #009688 !important;
			border-bottom-left-radius: 13px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
			color:  #ffff !important;
			text-align: center;
			}
			.load2 {
				background-color: rgb(241, 241, 241);
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
				border-top-left-radius: 16px;
				border-top-right-radius: 16px;
				box-sizing: border-box;
				color: rgb(0, 0, 0);
				font-family: "Roboto", sans-serif;
				font-size: 12px;
				line-height: 18px;
			}
			
			
			.progress2 {
			background-color:  #009688 !important;
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
			color:  #ffff !important;
			text-align: center;
			}
			.load3 {
				background-color: rgb(241, 241, 241);
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
				border-top-left-radius: 16px;
				border-top-right-radius: 16px;
				box-sizing: border-box;
				color: rgb(0, 0, 0);
				line-height: 18px;
			}
			.progress3 {
				background-color: #009688 !important;
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
				border-top-left-radius: 16px;
				border-top-right-radius: 16px;
				color: #fff !important;
				text-align: center;
				line-height: 18px;
				font-size: 12px;
				
			}
			.load4 {
				background-color: rgb(241, 241, 241);
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
				border-top-left-radius: 16px;
				border-top-right-radius: 16px;
				box-sizing: border-box;
				color: rgb(0, 0, 0);
				line-height: 18px;
			}
			.progress4 {
				background-color: #009688 !important;
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
				border-top-left-radius: 16px;
				border-top-right-radius: 16px;
				color: #fff !important;
				text-align: center;
				line-height: 18px;
				font-size: 12px;
			}
			.content1 { 
				padding: 14px;
			}
			.content2 {
				padding: 14px;
			}
			.content3 {
				padding: 10px;
			}
			.content4 {
				padding: 16px;
			}
			.content5 {
				padding: 16px;
			}
			.content6 {
				padding: 16px;
			}
			img  {
				size: cover;
				width: 100%;
				height: 225.18px;
				line-height: 1.5px;
			}
			
				
			h4{
				color: white;
				padding: 15px;
				text-align: left;
				margin-top: -50px;
			}
			i {
				padding: 5px;
				color: #009688 !important;
			}
			hr {
				border: -1px solid gray;
			}
			.round {
                    background: #009688;
                    border-radius: 30px;
                    border: none;
                    color: #fff;
                    font-size: 16px;
                    padding: 15px 30px;
                    text-decoration: none; 
                }
        </style>
    </head>
<body><a href="<?=url('/login')?>"><button class="round" style="position:absolute;top:50px;right:40px;">Login</button></a><br>
    <!-- Container -->
        <div class="container">
            <div id="colspan">
                <img src="https://source.unsplash.com/a-woman-looking-at-a-laptop-4m2-9Kyd1i4">
                <h4>RIFKI AMALUN</h4>
                <p><i class="fa fa-briefcase fa-fw large"></i>Web Developer</p>
                <p><i class="fa fa-home fa-fw large"></i>Tangerang Selatan, INDONESIA</p>
                <p><i class="fa fa-phone fa-fw large"></i>089686272363</p>
                <hr>
                <h3><i class="fa fa-linux fa-fw large"></i>Skills</h3>
                <p>HTML</p>
                <div class="load">
                    <div class="progress" style="width:90%">90%</div>
                </div>
                <p>CSS</p>
                <div class="load2">
                    <div class="progress2" style="width:80%">80%</div>
                </div>
                <p>Java Script</p>
                <div class="load3">
                <div class="progress3" style="width:70%">70%</div>
            </div>
                <p>Go Lang</p>
                <div class="load4">
                    <div class="progress4" style="width:65%">65%</div>
                </div>
                <p>Adobe Photoshop</p>
                    <div class="load4">
                    <div class="progress4" style="width:65%">65%</div>
                </div>
                <p>Adobe Premiere</p>
                    <div class="load4">
                    <div class="progress4" style="width:65%">65%</div>
                </div>
                <hr>
                <h3><i class="fa fa-language fa-fw large"></i>Language</h3>
                <p>English</p>
                <p>Japanese</p>
                <hr>
                <h3><i class="fa fa-globe fa-fw large"></i>Social Media</h3>
                <a href="https://www.facebook.com/Rifkipaniktingkatdewa"><i class="fa fa-facebook fa-fw large"></i></a>
                <a href="https://www.instagram.com/rifkiloen/?hl=id"><i class="fa fa-instagram fa-fw large"></i></a>
                <a href="#"><i class="fa fa-twitter fa-fw large"></i></a>
                <a href="https://github.com/rifkiamalun"><i class="fa fa-github fa-fw large"></i></a>
                <a href="#"><i class="fa fa-git fa-fw large"></i></a>
                </div>
          <div class="container-padding">
        <div class="padding">
                <div class="content1">
            <h2><i class="fa fa-briefcase fa-fw large"></i>School</h2>
            <h3>Sekolah Dasar Negeri Ciputat 08</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2007-2012</p>
            <p>Sekolah Dasar Negeri Ciputat 08 dengan nilai kelulusan 25.60
            </p>
            </div>
            <hr>
                <div class="content2">
            <h3>Sekolah Menengah Pertama Negeri 13 Tangsel</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2012-2015</p>
            <p>Sekolah Menengah Pertama Negeri 13 Tangsel  dengan nilai kelulusan 29.0
            </p>
            </div>
            <hr>
                <div class="content3"> 
            <h3>Sekolah Menengah Kejuruan Letris 1 Indonesia</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2015-2018</p>
            <p>Sekolah Menengah Kejuruan Letris 1 Indonesia dengan nilai kelulusan 21.0 , jurusan Teknik Komputer Jaringan
            </p>
            </div>
            </div>
            </div>
          <div class="padding-bottom">
                <div class="bottom">
                 <div class="content1">
            <h2><i class="fa fa-briefcase fa-fw large"></i>Pengalaman :</h2>
            <h3>Sebagai Staff IT Telkom Indonesia</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2007-2012</p>
            </div>
            <hr>
                <div class="content2">
            <h3>Sekolah Menengah Pertama Negeri 13 Tangsel</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2012-2015</p>
 
           
            </div>
            <hr>
                <div class="content3"> 
            <h3>Sekolah Menengah Kejuruan Letris 1 Indonesia</h3>
            <p><i class="fa fa-calendar fa-fw large"></i>2015-2018</p>
                        </div>
            </div>
        </div>
    </body>
</html>
