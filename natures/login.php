
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/login_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <script src="asset/js/login_js.js"></script>

<script language="javascript">
//new window
var win= null;
function NewWindow(mypage,myname,w,h,scroll,resize){
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  var settings  ='height='+h+',';
      settings +='width='+w+',';
      settings +='top='+wint+',';
      settings +='left='+winl+',';
      settings +='scrollbars='+scroll+',';
      settings +='resizable='+resize+',';
  win=window.open(mypage,myname,settings);
  if(parseInt(navigator.appVersion) >= 4){win.window.focus();}
}
</script>

</head>
<body>

<?
    include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
?>

<div class="cs" style="overflow: hidden">

    <div class="banner">
        <img src="asset/img/sub06_visual_img.png" alt="">
    </div>

    <div id="login">

        <div class="login-bg">
            <img src="asset/img/login-bg-box.png" alt="">
        </div>

        <div class="login-box">
            <div class="login-idpw">
                <form action="">
                    <fieldset>
                        <legend><img src="asset/img/login-top-text.png" alt=""></legend>
                            <input action="text" name="logid" placeholder="아이디" maxlength=20 required>
                            <input type="password" name="logpw" placeholder="패스워드" required>
                    </fieldset>
                </form>        
            </div>

            <div class="login-ok">
                <input type="submit" value="" src="login_check.php">
            </div>
            
            <div class="register">
                <img src="asset/img/join-btn.png" alt="" usemap="#register01">
                <map name="#register01">
                <area shape="rect" coords="1,1,211,60" href="register.php" target="_self">
                <area shape="rect" coords="211,1,422,60" href="http://naturesborad.dothome.co.kr/bbs/password_lost.php" target="_blank" onclick="NewWindow(this.href,'win1','620','330','yes','no');return false"

출처: https://biju.tistory.com/208 [에헤라디야~]

출처: https://biju.tistory.com/208 [에헤라디야~]>
            </div>

        </div>
    </div>

    
</div>


<?
    include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";
?> 

</body>
</html>