@extends('user.layout.layout')

@section('content')
<div class="row mt">
<div class=" col-md-10 col-md-offset-1">
<div class="showback">

@if($contents->count() == 0)
<h4 class="violet">You've reached KingsVille Homeowners Association. No contents submitted, please add new post. </h4>

@else
@foreach($contents as $c)
<h4 class="violet">{{$c->title}}<span class="badge bg-primary"> Posted: {{$c->created_at}}</span> </h4>

<hr/>
<br/>
{{$c->content}}
<br/>
<span class="badge bg-primary"> Posted by: {{$c->userid}}</span>
<br/><br/>

@endforeach
@endif

</div>
</div>
</div>
@stop