<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JavaScript Drop Down Menus</title>

<style type="text/css">
	#HeaderStyle {margin:0; padding:0;}
	#NavBar{width:608px; height:30px; background:#666; }
	#NavBar li{margin:0; padding:0; float:left;list-style:none;font:Arial, Helvetica, sans-serif;}
	#NavBar li a{display:block; border:1px solid #000; padding:4px 10px; width:100px; color:#0F0; background:#000; text-align:center; text-decoration:none;}
	#NavBar li a:hover{background:#69F; color:#333;}
	
	#NavBar div{visibility:hidden; position:absolute;}
	#NavBar li{display:block; border:1px solid #000; padding:2px 10px; width:130px; height:30px; color:#0F0; background:#000; text-align:center;text-decoration:none;}
	#NavBar li a{font:"Times New Roman", Times, serif; font-size:18px; background:#06F;padding:4px 3px;margin:0px 2px; border:1px solid #CCC; width:120px;border-radius:5px;}

</style>
<script type="text/javascript">

var timeout	= 10000;
var closetimer	= 0;
var submenu	= 0;

// open hidden layer
function SubMenuOpen(id)
{	

// close old layer
	if(this.submenu) submenu.style.visibility = 'hidden';

	// get new layer and show it
	submenu = document.getElementById(id);
	submenu.style.visibility = 'visible';
	 
}

function SubClose(){
	//if(submenu.style.visibility = 'visible')
	
	if(submenu) submenu.style.visibility = 'hidden';
	
	
	}
function mclose(){

closetimer = window.setTimeout(SubClose,timeout);
}
</script>

</head>

<body>

<div id="HeaderStyle" ><h1 align="center" style="color:#F00;">Drop Down Menus Using JavaScript</h1>
	
    <div id="NavBar" >
    		<li><a href="#" onmouseover="SubMenuOpen('M1')">Service</a>
     <div id="M1" onmouseout="mclose()">
            <a href="#">Programming</a>
            <a href="#">Tutorial</a>
            <a href="#">Examples</a>
    </div>
    </li>
    <li><a href="#" onmouseover="SubMenuOpen('M2')">Product</a>
     <div id="M2" onmouseout="mclose()">
            <a href="#">Service</a>
            <a href="#">Support</a>
            <a href="#">Contact</a>
    </div>
    </li>
    <li><a href="#" onmouseover="SubMenuOpen('M3')">Support</a>
     <div id="M3" onmouseout="mclose()">
            <a href="#">PHP</a>
            <a href="#">C++</a>
            <a href="#">HTML</a>
    </div>
    </li>
    <li><a href="#" onmouseover="SubMenuOpen('M4')">Contact</a>
     <div id="M4" onmouseout="mclose()">
            <a href="#">Online Support</a>
            <a href="#">User Help</a>
            <a href="#">Emailing</a>
    </div>
    </li>
    </div>
    
  </div >


</body>
</html>
