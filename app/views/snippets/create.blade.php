@extends('layouts.master')

@section('container')
{{ Form:: open(array('url'=>'/', 'class'=>'form')) }}
    {{ Form::textarea('snippet') }}

    {{ HTML::linkRoute("newSnippet", "Reset") }}
    {{ Form::submit('Save') }}
{{ Form::close() }}
@stop