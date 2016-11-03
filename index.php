<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link href="css/plugins/morris.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <title>Welcome to MyWebbbbb</title> 
<script>
$(function () {
  $("#UserName").change(function(){
    var flag;
    $.ajax({
      url: "ckuser.php",
      data: "UserName=" + $("#UserName").val(),
      type: "POST",
      async:false,
      success: function(data, status) { 
         var result = data.split(",");
         flag = result[0];
         var msg = result[1];
         $("#msg1").html(msg);
        },
      error: function(xhr, status, exception) { alert(status); }
      });
    return flag;
    });
  });
</script> 

  <script type="text/javascript">
    $(function () {
        $("#rePassword").change(function () {
            var password = $("#Password").val();
            var confirmPassword = $("#rePassword").val();
         

            if (password != confirmPassword) {
                $("#verify").html("<font color = 'red'>รหัสผ่านไม่ตรงกัน</font>")
                return false;
            }else if(password == confirmPassword){
                $("#verify").html("<font color = 'green'>รหัสผ่านตรงกัน</font>")

            }
         return true;
        });
    });
</script>

<script>
$(function () {
  $("#Email").change(function(){
    var flag;
    $.ajax({
      url: "ckemail.php",
      data: "Email=" + $("#Email").val(),
      type: "POST",
      async:false,
      success: function(data, status) { 
         var result = data.split(",");
         flag = result[0];
         var msg = result[1];
         $("#msg2").html(msg);
        },
      error: function(xhr, status, exception) { alert(status); }
      });
    return flag;
    });
  });
</script> 

  
  </head>
  <body>
  <form class="form-horizontal" action="checklogin.php" method="POST" > 
    <div class="loginmodal-container">
        <div class="row">
            <h1>Please Login </h1><br>
              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Username</label>  
                        <div class="col-md-8">
                            <input  name="Username" type="text" placeholder="Username" class="form-control input-md" required="">
    
                        </div>
              </div> 

              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Password</label>  
                        <div class="col-md-8">
                            <input name="Password" type="password" placeholder="Password" class="form-control input-md" required="">
    
                        </div>
              </div> 


                <button type="submit" class="btn btn-primary btn-xl">เข้าสู่ระบบ</button> 
                <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
                
                  
        </div>
    </div>
</form>
  
<!-- *********************************start dialog************************ -->
    
<form class="form-horizontal" action="save.php" method="POST"> 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">สมัครสมาชิก</h1>
        </div>
        
         
        

            <!-- ***************************username from******************************** -->
        <div class="modal-body">
  
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อเข้าใช้งาน</label>  

                <div class="col-md-4">
                    <input  name="stwUsername" id="UserName" type="text" placeholder="Username" class="form-control input-md" required="" maxlength="15">
                    <span id="msg1"></span>
                         
    
                </div>
            </div>
            
<!-- *********************************password from***************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input id="Password" name="stwPassword" type="password" placeholder="Password" class="form-control input-md" required="" maxlength="12">
    
                </div>
            </div>

             <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input  id="rePassword" type="password" placeholder="Re-password" class="form-control input-md" required="" maxlength="12">
                    <span id="verify" ></span>
    
                </div>
            </div>
<!-- *********************************first from****************************************** -->
<div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" id="Email">
                     <span id="msg2"></span>
    
                </div>
            </div>

           
            
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary">ตกลง</button>
                </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>

















 

  </body>
</html>