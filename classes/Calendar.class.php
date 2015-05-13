<?php

class Calendar {

	protected $_max_num = 59;
	protected $_image_grid;

	public function __construct() {

	}

	protected function _getNums($count = 20) {
		$ret_val = array();
		$i = 0;
		while($i < $count) {
			if(!in_array($num = $this->_getNum(), $ret_val)) {
				$ret_val[ $i ] = $num;
				$i++;
			}
		}
		return array_chunk($ret_val, 5);
	}

	protected function _getNum() {
		return rand(1, $this->_max_num);
	}

	public function buildImageGrid($num = 20) {
		$num_array = $this->_getNums($num);
		$grid = array();
		if(isset($num_array)) {
			$grid[] = "<div style='margin: 25px 0 35px 0;'><img src='images/calvin/candh.png'></div>";
			$grid[] = "<div id='image-grid'>";
			foreach($num_array as $nums) {
				if(count($nums) == 5) {
					$grid[] = "<div class='grid-image-row'>";
					foreach ($nums as $num) {
						$grid[] = "<div class='grid-image'><img src='images/calvin/little/{$num}.png'></div>";
					}
					$grid[] = "</div>";
				}
			}
			$grid[] = "</div>";
		}
		$this->_image_grid = implode("\n", $grid);
	}

	public function getImageGrid() {
		return $this->_image_grid;
	}

	public function getYearLinks($start = 2001) {
		$links = array();
		$end = $start + 9;
		for($i = $start; $i <= $end; $i++) {
			$links[] = "<a href='#cal-{$i}' id='cal-{$i}'>{$i}</a>";
		}
		return $links;
	}
}