@extends('layouts.master')

@section('container')
<pre class="prettyprint linenums">{{{ $snippet }}}</pre>

<div class="btn-group snippet-nav">
    {{ HTML::linkRoute("forkSnippet", "Fork", array("id" => $id),
            array("class" => "btn btn-warning")) }}
    {{ HTML::linkRoute("newSnippet", "New", array(), array("class" => "btn btn-success")) }}
</div>

@stop

@section('scripts')
<script>prettyPrint();</script>
@stop