@extends('layouts.app')

@section('content')
<div class="row">
	
<div class="col-md-6 col-md-offset-3">

<div class="panel panel-default">
	<div class="panel-heading">
		<h1>Upload a book</h1>
		</div>
<div class="panel-body">



<form method="POST" action="/books" enctype="multipart/form-data">

{{ csrf_field() }}
	<div class="form-group">
            <label class="col-md-3 control-label" name="resume">Upload pdf:</label>
            <div class="col-md-8">
                <input  type="file" id="book" placeholder="Book" name="book" class=""/>
            </div>
           <input  type="text" id="filepath" placeholder="Book Name" name="filepath" class=""/>
	<label for="content"> Content Description </label>
	<TEXTAREA name="content" class="form-control"></TEXTAREA>
	<input type="submit" onclick="uploadFile();" class="btn btn-success pull-right">
</form>
	
	</div>
</div>

</div>
	

</div>

</div>
@endsection