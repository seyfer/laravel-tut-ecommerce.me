@extends('layouts.master')

@section('container')
{{ Form:: open(array('url'=>'/', 'class'=>'form')) }}
{{ Form::textarea('snippet', $snippet) }}

{{ HTML::linkRoute("newSnippet", "Reset") }}
{{ Form::submit('Save') }}
{{ Form::close() }}

<script>
    $('textarea').tabby();
</script>
@stop

