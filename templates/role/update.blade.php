@extends('role/create')
<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('Update  {0}', Inflector::humanize(f('controller')->getClass())) }}
@stop


@section('form-title')
	<h1>{{ l('Update {0}', Inflector::humanize(f('controller')->getClass())) }}</h1>
@stop
