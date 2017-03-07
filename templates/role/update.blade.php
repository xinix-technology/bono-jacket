@extends('role/create')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('Update {0}', Inflector::humanize(f('controller')->getClass())) }}
@stop
