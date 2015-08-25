@extends('user.layout.layout')
@section('content')
<div class="row mt">
    <div class=" col-md-10 col-md-offset-1">
        @if($contents->count() == 0)
        <div class="showback">
            <h4 class="violet">You've reached KingsVille Homeowners Association. No contents submitted, please add new post. </h4>
        </div>
        @else
        @foreach($contents as $c)
        <div class="showback">
            <div>
                <h4 class="violet">{{$c->title}}</h4>
                <button id="btn-save"class="pull-right btn btn-theme save-{{$c->id}}"  data-url="{{route('User.ajax.store')}}" data-type="contents" data-id="{{$c->id}}"><i class="fa fa-floppy-o"> </i></button>
                <button class="pull-right btn btn-theme edit" data-url="{{route('User.ajax.store')}}" data-type="contents" data-id="{{$c->id}}"><i class="fa fa-edit"> </i></button>

            </div>
            <br/>
            <div class="pull-right">
                <span class="badge bg-primary"> Date: {{$c->created_at}}</span> 

            </div>
            <hr />
            <br/>
            <p class="well well-lg mt editable-{{$c->id}}" contenteditable=false id="value-{{$c->id}}" >
                {{$c->content}}
            </p>
            <br/>
            <br/>
            <div class="pull-right">
                <span class="badge bg-primary"> Posted by: {{$c->user->firstname.' '.$c->user->middlename.' '.$c->user->lastname}}</span>
            </div>
            <br/><br/>
        </div>
        @endforeach
        @endif
    </div>
</div>
@stop