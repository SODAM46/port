
<?
    include_once $_SERVER['DOCUMENT_ROOT']."/head.php";
?>

    <link rel="stylesheet" href="asset/css/login_style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
</head>

<script>

  function back(){
        alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\n비밀번호는 대소문자를 구분합니다.');
        history.back();
    };

</script>

<body onload="back()">



</body>
</html>