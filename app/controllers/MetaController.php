<?php
/*
 |============================================================================
 | Author      : Li, Yuan
 | File        : MetaController.php
 | email       : abysmli@gmail.com
 | Version     : 1.0
 | Copyright   : All rights reserved by Li, Yuan
 | Description : 
 |     MetaController Class is used to controll the itemcatagorys from model 
 | Meta
 |
 |============================================================================
 */

 class MetaController extends BaseController {
 	public function getMeta() {
 		$metas = Meta::get();
 		return View::make('backend/metas')->with('metas', $metas)->with('title', 'Backend - Meta')->with('page', '3');
 	}

 	public function addMeta() {
 		if (Request::ajax()) {
 			$meta = new Meta;
 			$meta->option_name = $_POST['option_name'];
 			$meta->option_value = $_POST['option_value'];
 			try
 			{
 				$meta->save();
 				return Response::json($this->JSONMaker('OK', Meta::orderBy('id','desc')->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by add meta!'));
 			}
 		}
 	}

 	public function updateMeta() {
 		if (Request::ajax()) {
 			try
 			{
 				Meta::where('id',$_POST['id'])->update(array(
 					'option_name'=>$_POST['option_name'],
 					'option_value'=>$_POST['option_value']));
 				return Response::json($this->JSONMaker('OK', Meta::where('id',$_POST['id'])->first()));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by edit item category!'));
 			}
 		}
 	}

 	public function removeMeta() {
 		if (Request::ajax()) {
 			$meta = Meta::where('id', $_POST['id']);
 			try
 			{
 				$meta->delete();
 				return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 			}
 			catch(Exception $exception)
 			{
 				return Response::json($this->JSONMaker('Error', 'Error occurred by remove item category!'));
 			}
 		}
 	}

 	public function removeAllMeta() {
 		if (Request::ajax()) {
 			try {
 				Meta::truncate();
 			} catch(Exception $exception) {
 				return Response::json($this->JSONMaker('Error', $exception->getMessage()));
 			}
 			return Response::json($this->JSONMaker('OK', 'Deleted Successfully'));
 		}
 	}
 	
 }
