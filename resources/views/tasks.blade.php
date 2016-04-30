@extends('layout.app')

@section('content')

<div class="panel-body">
	@include('common.errors')

	<!-- New form -->
	<form action="{{ url('task') }}" method="POST" class="form-horizontal">
	{!! csrf_field() !!}

	<!-- Task name -->
		<div class="form-group">
			<label for="task" class="col-sm-3 control-label">Task</label>

			<div class="col-sm-6">
				<input type="text"´name="name" id="task-name" class="form-control"></input>

			</div>

			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="subit"class="btn btn-default">
						<i class="fa fa-plus">Add Task</i>
					</button>
				</div>
			</div>
		</div>


	</form>

</div>
@endsection