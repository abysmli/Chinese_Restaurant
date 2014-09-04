@extends('backend/backend_layout')

@section('content')
<ul class="breadcrumbs">
  <li><a href="/backend">Home</a></li>
  <li class="current"><a href="#">Meta</a></li>
</ul>
<div id="error_indicator"></div>

<h3>Meta</h3>

<table>
  <thead>
    <tr style="text-align: center;">
      <th width="50">ID</th>
      <th>Option Name</th>
      <th>Option Value</th>
      <th width="150">Operation</th>
    </tr>
  </thead>
  <tbody id="meta_table">
    @foreach($metas as $meta)
    <tr>
      <td id="table_id">{{ $meta->id }}</td>
      <td id="table_option_name">{{ $meta->option_name }}</td>
      <td id="table_option_value">{{ $meta->option_value }}</td>
      <td><a href="#edit_meta">edit</a><a style="margin-left:10px" href="#delete_meta">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a id="add_new_meta_button" href="#" class="button" data-reveal-id="MetaModal">Add new Meta</a>
<a id="remove_all_meta_button" href="#" class="button [secondary alert alert]">Remove All</a>

<div id="MetaModal" class="reveal-modal" data-reveal>
  <h2 id="modal_title"></h2>
  <form id="meta_form">
    <div class="row">
      <div class="large-12 columns">
        <label>Option Name
          <input id="option_name" type="text" placeholder="Option Name" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Option Value
          <input id="option_value" type="text" placeholder="Option Value" />
        </label>
      </div>
    </div>
    <hr/>
    <input id="meta_button" type="submit" class="button right" value="Send"/>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script>
  $(document).ready(function(){
    var send_model_flag = 0, _this, _id;
    $('#add_new_meta_button').click(function(){
      send_model_flag = 0;
      $('#modal_title').text('Add a new Meta');
      $("#option_value").val("");
      $("#option_name").val("");
    });

    $('#meta_form').submit(function(e){
      e.preventDefault();
      $('#meta_button').prop("disabled",true);
      var mData = {
        option_value: $("#option_value").val(),
        option_name: $("#option_name").val(),
      };
      if (!send_model_flag) {
        sendAjax('add_meta', mData, function(result){
          $('#meta_button').prop("disabled",false);
          if(result.status=="OK") {
            $("#meta_table").append(    
              '<tr>'+
              '<td id="table_id">'+result.data.id+'</td>'+
              '<td id="table_option_name">'+result.data.option_name+'</td>'+
              '<td id="table_option_value">'+result.data.option_value+'</td>'+
              '<td><a href="#edit_meta">edit</a><a style="margin-left:10px" href="#delete_meta">delete</a>'+
              '</td>'+
              '</tr>');
            $('#MetaModal').foundation('reveal', 'close');
          } else {
            showError(result);
            $('#MetaModal').foundation('reveal', 'close');
          }
        });
      } else {
        mData.id = _id;
        sendAjax('update_meta', mData, function(result){
          $('#meta_button').prop("disabled",false);
          if(result.status=="OK") {
            $(this).parent().siblings('#table_id').text(result.data.id);
            $(this).parent().siblings('#table_option_name').text(result.data.option_name);
            $(this).parent().siblings('#table_option_value').text(result.data.option_value);
            $('#MetaModal').foundation('reveal', 'close');
          } else {
            showError(result);
            $('#MetaModal').foundation('reveal', 'close');
          }
        }, _this);
      }
    });

    $("tbody").on('click',"a[href='#delete_meta']", function(){
      var mData = {
        id: parseInt($(this).parent().siblings('#table_id').text())
      };
      sendAjax('remove_meta', mData, function(result){
        if(result.status=="OK") {
          $(this).parent().parent('tr').remove();
        } else {
          showError(result);
          $('#MetaModal').foundation('reveal', 'close');
        }
      }, this);
    });

    $("tbody").on('click',"a[href='#edit_meta']", function(){
      send_model_flag=1;
      $('#modal_title').text('Edit the Meta');
      $("#option_name").val($(this).parent().siblings('#table_option_name').text());
      $("#option_value").val($(this).parent().siblings('#table_option_value').text());
      $('#MetaModal').foundation('reveal', 'open');
      _this=this;
      _id = parseInt($(this).parent().siblings('#table_id').text());
    });

    $("#remove_all_meta_button").click(function(){
      if(confirm("Are you sure to remove all records?")) {
        sendAjax('removeall_meta', null, function(result){
          if(result.status=="OK") {
            $('#meta_table').html("");
          } else {
            showError(result);
            $('#MetaModal').foundation('reveal', 'close');
          }
        });
      } 
    });
  });
</script>
@stop
