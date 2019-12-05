{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('clients_id', 'Clients_id:') !!}
			{!! Form::text('clients_id') !!}
		</li>
		<li>
			{!! Form::label('supplier_id', 'Supplier_id:') !!}
			{!! Form::text('supplier_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}