<!-- BEGIN main -->
<form method="POST" name="" action="{ACTION}">
	<div>
		<label>{LANG.cat_title}:</label>
		<input type="text" name="category_name" value="" />
	</div>
	<div>
		<label>{LANG.alias}:</label>
		<input type="text" name="category_alias" value="" />
	</div>
	<div>
		<label>{LANG.catid}:</label>
		<select name="catid">
			<option>Chọn danh mục</option>
			<-- BEGIN: cat-->
				<option value="{CAT.id}" {CAT.title}>{CAT.title}</option>
			<-- END: cat-->
		</select>
	</div>
	<div>
		<input name="submit" type="submit" value="{LANG.save}"/>
	</div>
</form>
<!-- END main -->