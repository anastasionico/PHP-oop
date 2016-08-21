<?php
	class vehicle{
		public $num_wheel;
		public $model;

		public function __construct($num_wheel,$model){
			$this->num_wheel = $num_wheel;
			$this->model = $model;
		}
		public function get_attribute(){
			return $this->model ." has ". $this->num_wheel . " wheels"; 
		}
		
		public function is_bike(){
			if($num_wheel < 2){
				return  $this->model." is a bike";
			}
		}
		
	}
?>