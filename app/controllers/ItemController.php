<?php
/*
 |============================================================================
 | Author      : Li, Yuan
 | File        : ItemController.php
 | email       : abysmli@gmail.com
 | Version     : 1.0
 | Copyright   : All rights reserved by Li, Yuan
 | Description : 
 |     ItemController Class is used to controll the items from model Item
 |
 |============================================================================
 */

 class ItemController extends BaseController {
 	public function getItem() {
 		$items = Item::get();
 		$categorys = ItemCategory::select('id', 'group', 'name_de', 'name_cn')->get();
 		return View::make('backend/items')->with('items', $items)->with('categorys', $categorys)->with('title', 'Backend - Item')->with('page', '2');
 	}

 	public function addItem() {
 		if (Request::ajax()) {
 			$item = new Item;
 			$item->description = $_POST['description'];
 			$item->name_de = $_POST['name_de'];
 			$item->name_cn = $_POST['name_cn'];
 			$item->price = $_POST['price'];
 			$item->image_main = $_POST['image_main'];
 			$item->image_thumb = $_POST['image_thumb'];
 			$item->images = $_POST['images'];
 			$item->category_id = $_POST['category_id'];
 			try
 			{
 				$item->save();
 				return Response::json($this->JSONMaker('OK', Item::orderBy('id','desc')->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by add item!'));
 			}
 		}
 	}

 	public function updateItem() {
 		if (Request::ajax()) {
 			try
 			{
 				Item::where('id',$_POST['id'])->update(array(
 					'description'=>$_POST['description'],
 					'name_de'=>$_POST['name_de'],
 					'name_cn'=>$_POST['name_cn'],
 					'price'=>$_POST['price'],
 					'image_main'=> $_POST['image_main'],
 					'image_thumb'=> $_POST['image_thumb'],
 					'images'=> $_POST['images'],
 					'category_id'=>$_POST['category_id']));
 				return Response::json($this->JSONMaker('OK', Item::where('id',$_POST['id'])->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by edit item!'));
 			}
 		}
 	}

 	public function removeItem() {
 		if (Request::ajax()) {
 			$item = Item::where('id', $_POST['id']);
 			try
 			{
 				$item->delete();
 				return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by remove item!'));
 			}
 		}
 	}

 	public function removeAllItem() {
 		if (Request::ajax()) {
 			try {
 				Item::truncate();
 			} catch(Exception $exception) {
 				return Response::json($this->JSONMaker('Error', $exception->getMessage()));
 			}
 			return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 		}
 	}

 }
