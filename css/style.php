<style type="text/css">

html{
	scroll-behavior: smooth;
}
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'muli',sans-serif;  }

.row{margin-left: 0!important; margin-right: 0!important;}

.nav_style{
	background-color: #1F202B!important;
}
.nav_style a{
	color:yellow;
}
.main_header{
	height: 450px;
	width: 100%; 
}
.rightside h1{
	font-size: 3rem;
}
.corona_rot img{
	animation: gocorona 2s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}
.leftside img{ animation: heartbeat 5s linear infinite; }
@keyframes heartbeat
{
	0%{
		transform: scale(.75);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}
}

.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{ color: #ff7675; }

.corona_update h1{
	font-size: 2rem; text-align: center;
}

.sub_section{
	background-color: #fbfafd;
}

.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
}

/*############## top scrol ####***/
#myBtn{
	display: none;
	position: fixed;
	bottom:30px;
	right: 40px;
	z-index: 99;
	border:none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover{
	background: #606060;
}

@media(max-width: 768px){
	.main_header{ height: 700px; text-align: center; }
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
	.count_style{
		display: inline!important;
	}
	
	.count_style p{text-align: center;
	}
	.about_res{ margin-left: 0!important; }
}
.img_style{
	width: 50px; height: 50px;
}

</style>