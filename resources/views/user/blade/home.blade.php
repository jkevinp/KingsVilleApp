@extends('user.layout.layout')

@section('content')
	  <div class="row">
               <h5><i class="mdi-action-account-circle"></i> KingsVille Hills Homeowners Association</h5>
        </div>
        
        <div class="row center-align card">
           <div class="col s12 success-info">
               <h5><i class="mdi-navigation-check"></i>
               	@if($contents == null)
               		You've reached KingsVille Homeowners Association. No contents submitted, please add new post.
               	@else
               		@foreach($contents as $c)
               			{{$c->title}} <span class="badge"> Posted: {{$c->created_at}}</span>
               			</h5>
               			<hr/>
               			<br/>
               			{{$c->content}}
               			<br/>
               			 <span class="badge"> Posted by: {{$c->userid}}</span>
               			 <br/><br/>

               		@endforeach
               	@endif
             
           </div>
            
        </div>
		
	
@stop