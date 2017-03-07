@extends('layout')

<?php use ROH\Util\Inflector; ?>

@section('pagetitle')
    {{ l('Create New {0}', Inflector::humanize(f('controller')->getClass())) }}
@stop

@section('customjs')
     <script type="text/javascript" src="<?php echo Theme::base('vendor/jqwidgets/jqwidgets/jqxcore.js') ?>"></script>       
     <script type="text/javascript" src="<?php echo Theme::base('vendor/jqwidgets/jqwidgets/jqxnavigationbar.js') ?>"></script>        
@stop

@section('customcss')
    <link href="<?php echo Theme::base('vendor/jqwidgets/jqwidgets/styles/jqx.base.css') ?>" rel="stylesheet">
    <style>
        .jqx-widget-header{
            background: lightblue;
        }

        .role.submodule{
            padding: 5px!important;
        }

        li{
            display: list-item;
            list-style: none;
        }

    </style>
@stop

@section('main.classes')
    has-actions
@stop

@section('back')
    <ul class="flat left">
        <li><a href="{{ f('controller.url') }}"><i class="xn xn-left-open"></i>{{ l('Back') }}</a></li>
        <li><a href="{{ f('controller.url', '/null/create') }}" class="disable"><i class="xn xn-plus"></i>{{ l('New') }}</a></li>
    </ul>
@stop

@section('tabssearch')
@stop

@section('menu')
@stop



@section('fields')


    <form method="post" id="createform" class="read">
        @section('form-title')
        <h1>{{ l('Create New {0}', Inflector::humanize(f('controller')->getClass())) }}</h1>
        @show
        <div class="row">

            <div class="span-12 medium-12">
                            <div class="row {{ (f('notification.message', 'name') AND $app->request->getMethod() !== 'GET') ? 'tooltip-text required' : ''}}">
                                {{ f('controller')->schema()['name']->label()}}
                                {{ $entry->format('name', 'input') }}
                                <span class="tooltip bottom">{{ f('notification.message', 'name') }}</span>
                            </div>
            </div>
            <div class="row">
                <div class="span-12 medium-12 previleges" id="navigationbar">
                  @foreach($previlege as $key => $value)
                    <div>{{$key}}</div>
                    <div>
                        <?php $count = 0 ?>
                        @foreach($value as $k => $v )
                            @if($count % 3 == 0)
                                <div class="row role submodule">
                            @endif
                                <div class="span-4">
                                    <div class="span-12"><label>{{$k}}</label></div>
                                    <div class="span-12">
                                    <ul>
                                    @foreach($v as $action =>$data)
                                        <li>
                                            <label>
                                                @if($data['exists'])
                                                    <input type="checkbox" value="{{$data['uri']}}" name="rule[]" checked />
                                                @else
                                                    <input type="checkbox" value="{{$data['uri']}}" name="rule[]"/>
                                                @endif
                                                
                                                {{$action}}
                                            </label>
                                        </li>

                                    @endforeach
                                    </ul>
                                    </div>
                                </div>
                                <?php $count++; ?>
                            @if($count % 3 == 0 || count($value) == $count)
                                </div>
                            @endif
                            

                        @endforeach

                    </div>

                  @endforeach

            </div>
            

            
        </div>
        <input type="submit" value="Submit" class="hidden" />
    </form>

    <script type="text/javascript">
    
 $(function(){
        $("#navigationbar").jqxNavigationBar({width:'100%', expandMode: 'toggle'});

 });

</script>
@stop

@section('contextual.content')
    <nav class="row">
        <div class="pull-left">
            <input type="reset" value="Reset" class="button" onclick="$('#createform').reset ()" />
        </div>
        <div class="pull-right">
            <input type="submit" value="Save" class="button solid" onclick="$('#createform').submit ()" />
            <input type="submit" value="Save and Stay" class="button solid success" onclick="$('#createform').submit ()" />
        </div>
    </nav>
@stop
