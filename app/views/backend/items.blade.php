@extends('backend/backend_layout')

@section('content')
<ul class="breadcrumbs">
  <li><a href="/backend">Home</a></li>
  <li class="current"><a href="#">Item</a></li>
</ul>
<div id="error_indicator"></div>

<h3>Item</h3>

<table>
  <thead>
    <tr style="text-align: center;">
      <th width="50">ID</th>
      <th width="200">Image</th>
      <th>German Name</th>
      <th>Chinese Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category ID</th>
      <th width="150">Operation</th>
    </tr>
  </thead>
  <tbody id="item_table">
    @foreach($items as $item)
    <tr>
      <td id="table_id">{{ $item->id }}</td>
      <td id="table_image"><a class="th"><img src="{{ $item->image_thumb }}"></a></td>
      <td id="table_name_de">{{ $item->name_de }}</td>
      <td id="table_name_cn">{{ $item->name_cn }}</td>
      <td id="table_description">{{ $item->description }}</td>
      <td id="table_price">{{ $item->price }}</td>
      <td id="table_category_id">{{ $item->category_id }}</td>
      <td><a href="#edit_item">edit</a><a style="margin-left:10px" href="#delete_item">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a id="add_new_item_button" href="#" class="button" data-reveal-id="ItemModal">Add new Item</a>
<a id="remove_all_item_button" href="#" class="button [secondary alert alert]">Remove All</a>

<div id="ItemModal" class="reveal-modal" data-reveal>
  <h2 id="modal_title"></h2>
  <form id="item_form">
    <div class="row">
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
        <label>Description
          <input id="description" type="text" placeholder="Description" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Price
          <input id="price" type="text" placeholder="Price" />
        </label>
      </div>
      <div class="large-12 columns">
        <label>Category
          <select id="category_id">
            @foreach($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->group }} | {{ $category->name_de }}  | {{ $category->name_cn }}</option>
            @endforeach
          </select>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="large-6 columns">
        <label>Main Image
          <input id="image_main" type="file" onchange="previewFile('#image_main_preview','#image_main','#image_main_preview_block')"/>
        </label>
        <a id="image_main_preview_block" class="th" href="#">
          <img id="image_main_preview" src="" alt="Image preview...">
        </a>
      </div>
      <div class="large-6 columns">
        <label>Thumb Image
          <input id="image_thumb" type="file" onchange="previewFile('#image_thumb_preview','#image_thumb','#image_thumb_preview_block')"/>
        </label>
        <a id="image_thumb_preview_block" class="th" href="#">
          <img id="image_thumb_preview" src="" alt="Image preview...">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <label>Images
          <input id="images" type="file" onchange="previewMultiFile('#images')" multiple/>
        </label>
        <ul id="multi_preview" style="pointer-events: none; cursor: default;" class="clearing-thumbs small-block-grid-4" data-clearing></ul>
      </div>
    </div>
    <hr/>
    <input id="item_button" type="submit" class="button right" value="Send"/>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<script>
  var _image_main="", _image_thumb="", _images=[];
  $(document).ready(function(){
    var send_model_flag = 0, _this, _id;

    $('#image_main_preview_block').hide();
    $('#image_thumb_preview_block').hide();

    $('#add_new_item_button').click(function(){
      send_model_flag = 0;
      $('#modal_title').text('Add a new Item');
      $("#name_de").val("");
      $("#name_cn").val("");
      $("#description").val("");
      $("#price").val("");
      $("#category_id").val("1");
      $("#image_main").val("");
      $("#image_thumb").val("");
      $("#images").val("");
      $('#image_main_preview_block').hide();
      $('#image_thumb_preview_block').hide();
      $('#multi_preview').html("");
    });

    $('#item_form').submit(function(e){
      e.preventDefault();
      $('#item_button').prop("disabled",true);
      var mData = {
        name_de: $("#name_de").val(),
        name_cn: $("#name_cn").val(),
        description: $("#description").val(),
        price: $("#price").val(),
        category_id: $("#category_id").val(),
        image_main: _image_main,
        image_thumb: _image_thumb,
        images: JSON.stringify(_images),
      };
      if (!send_model_flag) {
        sendAjax('add_item', mData, function(result){
          $('#item_button').prop("disabled",false);
          if(result.status=="OK") {
            $("#item_table").append(    
              '<tr>'+
              '<td id="table_id">'+result.data.id+'</td>'+
              '<td id="table_image"><a class="th"><img src="'+result.data.image_thumb+'"></a></td>'+
              '<td id="table_name_de">'+result.data.name_de+'</td>'+
              '<td id="table_name_cn">'+result.data.name_cn+'</td>'+
              '<td id="table_description">'+result.data.description+'</td>'+
              '<td id="table_price">'+result.data.price+'</td>'+
              '<td id="table_category_id">'+result.data.category_id+'</td>'+
              '<td><a href="#edit_item">edit</a><a style="margin-left:10px" href="#delete_item">delete</a>'+
              '</td>'+
              '</tr>');
            $('#ItemModal').foundation('reveal', 'close');
          } else {
            showError(result);
            $('#ItemModal').foundation('reveal', 'close');
          }
        });
      } else {
        mData.id = _id;
        sendAjax('update_item', mData, function(result){
          $('#item_button').prop("disabled",false);
          if(result.status=="OK") {
            $(this).parent().siblings('#table_id').text(result.data.id);
            $(this).parent().siblings('#table_image').children('a').children('img').attr('src', result.data.image_thumb);
            $(this).parent().siblings('#table_name_de').text(result.data.name_de);
            $(this).parent().siblings('#table_name_cn').text(result.data.name_cn);
            $(this).parent().siblings('#table_description').text(result.data.description);
            $(this).parent().siblings('#table_price').text(result.data.price);
            $(this).parent().siblings('#table_category_id').text(result.data.category_id);
            $('#ItemModal').foundation('reveal', 'close');
          } else {
            showError(result);
            $('#ItemModal').foundation('reveal', 'close');
          }
        }, _this);
      }
    });

    $("tbody").on('click',"a[href='#delete_item']", function(){
      var mData = {
        id: parseInt($(this).parent().siblings('#table_id').text())
      };
      sendAjax('remove_item', mData, function(result){
        if(result.status=="OK") {
          $(this).parent().parent('tr').remove();
        } else {
          showError(result);
          $('#ItemModal').foundation('reveal', 'close');
        }
      }, this);
    });

    $("tbody").on('click',"a[href='#edit_item']", function(){
      send_model_flag=1;
      $('#modal_title').text('Edit the Item');
      $("#name_de").val($(this).parent().siblings('#table_name_de').text());
      $("#name_cn").val($(this).parent().siblings('#table_name_cn').text());
      $("#description").val($(this).parent().siblings('#table_description').text());
      $("#price").val($(this).parent().siblings('#table_price').text());
      $("#category_id").val($(this).parent().siblings('#table_category_id').text());
      $("#image_main").val("");
      $("#image_thumb").val("");
      $("#images").val("");
      $('#image_main_preview_block').hide();
      $('#image_thumb_preview_block').hide();
      $('#multi_preview').html("");
      $('#ItemModal').foundation('reveal', 'open');
      _this=this;
      _id = parseInt($(this).parent().siblings('#table_id').text());
    });

    $("#remove_all_item_button").click(function(){
      if(confirm("Are you sure to remove all records?")) {
        sendAjax('removeall_item', null, function(result){
          if(result.status=="OK") {
            $('#item_table').html("");
          } else {
            showError(result);
            $('#ItemModal').foundation('reveal', 'close');
          }
        });
      } 
    });
  });

  function previewFile(img_id, input_id, block_id) {
    var preview = document.querySelector(img_id);
    var file    = document.querySelector(input_id).files[0];
    var reader  = new FileReader();
    reader.onloadend = function () {
      preview.src = reader.result;
      $(block_id).fadeIn();
      if(input_id=='#image_main') {
        _image_main = reader.result;
      } else {
        _image_thumb = reader.result;
      }
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }

  function previewMultiFile(input_id) {
    _images = [];
    var files = document.querySelector(input_id).files;
    for(var i=0; i< files.length; i++) {
      (function(file) {
        var reader  = new FileReader();
        reader.onloadend = function (e) {
          $('#multi_preview').append('<li><a class="th"><img src="'+e.target.result+'"></a></li>');
          _images.push(e.target.result);
        }
        if (file) {
          reader.readAsDataURL(file);
        }
      })(files[i]);
    };
  }

</script>
@stop