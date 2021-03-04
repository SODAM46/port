
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/sub03_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
</head>
<body>

<?
    include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
?>

<div class="cs" style="overflow: hidden">
    <div class="banner">
        <img src="asset/img/sub03_visual_img.png" alt="">
    </div>

    <div class="subMenu">
        <ul>
            <li class="on"><a href="sub03.php">공지사항</a></li>
            <li><a href="sub03_tab02.php">Q&A</a></li>
            <li><a href="sub03_tab03.php">납품문의</a></li>
        </ul>
    </div>

    <div class="subContent">
        <div class="borad">
            <iframe src="http://naturesborad.dothome.co.kr/bbs/board.php?bo_table=notice"
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