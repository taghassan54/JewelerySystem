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
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('categories_id', 'Categories_id:') !!}
			{!! Form::text('categories_id') !!}
		</li>
		<li>
			{!! Form::label('matrial_weight', 'Matrial_weight:') !!}
			{!! Form::text('matrial_weight') !!}
		</li>
		<li>
			{!! Form::label('caliber_id', 'Caliber_id:') !!}
			{!! Form::text('caliber_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}