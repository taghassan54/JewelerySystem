{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('img', 'Img:') !!}
			{!! Form::text('img') !!}
		</li>
		<li>
			{!! Form::label('materials_id', 'Materials_id:') !!}
			{!! Form::text('materials_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}