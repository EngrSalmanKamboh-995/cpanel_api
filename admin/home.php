<?php

	/**
	 * 
	 */
	class Home
	{
		
		public function index(){

			$render = $this->__render();
			echo json_encode($render);
		}



		public function __render($data = array()){

						

		}

	}