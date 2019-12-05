{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('invoices_id', 'Invoices_id:') !!}
			{!! Form::text('invoices_id') !!}
		</li>
		<li>
			{!! Form::label('prodects_id', 'Prodects_id:') !!}
			{!! Form::text('prodects_id') !!}
		</li>
		<li>
			{!! Form::label('Quantity', 'Quantity:') !!}
			{!! Form::text('Quantity') !!}
		</li>
		<li>
			{!! Form::label('amount', 'Amount:') !!}
			{!! Form::text('amount') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}