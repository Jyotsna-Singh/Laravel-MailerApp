@extends('welcome')

@section('content')

<div class="container">
    <div class="row"style="margin-top: 10px;">
    	<div class="col-sm-12">
       		 <h1 class="text-center">Laravel Mailer App</h1>
            @if(Session::has('flashmessage'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ Session::get('flashmessage') }}</strong>
            </div>
          @endif
       	</div>
        <div class="col-sm-12">
       		 <form action="{{ url('mail/sendmail') }}" method="POST" class="form-horizontal" role="form">
       		 	<input type="hidden" name="_token" value="{{csrf_token() }}"> 
       		 	 <div class="form-group">
       		 	 	<legend style="color:#e2e2e2;">Send an email to anyone</legend>
    			 </div>
    			 <div class="form-group">
       		 	 	<label for="email">Sending to who?</label>
       		 	 	<input type="email" name="email" value="{{ Input::old('email') }}" class="form-control" placeholder="Type an email address">
    			 </div>
    			  <div class="form-group">
       		 	 	<label for="subject">Subject</label>
       		 	 	<input type="text" name="subject" value="{{ Input::old('subject') }}" class="form-control" placeholder="Type a subject">
    			 </div>
    			  <div class="form-group">
       		 	 	<label for="message">Message</label>
       		 	 	<textarea rows="5" cols="20" id="message" name="message" value="{{ Input::old('message') }}" class="form-control ckeditor" placeholder="Type a message"></textarea>
    			 </div>
    			 <div class="form-group">
       		 	 	<div class="col-sm-10">
       		 	 		<button type="submit" class="btn btn-primary">Submit</button>
       		 	 	</div>
    			 </div>
       		 </form>
       	</div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
        @if(Session::has('errors'))
        @foreach($errors->all() as $error) 
          
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $error }}</strong>
        </div>
            @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
@stop