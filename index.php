<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classic CSS Javascripts JQuery Menus</title>
<style type="text/css">
body{
	background:#FFF;
		}
div.moving_arrow{
	width:700px;
	height:25px;
	margin:60px auto;
	}
.moving_arrow ul{
	margin:0;
	padding:10px;
	border-radius:8px;
	width:inherit;
	height:inherit;
	background:#D6D6C2;
	background:-webkit-linear-gradient(
								linear,
								left top,
								left bottom,
								color-stop(0, #fff),
								color-stop(1, #e5e5e5)) #e5e5e5;
								-webkit-box-shadow:0px 0px 6px #555;
	
							}
	.moving_arrow ul li{
		
		list-style:none;
		float:left;
		margin-right:24px;
		}
	.moving_arrow li a{
		display:block;
		float:left;
		padding:3px 3px 3px 8px;
		font-family:halvetica;
		text-shadow:0px 1px 1px white;
		text-decoration:none;
		font-weight:800;
		color:#666;
				
		}
	.moving_arrow li img{
		float:left;
		padding:6px 5px 8px 8px;
		
		
		}
	#arrow svg, #arrow polygon{
		width:14px;
		
		}
	#arrow{
		width:12px;
		margin-left:65px;
		/*webkit-transition:margin-left 4s ease-out;*/
		-webkit-transition: margin-left 1s ease-out; /* For Safari 3.1 to 6.0 */
    	 transition: margin-left 1s  ease-out;
		
		
		}
	#arrow.home{margin-left:65px;}
	#arrow.blog{margin-left:170px;}
	#arrow.apps{margin-left:275px;}
	#arrow.supp{margin-left:385px;}
	#arrow.about{margin-left:515px;}
	#arrow.contact{margin-left:645px;}

</style>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script type="text/javascript" src="jquery-1.11.1.js"></script>

<script>
$(function(){
		   $(".moving_arrow ul li a").mouseover(function(){
			var aClass = $(this).attr("class");
			$("#arrow").removeAttr("class").addClass(aClass);
												
												
												
			});
		   
		   
});

</script>
</head>

<body>
		<div class="moving_arrow">
        		<ul>
                	<li>
                    	<img src="home.jpg" width="20" height="15" />
                        <a href="" class="home">Home</a>
                    </li>
                    <li>
                    	<img src="bolag.jpg" width="20" height="15" />
                        <a href="" class="blog">Blog</a>
                    </li>
                    <li>
                    	<img src="Apps.jpg"  width="20" height="15" />
                        <a href="" class="apps">Apps</a>
                    </li>
                    <li>
                    	<img src="supp.jpg" width="20" height="15" />
                        <a href="" class="supp">Support</a>
                    </li>
                    <li>
                    	<img src="about.jpg" width="20" height="15" />
                        <a href="" class="about">About Us</a>
                    </li>
                    <li>
                    	<img src="contact.jpg" width="20" height="15" />
                        <a href="" class="contact">Contact</a>
                    </li>
                    </ul>
                    
               <!--for arrow drawing ............................-->
               <div id="arrow">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20px" height="15px">
               <polygon id="arrow_thumb" points="0,0 6,6 12,0" fill="gray"/>
               </div>     
        
        </div>

</body>
</html>