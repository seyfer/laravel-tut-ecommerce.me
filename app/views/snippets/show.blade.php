@extends('layouts.master')

@section('container')
<pre class="prettyprint linenums">{{{ $snippet }}}</pre>
{{ HTML::linkRoute("forkSnippet", "Fork", array("id" => $id)) }}
{{ HTML::linkRoute("newSnippet", "New") }}
@stop

@section('scripts')
prettyPrint();
@stop