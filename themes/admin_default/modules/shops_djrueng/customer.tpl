<!-- BEGIN: vidoco-->
<form method="POST" action="{ACTION}">
	<input type="hidden" value="10" name="save">
	
	<input type="radio" name="checkbox" value="0" checked="checked" />&nbsp;Cá nhân
	<input type="radio" name="checkbox" value="1" />&nbsp;Tổ chức<br /><br />
	
	<label>Họ và tên:</label>:&nbsp;
	<input type="text" name="full_name" value="{ROW.title}" class="form-control" /><br /><br />
	<label>Tên công ty</label>:&nbsp;<input class="form-control" type="text" name="company" value="{ROW.company}" /><br /><br />
	<label>Địa chỉ</label>:&nbsp;<input class="form-control" type="text" name="address" value="{ROW.address}" /><br /><br />
	<label>Mã số thuế</label>:&nbsp;<input class="form-control" type="text" name="mst" value="{ROW.tax}" /><br /><br />
	<label>Số điện thoại</label>:&nbsp;<input class="form-control" type="text" name="phone" value="" /><br /><br />
	<label>Email</label>:&nbsp;<input class="form-control" type="text" name="email" value="" /><br /><br />
	<button>Submit</button>
</form>


<script type="text/javascript">
	$(".dcf").click(function(){
		var mod=$('input[name="cus"]').val();
			$.post(script_name + '?' + nv_name_variable + '=' +nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(), 'mod=' + mod, function(res){
				console.log(res);
			});
	});
</script>

<!-- END: vidoco-->

<!--BEGIN: customer-->

<!--BEGIN: cat-->
	{CAT}
<!--END: cat-->

<input type="radio" name="checkbox" value="Cá nhân" checked="checked" />Cá nhân

<input type="text" value="" name="cus">
<input type="text" value="" name="id">

<script type="text/javascript">
	$(".dcf").click(function(){
		var mod=$('input[name="cus"]').val();
		var id=$('input[name="id"]').val();
		console.log(mod);
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(),'mod=' + mod + '&id=' + id, function(res){
			console.log(res);
		});
	});
</script>

<!--END: customer-->