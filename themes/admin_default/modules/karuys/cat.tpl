<!-- BEGIN: main -->
<!-- BEGIN: view -->
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>
				{LANG.weight}
			</th>
			<th>
				{LANG.cat_title}
			</th>
			<th>
				{LANG.action}
			</th>
		</tr>
	</thead>
	<tbody>
		<!-- BEGIN: cat -->
		<tr>
			<td>
				<select>
					<!-- BEGIN: weight -->
					<option value="{WEIGHT.id}" >{WEIGHT.id}</option>
					<!-- END: weight -->
				</select>
			</td>
			<td>
				<a href="{CAT.linksub}">{CAT.title}</a>
			</td>
			<td>
				<a href="{CAT.linkedit}" >{LANG.edit}</a> - <a href="{CAT.linkdelete}">{LANG.del}</a>
			</td>
		</tr>
		<!-- END: cat -->
	</tbody>
</table>
<!-- END: view -->
<!-- BEGIN: error -->
{ERROR}
<!-- END: error -->
<!-- BEGIN: form -->
<form method="POST" name="" action="{ACTION}">
	<div>
		<label for="text">{LANG.cat_title}:</label>
		<input type="text" class="form-control" id="{ROW.title}">
	</div>
	<div>
		<label for="text">{LANG.alias}:</label>
		<input type="text" class="form-control" id="{ROW.alias}">
	</div>
	<div>
		<label>{LANG.catid}:</label>
		<select name="catid">
			<option>{LANG.cat_choose}</option>
			<!-- BEGIN: cat -->
				<option value="{CAT.id}" {CAT.selected}>{CAT.title}</option>
			<!-- END: cat -->	
		</select>
	</div>
	<div>
		<input name="save" type="hidden"  value="1"/>
		<input name="submit" type="submit"  value="{LANG.save}"/>
	</div>
</form>
<!-- END: form -->
<!-- END: main --> 