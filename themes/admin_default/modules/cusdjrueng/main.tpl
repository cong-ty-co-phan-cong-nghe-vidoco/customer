<!-- BEGIN: vidoco -->

<form method="POST" name="" action="">
	<input type="radio" name="personal" value="" checked="checked" 
	class="form-check-input" id="exampleRadios2" />&nbsp;Cá nhân
	<input type="radio" value="" checked="checked" name="personal" />&nbsp;Tổ chức&nbsp;
	<input type="radio" name="personal" value="" checked="checked">&nbsp;Cả 2<br />
	<label>Họ và tên:</label> <input type="text" name="full-name" class="form-control" placeholder="Full name">
	<label>Tên công ty</label>:&nbsp; <input type="text" class="form-control" name="company" value="" />
	<label>Địa chỉ</label>:&nbsp; <input type="text" name="adress" class="form-control" value="" />
	<label>Mã số thuế</label>:&nbsp; <input type="text" name="tax-code" class="form-control" value="" />
	<label>Số điện thoại</label>:&nbsp; <input type="text" name="phone-number" value="" class="form-control" /><br />
	<label for="exampleInputEmail1" class="col-md-10">Email</label>:&nbsp; 
	<input type="text"  value="" 
		class="form-control col-md-14" id="exampleInputEmail1" name="email-adress" /><br />
	<button>Submit</button>
	

</form>



<script type="text/javascript">
	

	$(".dcf").click(function (){
	var mod=$('input[name="dcf"]').val();
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(), 'mod=' + mod, function(res) {
			console.log(res);
		});
	});
	
	
</script>

<!-- END: vidoco --> 
<!-- BEGIN: main -->

<!-- BEGIN: cat -->
{CAT}
<!-- END: cat -->

<input type="radio" name="checkbox" value="Cá nhân" checked="checked" />Cá nhân

<input type="text" value="" name="dcf">
<input type="text" value="" name="id">
<button class="dcf">click</button>


<script type="text/javascript">

	
	$(".dcf").click(function (){
		var mod=$('input[name="dcf"]').val();
		var id=$('input[name="id"]').val();
		console.log(mod);
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(),'mod=' + mod + '&id=' + id, function(res) {
			console.log(res);
		});
	});
	
	
</script>
<!-- END: main --> 