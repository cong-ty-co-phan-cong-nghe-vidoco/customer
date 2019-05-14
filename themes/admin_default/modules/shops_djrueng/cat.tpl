<!-- BEGIN: main -->


<!-- BEGIN: error -->
{ERROR}
<!-- END: error -->

<form method="POST" name="" action="{ACTION}">
	<div>
		<label>{LANG.cat_title}:</label>
		<input class="form-control" type="text" name="title" value="{ROW.title}"/>
	</div>
	<div>
		<label>{LANG.alias}:</label>
		<input class="form-control" type="text" name="alias" value="{ROW.alias}" />
	</div>
	<div>
		<label>{LANG.catid}:</label>
		<select class="form-control" name="catid">
			<option>{LANG.cat_choose}</option>
			<!-- BEGIN: cat -->
				<option value="{CAT.id}" {CAT.selected}>{CAT.title}</option>
			<!-- END: cat -->
		</select>
	</div>
	<div>
		<input name="save" type="hidden" value="1" />
		<input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}"> 
	</div>
</form>

<!-- END: main -->
