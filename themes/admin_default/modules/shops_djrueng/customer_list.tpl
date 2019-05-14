<!-- BEGIN: main -->

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>TITLE</th>
			<th>ACTION</th>
		</tr>
		<!-- BEGIN: loop -->
			<tr>
				<td>{DATA.id}</td>
				<td>{DATA.title}</td>
				<td>
					<a href="{DATA.url_edit}">edit</a> - 
					<a href="{DATA.url_del}">Delete</a>
				</td>
			</tr>

			<!-- END: loop -->
	</thead>
</table>
<!-- END: main -->




<!-- END: main -->