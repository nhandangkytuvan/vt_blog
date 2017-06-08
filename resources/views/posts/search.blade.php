<div class="panel panel-default">
	<div class="panel-heading">Bộ lọc</div>
	<div class="panel-body">
		<form action="{{ url('posts') }}" method="get">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="term_id" class="form-control">
					<option value="0">Chọn</option>
					{{ APITerm::getOptionSelectBladePost($terms,Request::input('term_id')) }}
				</select>
			</div>
			<div class="form-group">
				<label for="">Tên bài</label>
				<input type="text" name="name" class="form-control" placeholder="{{ Request::input('name') }}">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i> Tìm bài</button>
			</div>
		</form>
	</div>
</div>