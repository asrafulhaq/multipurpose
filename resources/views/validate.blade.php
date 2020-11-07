@if( $errors -> any() )
    <p class="alert alert-danger">{{ $errors -> first() }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif

@if( Session::has('success') )
    <p class="alert alert-success">{{ Session::get('success') }} <button data-dismiss="alert" class="close">&times;</button></p>
@endif
