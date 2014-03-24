@extends('layouts.master')

@section('container')
{{ Form:: open(array('url'=>'/', 'class'=>'form-horizontal')) }}
{{ Form::textarea('snippet', $snippet, array('class' => 'form-control')) }}

<div class="btn-group snippet-nav">
    {{ HTML::linkRoute("newSnippet", "Reset", array(), array("class" => "btn btn-danger")) }}
    {{ Form::submit('Save', array("class" => "btn btn-success")) }}
</div>

{{ Form::close() }}
@stop

@section('scripts')
<script>
    $('textarea').tabby();
    $('textarea').height($(window).height() - 50);
</script>
@stop

