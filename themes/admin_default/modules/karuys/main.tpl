<!-- BEGIN: vidoco -->

<input type="text" value="" name="abc">aa

<button class="abc">click</button>


<script type="text/javascript">
	var mod=$('input[name="abc"]').val();
	$(".abc").click(function (){
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(), 'title=' + encodeURIComponent(title) + '&mod=' + mod + '&id=' + id, function(res) {
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
<button class="abc">click</button>
<script type="text/javascript">
	
	$(".abc").click(function (){
		var mod=$('input[name="dcf"]').val();
		var id=$('input[name="id"]').val();
		console.log(mod);
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=ajax&nocache=' + new Date().getTime(),'mod=' + mod + '&id=' + id, function(res) {
			console.log(res);
		});
	});
	
	
</script>
<!-- END: main --> 