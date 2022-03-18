function login(event){
    event.preventDefault(); 
    // 기존에는 로그인 체크기능이 정상적으로 작동하더라도 modal창은 강제로 닫히는 현상이 있었습니다, 
    // 하지만  event.preventDefault() 를 작성하면 에러메세지가 나와도 modal창은 닫히지 않습니다. 
    let error = "<font style='color:red; font-size: 14px;'>아이디 혹은 비밀번호가 맞지 않습니다.</font>";
    $.ajax({
        url: "/Login_check/check", // Controller의 Login_check에 있는 check 함수로 이동합니다.
        type: "POST",
        data: { // view 에서 inuid와 inpwd를 data에 저장합니다.
            "inuid":$("#inuid").val(), 
            "inpwd":$("#inpwd").val(),
        },
        dataType:'json',
        async : true,   
        success:function(data){
            if(data.responseText == "no"){ 
            	// 리턴값이 문자열 "no"인 경우 사전에 만든 error를 id가 status인 부분에 출력시킵니다.
                document.getElementById("status").innerHTML = error;
            }
            else if(data.responseText.no){ 
            	// 리턴값에 no가 있는 경우 페이지를 재부팅합니다.
                location.reload(); 
            }
        },
        error:function(xhr, status, error){ 
            alert('인증오류'); 
        }
    });
}
function Reset(){ // modal 창을 닫기 혹은 아이콘을 눌러 닫을 경우 입력된 값을 초기화 시키는 함수입니다.
    document.getElementById("inuid").value = "";
    document.getElementById("inpwd").value = "";
    document.getElementById("error").innerHTML = null;
}
