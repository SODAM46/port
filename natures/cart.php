
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/cart_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <script src="asset/js/login_js.js"></script>



</head>
<body>

<?
    include_once $_SERVER['DOCUMENT_ROOT']."/navi.php";
?>

<div style="overflow:hidden;">

    <div class="banner">
        <img src="asset/img/sub06_visual_img.png" alt="">
    </div>

    <div class="cart_wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col" class="chk_box">
                        <input type="checkbox" name="ct_all" value="1" id="ct_all" checked="checked" class="selec_chk">
                        <label for="ct_all"><span></span><b class="sound_only"></b></label>
                    </th>
                    <th scope="col">상품명</th>
                    <th scope="col">총수량</th>
                    <th scope="col">판매가</th>
                    <th scope="col">포인트</th>
                    <th scope="col">배송비</th>
                    <th scope="col">소계</th>
                </tr>
            </thead>

            <tbody>              
                <tr><td colspan="7">장바구니에 담긴 상품이 없습니다.</td></tr>
            </tbody>
            
        </table>

        <div class="btn_cart_del">
            <button type="button">선택삭제</button>
            <button type="button">비우기</button>
        </div>

    </div>
    

        <div class="cart_bck">
            <a href="/">쇼핑 계속하기</a>
        </div>
    
</div>


<?
    include_once $_SERVER['DOCUMENT_ROOT']."/footer.php";
?> 

</body>
</html>