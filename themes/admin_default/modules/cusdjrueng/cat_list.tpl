<!-- BEGIN: main -->
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>TITLE</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
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
		</tbody>
	</table>
	
	
<!-- END: main -->