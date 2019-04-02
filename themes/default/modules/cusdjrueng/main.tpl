<!-- BEGIN: vidoco -->

<input type="text" value="" name="cdf">
<input type="text" value="" name="abc">
<input type="text" value="" name="id">
<button class="abc">Click</button>

<script type="text/javascript">
	var mod=$('input[name="abc"]').val();
	$(".abc").click(function (){
		$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' 
		+ nv_fc_variable + '=ajax&nocache=' + new Date().getTime(), 'title=' 
		+ encodeURIComponent(title) + '&mod=' + mod + '&id=' + id, function(res) {
			console.log(res);
		});
	});
</script>
<!-- END: vidoco --> 
<!-- BEGIN: main -->
{LANG.main_cat}
<!-- BEGIN: cat -->
{CAT}
<!-- END: cat -->



<input type="text" value="" name="cdf">
<input type="text" value="" name="abc">
<input type="text" value="" name="id">
customer VIdoco Main
<!-- BEGIN: func -->
{FUNC}
<!-- END: func -->
<!-- END: main --> 