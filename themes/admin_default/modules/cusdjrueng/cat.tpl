<!--BEGIN: main-->
<!-- BEGIN: error -->
{ERROR}
<!-- END: error -->

<form method="POST" name="" action="{ACTION}">
	<div>
		<label>{LANG.cat_title}:</label>
		<input type="text" name="title" value="" />
	</div>
	<div>
		<label>{LANG.alias}:</label>
		<input type="text" name="alias" value="" />
	</div>
	<div>
		<label>{LANG.catid}:</label>
		<select name="catid">
			<option>{LANG.cat_choose}</option>
			<!--BEGIN: cat-->
				<option value="{CAT.id}" {CAT.selected}>{CAT.title}</option>
			<!--END: cat-->
		</select>
	</div>
	
	<div>
		<input name="save" type="hidden" value="1" />
		<input name="submit" type="submit" value="{LANG.save}">
	</div>
	
	
</form>

<!--END: main-->

