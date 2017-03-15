@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible no-radius">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ $errors->first() }}
    </div>
@endif