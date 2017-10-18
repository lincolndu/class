@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
@stop


@section('content')
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="modal-content">

		          <form action="{{ url('blog') . '/' . $blog->id }}" method="post">
		          <input name="_method" type="hidden" value="PUT">

		              {{ csrf_field() }}
		              <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
		              </div>
		              <div class="modal-body">
		                  <div class="form-group">
		                <input class="form-control " type="text" name="fname" value="{{$blog->fname}}">
		                </div>
		                <div class="form-group">
		                
		                <input class="form-control " type="text" name="lname" value="{{$blog->lname}}">
		                </div>
		                <div class="form-group">
		                <textarea rows="2" class="form-control" name="address">{{$blog->address}}</textarea>   
		                
		                </div>
		              </div>
		                  <div class="modal-footer ">
		                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update </button>
		                  </div>
		          </form>
		</div>
	</div>
</div>

@endsection