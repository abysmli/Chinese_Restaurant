<?php
/*
 |============================================================================
 | Author      : Li, Yuan
 | File        : ItemCategoryController.php
 | email       : abysmli@gmail.com
 | Version     : 1.0
 | Copyright   : All rights reserved by Li, Yuan
 | Description : 
 |     ItemCategoryController Class is used to controll the itemcatagorys from
 | model ItemCategory
 |
 |============================================================================
 */

 class ItemCategoryController extends BaseController {
 	public function getItemCategory() {
 		$itemcategorys = ItemCategory::get();
 		return View::make('backend/itemcategorys')->with('itemcategorys', $itemcategorys)->with('title', 'Backend - Item Category')->with('page', '1');
 	}

 	public function addItemCategory() {
 		if (Request::ajax()) {
 			$itemcategory = new ItemCategory;
 			$itemcategory->group = $_POST['group'];
 			$itemcategory->name_de = $_POST['name_de'];
 			$itemcategory->name_cn = $_POST['name_cn'];
 			$itemcategory->is_de = $_POST['is_de'];
 			$itemcategory->is_cn = $_POST['is_cn'];
 			try
 			{
 				$itemcategory->save();
 				return Response::json($this->JSONMaker('OK', ItemCategory::orderBy('id','desc')->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by add item category!'));
 			}
 		}
 	}

 	public function updateItemCategory() {
 		if (Request::ajax()) {
 			try
 			{
 				ItemCategory::where('id',$_POST['id'])->update(array(
 					'group'=>$_POST['group'],
 					'name_de'=>$_POST['name_de'],
 					'name_cn'=>$_POST['name_cn'],
 					'is_de'=>$_POST['is_de'],
 					'is_cn'=>$_POST['is_cn']));
 				return Response::json($this->JSONMaker('OK', ItemCategory::where('id',$_POST['id'])->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by edit item category!'));
 			}
 		}
 	}

 	public function removeItemCategory() {
 		if (Request::ajax()) {
 			$itemcategory = ItemCategory::where('id', $_POST['id']);
 			try
 			{
 				$itemcategory->delete();
 				return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by remove item category!'));
 			}
 		}
 	}

 	public function removeAllItemCategory() {
 		if (Request::ajax()) {
 			try {
 				ItemCategory::truncate();
 			} catch(Exception $exception) {
 				return Response::json($this->JSONMaker('Error', $exception->getMessage()));
 			}
 			return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 		}
 	}
 }
