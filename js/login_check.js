function login(event){
    event.preventDefault(); 
    let error = "<font style='color:red; font-size: 14px;'>아이디 혹은 비밀번호가 맞지 않습니다.</font>";
    $.ajax({
        url: "/Login_check/check",
        type: "POST",
        data: {
            "inuid":$("#inuid").val(), 
            "inpwd":$("#inpwd").val(),
        },
        dataType:'json',
        async : true,    // or true, your choice
        success:function(data){
            if(data.responseText == "no"){
                document.getElementById("status").innerHTML = error;
            }
            else if(data.responseText.no){
                location.reload();
            }
        },
        error:function(xhr, status, error){ 
            alert('인증오류'); 
        }
    });
}
function Reset(){
    document.getElementById("inuid").value = "";
    document.getElementById("inpwd").value = "";
    document.getElementById("error").innerHTML = null;
}