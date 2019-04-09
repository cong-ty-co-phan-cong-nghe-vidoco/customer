<!-- BEGIN: vidoco -->

<form method="" name="">
	<input type="radio" name="checkbox" value="" checked="checked" />&nbsp;Cá nhân
	<input type="radio" name="checkbox" value="" checked="checked" />&nbsp;Tổ chức<br /><br />
	<label>Họ và tên:</label>&nbsp;<input type="text" name="text" value="" /><br /><br />
	<label>Tên công ty</label>:&nbsp; <input class="form-control" type="text" name="text" value="" /><br /><br />
	<label>Địa chỉ</label>:&nbsp; <input type="text" name="text" value="" /><br /><br />
	<label>Mã số thuế</label>:&nbsp; <input type="text" name="text" value="" /><br /><br />
	<label>Số điện thoại</label>:&nbsp; <input type="text" name="text" value="" /><br /><br />
	<label>Email</label>:&nbsp; <input type="text" name="text" value="" /><br /><br />
	<button>Submit</button>
</form>



<script type="text/javascript">
	

	$(".dcf").click(function (){
	var mod=$('input[name="cus"]').val();
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(), 'mod=' + mod, function(res) {
			console.log(res);
		});
	});
	
	
</script>

<!-- END: vidoco --> 
<!-- BEGIN: customer -->

<!-- BEGIN: cat -->
{CAT}
<!-- END: cat -->

<input type="radio" name="checkbox" value="Cá nhân" checked="checked" />Cá nhân

<input type="text" value="" name="cus">
<input type="text" value="" name="id">
<button class="dcf">click</button>


<script type="text/javascript">

	
	$(".dcf").click(function (){
		var mod=$('input[name="cus"]').val();
		var id=$('input[name="id"]').val();
		console.log(mod);
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(),'mod=' + mod + '&id=' + id, function(res) {
			console.log(res);
		});
	});
	
	
</script>
<!-- END: customer --> 