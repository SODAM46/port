
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/sub04_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    
</head>
<body>

<?
    include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
?>

<div class="cs" style="overflow: hidden">
    <div class="banner">
        <img src="asset/img/sub04_visual_img.png" alt="">
    </div>

    <div class="subMenu">
        <ul>
            <li><a href="sub04.php">Event</a></li>
            <li><a href="sub04_tab02.php">고객후기</a></li>
            <li class="on"><a href="sub43_tab03.php">레시피</a></li>
        </ul>
    </div>

    <div class="subContent">
      
        <div class="borad">
            <iframe src="http://naturesborad.dothome.co.kr/bbs/board.php?bo_table=gallery03"
                    width="1200" height="800px" frameborder="0" scrolling="no"
                    marginwidth="0" marginheight="0">
            </iframe> 
        </div>

    </div>
</div>


<?
    include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";
?> 

</body>
</html>