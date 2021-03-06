<div class="form-group">
    {{ Form::label($name ?: 'body', $label ?: 'Contenido', ['class' => 'control-label']) }}
    {{ Form::textarea($name ?: 'body', null) }}
</div>

@section('javascript')
	<script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script>
	<script type="text/javascript">		

		CKEDITOR.config.height = 100;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace("{{ $name ?: 'body' }}");

		/**
		 * //cdn.ckeditor.com/4.10.0/standard/ckeditor.js
		 * //cdn.ckeditor.com/4.10.0/full/ckeditor.js
		**/
	</script>
@endsection