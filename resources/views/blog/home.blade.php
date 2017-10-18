@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
@stop

@section('content')
<div class="container">
	<div class="row">       
        <div class="col-md-12">
        <h4> Blog Database <button class="btn btn-primary" data-title="Create" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-plus"></span></button> </h4> 
        <div class="table-responsive">                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th><input type="checkbox" id="checkall" /> </th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Address</th>
                      <th>Create</th>
                      <th>Edit</th>                      
                      <th>Delete</th>
                   </thead>
                    <tbody>

                    @foreach($blogs as $blog)
                      <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{{$blog->fname}}</td>
                        <td>{{$blog->lname}}</td>
                        <td>{{$blog->address}}</td>
                        
                        <td><p data-placement="top" data-toggle="tooltip" title="view"><button class="btn btn-primary btn-xs view" data-id="{{ $blog->id }}" data-title="View" data-toggle="modal" data-target="#view" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs edit" data-id="{{ $blog->id }}" data-title="Edit" data-toggle="modal" data-target="#edit" data-id="2"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs delete" data-id="{{ $blog->id }}" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                    @endforeach  

                    </tbody>
                        
                </table>
                <div class="clearfix"></div>
            </div>
            
        </div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <form id="blogForm" action="{{ url('blog') }}" method="post">
              {{ csrf_field() }}
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                <input class="form-control " type="text" name="fname">
                </div>
                <div class="form-group">
                
                <input class="form-control " type="text" name="lname">
                </div>
                <div class="form-group">
                <textarea rows="2" class="form-control" name="address"></textarea>   
                
                </div>
              </div>
                  <div class="modal-footer ">
                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update </button>
                  </div>
          </form>
    </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>


<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">View Detail</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                  <div class="fname">
                    <p></p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="lname">
                    <p></p>
                  </div>              
                </div>
                <div class="form-group">
                    <div class="address">
                    <p></p>
                  </div>               
                </div>
              </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>   
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success deleteId" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

@endsection

@section('footer')
<script>
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    $("[data-toggle=tooltip]").tooltip();
}); 

$(document).ready(function(){
  
  $(".view").click(function(){
    var Item = $(this).data('id');
    var url = "{{ url('blog') }}/" + Item;
      $.ajax({
        type : 'GET',
        url : url,
        success: function(msg){
          $(".fname p").html(msg.fname);
          $(".lname p").html(msg.lname);
          $(".address p").html(msg.address);
        }
      });
  });
  
  

  var deleteItem= 0;

  $(".delete").click(function(){
     deleteItem = $(this).data('id');      
  });

  $(".deleteId").click(function(){
    var url = "{{ url('blog') }}/" + deleteItem;
      $.ajax({
        type : 'post',
        url : url,
        data: {
          _method: 'DELETE',
          _token : "{{ csrf_token() }}"
        },
        success: function(msg){
          window.location.reload();
        }
      });
  });


});

</script>

@stop

