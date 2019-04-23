<!-- BEGIN: vidoco -->

<form>
	Cá nhân <input type="radio" name="Name" value="Cá nhân" checked/>
	Tổ chức <input type="radio" name="Name" value="Tổ chức" checked/>
	Cá nhân/Tổ chức <input type="radio" name="Name" value="Cá nhân/Tổ chức" checked/>
	<br/>
	<label for="name">Họ và tên:</label>
	<input type="name" class="form-control" id="Họ tên">
	<label for="nameC">Tên công ty:</label>
	<input type="nameC" class="form-control" id="Tên CTY">
	<label for="ADD">Địa chỉ:</label>
	<input type="ADD" class="form-control" id="add">
	<label for="Fax">Số điện thoại:</label>
	<input type="Fax" class="form-control" id="Fax">
	<label for="email">Email:</label>
	<input type="email" class="form-control" id="email">
	<label for="MS">Mã số thuế:</label>
	<input type="MS" class="form-control" id="MS">
	<br/>
	<button class="abc">Submit</button>
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
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
