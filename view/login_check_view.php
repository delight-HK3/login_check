<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

        <!-- bootstrap 4.5 css -->
        <link rel="stylesheet" href="/my/css/bootstrap.css">
        <link rel="stylesheet" href="/my/css/bootstrap.min.css">

        <!-- font css -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            if(!$this->session->userdata("no")){
        ?>      
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#Login">로그인</button>
        <?php
            }
            else{
        ?>
                <p>로그인 완료</p>
        <?php
            }
        ?>
        <div class="modal fade" id="Login" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" onClick="javascript:Reset()">&times;</span>
                        </button>
                    </div>
                    <form onsubmit="return login_check(event)"> 
                        <div class="modal-body" style="font-family: 'Noto Sans KR', sans-serif">
                            <div class="form-group row">
                                <label for="inuid" class="col-sm-4 col-form-label">아이디</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inuid" name="id" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inpwd" class="col-sm-4 col-form-label">비밀번호</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inpwd" name="pwd" value="" required>
                                </div>
                            </div>
                            <div id="status"></div>
                        </div>
                        <div class="modal-footer" style="font-family: 'Noto Sans KR', sans-serif;">
                            <input type="button" class="btn btn-secondary" onClick="javascript:Reset();" value="닫기" data-dismiss="modal">
                            <input type="submit" class="btn btn-primary" value="로그인"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<!--bootstrap 4.5 Javascript-->
<script src="/my/js/jquery-3.6.0.js"></script>
<script src="/my/js/bootstrap.js"></script>
<script src="/my/js/bootstrap.js.map"></script>
