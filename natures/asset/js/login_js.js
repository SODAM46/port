window.addEventListener('DOMContentLoaded',function(){

    loginBt = document.querySelector('#login .login-ok');

    loginBt.addEventListener('click',function(){
        var checkId = document.querySelector('.login-idpw input[name="logid"]');
        var checkPd = document.querySelector('.login-idpw input[name="logpw"]');
        var reg = /^[A-Za-z0-9_\-]{5,20}$/;

        if(reg.test(checkId.value)){
            if(reg.test(checkPd.value)){
                location.href="login_check.php";
            }else{
                alert('가입시 설정한 비밀번호를 입력해주세요.')
            }
            
        }else{
            alert('아이디 또는 비밀번호를 입력해주세요.');
            return false;
        }


    });
    
}) ;