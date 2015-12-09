<?php 
    use App\MyExtention;
    $prof = MyExtention::profileWeb();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>.:: Test ::.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="<?=URL::to('login');?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=URL::to('login');?>/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=URL::to('login');?>/css/style.css" rel="stylesheet">
  
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="fa fa-lock"></i> Login 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal" id="xform">
                    {!! csrf_field() !!}
                    <!-- Email -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="username">Username</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Username" autofocus>
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="password">Password</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
                      <div class="checkbox">
                        <label>
                          
                        </label>
						</div>
					</div>
					</div>
                        <div class="col-lg-9 col-lg-offset-3">
							<a href="#" onclick="xLogin()" class="btn btn-info btn-sm">Sign in</a>
							
						</div>
                    <br />
                  </form>
				  
				</div>
                </div>
              
                <div class="widget-foot">
                  
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
<script src="<?=URL::to('admin/js/jquery.min.js');?>"></script>
<script src="<?=URL::to('admin/js/bootstrap.min.js');?>"></script>
<script src="<?=URL::to('login/js/respond.min.js');?>"></script>
<script>
	$(document).keyup(function(t){
		var a = $('#username').val();
		var b = $('#password').val();
		if(t.which == 13){
			if(a == ''){
				$('#username').focus();
			}else if(b == ''){
				$('#password').focus();
			}else{
				xLogin();
			}
		}
	});
	function xLogin(){
		$.ajax({
			type:'POST',
			url:'<?=URL::to('auth/login');?>',
			data:$('#xform').serialize(),
			success:function(a){
				var b = eval('('+a+')');
				if(b.success){
					location='<?=URL::to("usermanagement");?>';
				}else{
					alert(b.msg);
				}
			}
		});
	}
</script>
</body>
</html>