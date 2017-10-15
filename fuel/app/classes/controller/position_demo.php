<?php

class Controller_PositionDemo extends Controller {
	
	public function action_list_postion() {
// 		$position_model = new Model_Postion();
		$entry = Model_Position::find('all');
	}
}