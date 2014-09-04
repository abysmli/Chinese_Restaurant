@extends('backend/backend_layout')

@section('content')
<ul class="breadcrumbs">
  <li><a href="/backend">Home</a></li>
  <li class="current"><a href="#">Item Category</a></li>
</ul>

<h3>Item Category</h3>

<table>
  <thead>
    <tr style="text-align: center;">
      <th width="50">ID</th>
      <th>Group</th>
      <th>German Name</th>
      <th>Chinese Name</th>
      <th>Is German</th>
      <th>Is Chinese</th>
      <th width="150">Operation</th>
    </tr>
  </thead>
  <tbody id="itemcategory_table">
    @foreach($itemcategorys as $itemcategory)
    <tr>
      <td id="table_id">{{ $itemcategory->id }}</td>
      <td id="table_group">{{ $itemcategory->group }}</td>
      <td id="table_name_de">{{ $itemcategory->name_de }}</td>
      <td id="table_name_cn">{{ $itemcategory->name_cn }}</td>
      <td id="table_is_de">{{ $itemcategory->is_de }}</td>
      <td id="table_is_cn">{{ $itemcategory->is_cn }}</td>
      <td><a href="#edit_itemcategory">edit</a><a style="margin-left:10px" href="#delete_itemcategory">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a id="add_new_itemcategory_button" href="#" class="button" data-reveal-id="ItemCategoryModal">Add new Item Category</a>
<a id="remove_all_itemcategory_button" href="#" class="button [secondary alert alert]">Remove All</a>

<div id="ItemCategoryModal" class="reveal-modal" data-reveal>
  <h2 id="modal_title"></h2>
  <form id="itemcategory_form">
    <div class="row">
      <div class="large-12 columns">
        <label>Group
          <input id="group" type="text" placeholder="group" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Germany Name
          <input id="name_de" type="text" placeholder="Germany Name" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Chinese Name
          <input id="name_cn" type="text" placeholder="Chinese Name" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Is German
          <select id="is_de">
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
        </label>
      </div>
      <div class="large-12 columns">
        <label>Is Chinese
          <select id="is_cn">
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
        </label>
      </div>
    </div>
    <hr/>
    <input id="itemcategory_button" type="submit" class="button right" value="Send"/>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script>
  $(document).ready(function(){
    var send_model_flag = 0, _this, _id;
    $('#add_new_itemcategory_button').click(function(){
      send_model_flag = 0;
      $('#modal_title').text('Add a new Item Category');
      $("#group").val("");
      $("#name_de").val("");
      $("#name_cn").val("");
      $("#is_de").val("1");
      $("#is_cn").val("1");
    });

    $('#itemcategory_form').submit(function(e){
      e.preventDefault();
      $('#itemcategory_button').prop("disabled",true);
      var mData = {
        group: $("#group").val(),
        name_de: $("#name_de").val(),
        name_cn: $("#name_cn").val(),
        is_de: $("#is_de").val(),
        is_cn: $("#is_cn").val(),
      };
      if (!send_model_flag) {
        sendAjax('add_itemcategory', mData, function(result){
          $('#itemcategory_button').prop("disabled",false);
          if(result.status=="OK") {
            $("#itemcategory_table").append(    
              '<tr>'+
              '<td id="table_id">'+result.data.id+'</td>'+
              '<td id="table_group">'+result.data.group+'</td>'+
              '<td id="table_name_de">'+result.data.name_de+'</td>'+
              '<td id="table_name_cn">'+result.data.name_cn+'</td>'+
              '<td id="table_is_de">'+result.data.is_de+'</td>'+
              '<td id="table_is_cn">'+result.data.is_cn+'</td>'+
              '<td><a href="#edit_itemcategory">edit</a><a style="margin-left:10px" href="#delete_itemcategory">delete</a>'+
              '</td>'+
              '</tr>');
            $('#ItemCategoryModal').foundation('reveal', 'close');
          } else {
            showError(result);
          }
        });
      } else {
        mData.id = _id;
        sendAjax('update_itemcategory', mData, function(result){
          $('#itemcategory_button').prop("disabled",false);
          if(result.status=="OK") {
            $(this).parent().siblings('#table_id').text(result.data.id);
            $(this).parent().siblings('#table_group').text(result.data.group);
            $(this).parent().siblings('#table_name_de').text(result.data.name_de);
            $(this).parent().siblings('#table_name_cn').text(result.data.name_cn);
            $(this).parent().siblings('#table_is_de').text(result.data.is_de);
            $(this).parent().siblings('#table_is_cn').text(result.data.is_cn);
            $('#ItemCategoryModal').foundation('reveal', 'close');
          } else {
            showError(result);
          }
        }, _this);
      }
    });

$("tbody").on('click',"a[href='#delete_itemcategory']", function(){
  var mData = {
    id: parseInt($(this).parent().siblings('#table_id').text())
  };
  sendAjax('remove_itemcategory', mData, function(result){
    if(result.status=="OK") {
      $(this).parent().parent('tr').remove();
    }else {
      showError(result);
    }
  }, this);
});

$("tbody").on('click',"a[href='#edit_itemcategory']", function(){
  send_model_flag=1;
  $('#modal_title').text('Edit the Item Category');
  $("#group").val($(this).parent().siblings('#table_group').text());
  $("#name_de").val($(this).parent().siblings('#table_name_de').text());
  $("#name_cn").val($(this).parent().siblings('#table_name_cn').text());
  $("#is_de").val($(this).parent().siblings('#table_is_de').text());
  $("#is_cn").val($(this).parent().siblings('#table_is_cn').text());
  $('#ItemCategoryModal').foundation('reveal', 'open');
  _this=this;
  _id = parseInt($(this).parent().siblings('#table_id').text());
});

$("#remove_all_itemcategory_button").click(function(){
  if(confirm("Are you sure to remove all records?")) {
    sendAjax('removeall_itemcategory', null, function(result){
      if(result.status=="OK") {
        $('#itemcategory_table').html("");
      } else {
        showError(result);
      }
    });
  } 
});
});
</script>
@stop
