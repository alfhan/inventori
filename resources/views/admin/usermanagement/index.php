<section class="content-header">
    <h1>
        <?=$title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Setting</a></li>
        <li><a href="<?=URL::to('/')?>"><i class="fa fa-angle-double-right"></i> <?=$title;?></a></li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-7 col-sm-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Form <?=$title?></h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" id="frm" method="post" enctype="mulipart/form-data">
						<input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
						<input class="form-control input-sm" name="id" id="id" type="hidden" />
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Username</label>
							<div class="col-md-5 col-sm-8">
								<input class="form-control input-sm" name="username" id="username" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Password</label>
							<div class="col-md-5 col-sm-8">
								<input class="form-control input-sm" name="password" id="password" type="password" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Full Name</label>
							<div class="col-md-5 col-sm-8">
								<input class="form-control input-sm" name="nama" id="nama" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Phone No</label>
							<div class="col-md-5 col-sm-8">
								<input class="form-control input-sm" name="hp" id="hp" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Role</label>
							<div class="col-md-5 col-sm-8">
								<select class="form-control input-sm" name="role" id="role">
									<?php foreach ($role as $r) {
										echo "<option value='$r->id'>$r->nama</option>";
									}?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-4">Active</label>
							<div class="col-md-5 col-sm-8">
								<select class="form-control input-sm" name="is_aktif" id="is_aktif">
									<option value="1">Active</option>
									<option value="0">In-Active</option>
								</select>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					<a href="#" class="btn btn-sm btn-primary save"><i class="fa fa-save"></i> Simpan </a>
				</div>
			</div>
		</div>
		<div class="col-md-5 col-sm-5">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">List of <?=$title?></h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
		    				<div class="btn-group pull-right" role="group" aria-label="...">
								<a href="#" class="btn btn-sm btn-default add" title="Add"><i class="fa fa-plus"></i> </a>
								<a href="#" class="btn btn-sm btn-default edit" title="Edit"><i class="fa fa-pencil"></i> </a>
								<a href="#" class="btn btn-sm btn-default delete" title="Delete"><i class="fa fa-minus"></i> </a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-condensed tb-list">
									<thead>
										<tr>
											<th width="35">No</th>
											<th>Username</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		var berforeSendLoading = bootbox.dialog({
	          title: "Loading",
	          message: "<div class='progress sm progress-striped active'>"+
	                        "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='100'"+
	                            "aria-valuemin='0' aria-valuemax='100' style='width: 100%'>"+
	                            "<span class='sr-only'>Loading</span>"+
	                        "</div>"+
	                    "</div>",
	          closeButton: false,
	          show: false,
	        });
	    var successDialog = bootbox.dialog({
	          title: "Success",
	          message: "<div class='alert alert-success alert-dismissable'>"+
	                        "<i class='fa fa-check'></i>"+
	                        "<b>Alert!</b> Success"+
	                    "</div>",
	          closeButton: true,
	          show: false,
	        });
	    var errorDialog = bootbox.dialog({
	          title: "ERROR. . .",
	          message: "<div class='alert alert-danger alert-dismissable'>"+
	                        "<i class='fa fa-ban'></i>"+
	                        "<b>Alert!</b> Error, terjadi kesalahan pada server. try again"+
	                    "</div>",
	          closeButton: true,
	          show: false,
	        });
		var dt = $(".tb-list").DataTable({
			'sDom':"rtip",
			'sort':false,
			"processing": true,
	        "serverSide": true,
	        "ajax": {
	        	"url":"<?=URL::to('/api/usermanagement');?>",
	        	"type": "GET",
	        },
	        "columns": [{ "data": null },{ "data": "username" }],
	        "drawCallback": function(setting){
	        	for (var i = 0, iLen = setting.aiDisplay.length; i < iLen; i++){
			        var start = setting._iDisplayStart+1;
		            $('td:eq(0)', setting.aoData[ setting.aiDisplay[i] ].nTr).html(start+i);
		        }
	        }
		});
		$('.tb-list tbody').on( 'click', 'tr', function () {
	        if($(this).hasClass('active') ) {
	            $(this).removeClass('active');
	        }else{
				dt.$('tr.active').removeClass('active');
	            $(this).addClass('active');
			}
	    });
	    $(".edit").click(function(){
	    	var row = ( dt.rows('.active').data()[0]);
	    	$("#frm #id").val(row.id);
	    	$("#frm #username").val(row.username);
	    	$("#frm #nama").val(row.nama);
	    	$("#frm #hp").val(row.hp);
	    	$("#frm #role").val(row.group_id);
	    	$("#frm #is_aktif").val(row.is_aktif);
	    });
	    $(".delete").click(function(){
	    	var row = ( dt.rows('.active').data()[0]);
	    	if(row.username == 'admin'){
	    		alert('You can\'t destroy this');
	    		return false;
	    	}
	    	if(row){
		    	bootbox.confirm("Apakah anda yakin ingin menghapus?", function(result) {
					if (result == true) {
		                $.ajax({
		                	data:{_token:$("#_token").val()},
		                	type:'DELETE',
		                	url:"<?=URL::to('usermanagement')?>/"+row.id,
		                	success:function(r){
				              berforeSendLoading.modal('hide');
				              successDialog.modal('show');
				              dt.ajax.reload();
		    				  $("#frm #id").val(0);
		    				  $("#nama,#password,#username,#hp").val('');
				            },
				            error:function(r){
				              berforeSendLoading.modal('hide');
				              errorDialog.modal('show');
				            },
		                	beforeSend:function(r){
		                	  berforeSendLoading.modal('show');
		                	}
		                });
		            }
				});
		    }
	    });
		$(".save").click(function(){
			var id = $("#id").val();
			var strPost = "POST";
			if(id > 0){ 
				strPost = "PUT"; 
				strId = "/"+id;
			}else{
				strId = '';
			}
			if(id == 0 && !$("#password").val()){
				alert('You must typing password');
				$("#password").focus();
				return false;
			}
	    	$.ajax({
	    		beforeSend:function(){
	    			berforeSendLoading.modal('show');
	    		},
	    		type:strPost,
	    		url:"<?=URL::to('usermanagement')?>"+strId,
	    		data:$("#frm").serialize(),
	    		success:function(r){
	    			berforeSendLoading.modal('hide');
	    			successDialog.modal('show');
	    			dt.ajax.reload();
	    			resetForm();
	    		},
	    		error:function(){
	    			berforeSendLoading.modal('hide');
	    			errorDialog.modal('show');
	    		}	
	    	});
	    });
	    $(".add").click(function(){
	    	resetForm();;
	    });
	    function resetForm () {
	    	$("#id").val(0);
			$("#nama,#password,#hp,#username").val('');
			$("#username").focus();
	    }
	});
</script>