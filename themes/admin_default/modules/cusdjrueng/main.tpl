<!-- BEGIN: vidoco -->

<input type="text" value="" name="dcf">

<button class="dcf">click</button>


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