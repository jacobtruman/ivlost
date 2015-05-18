<?php

class Calendar {

	protected $_max_num = 59;
	protected $_image_grid;
	protected $_links = array();
	protected $_ajax = array();
	protected $_start_year = 2001;
	protected $_year;
	protected $_month;

	public function __construct($start_year = null) {
		if ($start_year !== null) {
			$this->_start_year = $start_year;
		}
	}

	protected function _getNums($count = 20) {
		$ret_val = array();
		$i = 0;
		while ($i < $count) {
			if (!in_array($num = $this->_getNum(), $ret_val)) {
				$ret_val[ $i ] = $num;
				$i++;
			}
		}

		return array_chunk($ret_val, 5);
	}

	protected function _getNum() {
		return rand(1, $this->_max_num);
	}

	protected function _buildImageGrid($header = true, $num = 20) {
		$num_array = $this->_getNums($num);
		$grid = array();
		if (isset($num_array)) {
			if($header) {
				$grid[] = "<div style='margin: 25px 0 35px 0;'><img src='images/calvin/candh.png'></div>";
			}
			$grid[] = "<div id='image-grid'>";
			foreach ($num_array as $nums) {
				if (count($nums) == 5) {
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

	public function getImageGrid($header = true, $num = 20) {
		$this->_buildImageGrid($header, $num);
		return $this->_image_grid;
	}

	public function getYearLinks() {
		$this->_buildYearLinks();

		return $this->_links;
	}

	protected function _displayAjax($type) {
		$ret_val = "<script>\n";
		$ret_val .= implode("\n", $this->_ajax[ $type ]);
		$ret_val .= "\n</script>\n";

		return $ret_val;
	}

	protected function _displayLinks($type) {
		$ret_val = "";
		switch($type) {
			case "bios":
			case "year":
				$ret_val = implode("<br />\n", $this->_links[ $type ]);
				break;
			case "months":
				$monthChunks = array_chunk($this->_links[$type], 3);
				$tmp = array();
				$tmp[] = "<div class='month-table'><div class='css-tr'><div class='month-td year'>{$this->_year}</div></div></div>";
				$tmp[] = "<div class='month-table'>";
				foreach($monthChunks as $chunk) {
					$tmp[] = "<div class='css-tr'>\n".implode("\n", $chunk)."\n</div>";
				}
				$tmp[] = "</div>";
				$ret_val = implode("\n", $tmp);
				break;
			case "month":
				$monthChunks = array_chunk($this->_links[$type], 7);
				$monthName = date("F", mktime(0, 0, 0, $this->_month, 10));
				$tmp = array();
				$tmp[] = "<div class='month-table'><div class='css-tr'><div class='month-td month'>{$monthName}, {$this->_year}</div></div></div>";
				$tmp[] = "<div class='month-table'>";
				$tmp[] = "<div class='css-tr'>";
				for($i = 0; $i < 7; $i++) {
					$day = jddayofweek($i, 1);
					$tmp[] = "<div class='month-td bold'>{$day[0]}</div>";
				}
				$tmp[] = "</div>";
				foreach($monthChunks as $chunk) {
					$tmp[] = "<div class='css-tr'>\n".implode("\n", $chunk)."\n</div>";
				}
				$tmp[] = "</div>\n<br />";
				$ret_val = implode("\n", $tmp);
				break;
		}
		
		return $ret_val;
	}

	protected function _addEmptyCells($num) {
		$ret_val = "";
		for($i = 0; $i < $num; $i++) {
			$ret_val .= "<div class='month-td'></div>";
		}
		return $ret_val;
	}

	protected function _buildLinks($type) {
		if (empty($this->_links) || empty($this->_ajax)) {
			switch($type) {
				case "year":
					$end = $this->_start_year + 9;
					for ($i = $this->_start_year; $i <= $end; $i++) {
						$id = "cal-{$i}";
						$this->_links[ $type ][] = "<div class='year'><a href='#{$id}' id='{$id}'>{$i}</a></div>";
						$this->_ajax[ $type ][] = "$(\"#{$id}\").click(function(){
	$.ajax({url: \"calendar_months.php?year={$i}\", success: function(result){
		$(\"#calendar-right\").html(result);
	}});
	loadImageGrid(false);
});";
					}
					/*$this->_links[$type][] = "<div class='year'><a href='http://www.ucomics.com/calvinandhobbes' target='_blank'><img src='images/ucomics.png' border='0'></a></div>";
					$this->_ajax[ $type ][] = "";*/

					$id = "cal-bios";
					$this->_links[$type][] = "<div class='year'><a href='#{$id}' id='{$id}'>BIO'S</a></div>";
					$this->_ajax[ $type ][] = "$(\"#{$id}\").click(function(){
	$.ajax({url: \"bios.php\", success: function(result){
		$(\"#calendar-right\").html(result);
	}});
	loadImageGrid(false);
});";
					break;
				case "months":
					for ($i = 1; $i <= 12; $i++) {
						$monthName = date("M", mktime(0, 0, 0, $i, 10));
						$id = "cal-month-{$i}";
						$this->_links[ $type ][] = "<div class='month-td'><a href='#{$id}' id='{$id}'>{$monthName}</a></div>";
						$this->_ajax[ $type ][] = "$(\"#{$id}\").click(function(){
	$.ajax({url: \"calendar_month.php?year={$this->_year}&month={$i}\", success: function(result){
		$(\"#calendar-mid\").html(result);
	}});
});";
					}
					break;
				case "month":
					$month_days = date("t", mktime(0, 0, 0, $this->_month, 1, $this->_year));
					for ($i = 1; $i <= $month_days; $i++) {
						$day_of_week = date("w", mktime(0, 0, 0, $this->_month, $i, $this->_year));
						if ($i == 1 && $day_of_week != 0) {
							// add empty cells if the first day of the month is not at the beginning of the week
							for($j = 1; $j < ($i - $day_of_week); $j++) {
								$this->_links[ $type ][] = "<div class='month-td'></div>";
							}
						}
						$id = "cal-month-day-{$i}";
						$this->_links[ $type ][] = "<div class='month-td'><a href='#{$id}' id='{$id}'>{$i}</a></div>";
						$this->_ajax[ $type ][] = "";
					}
					break;
				case "bios":
					$bios = $this->_getBios();
					foreach($bios as $character=>$bio) {
						$id = "bio-{$character}";
						$name = ucfirst($character);
						$this->_links[ $type ][] = "<div class='cal-bios'><a href='#{$id}' id='{$id}'>{$name}</a></div>";
						$this->_ajax[ $type ][] = "";
					}
					break;
			}
		}
	}

	public function displayYears() {
		$type = 'year';
		$this->_buildLinks($type);

		return $this->_displayAjax($type) . "\n\n" . $this->_displayLinks($type);
	}

	public function displayMonths($year) {
		$this->_year = $year;
		$type = 'months';
		$this->_buildLinks($type);

		return $this->_displayAjax($type) . "\n\n" . $this->_displayLinks($type);
	}

	public function displayMonth($year, $month) {
		$this->_year = $year;
		$this->_month = $month;
		$type = 'month';
		$this->_buildLinks($type);

		return $this->_displayAjax($type) . "\n\n" . $this->_displayLinks($type) . $this->getImageGrid(false, 15);
	}

	public function displayBios() {
		$type = 'bios';
		$this->_buildLinks($type);

		return $this->_displayAjax($type) . "\n\n" . $this->_displayLinks($type);
	}

	protected function _getBios() {
		$bios = array(
			"calvin"=>"Calvin is named for a sixteenth-century theologian who believed in predestination.
Most people assume that Calvin is based on a son of mine, or based on detailed memories
of my own childhood. In fact, I don't have children, and I was a fairly quiet, obedient
kid -- almost Calvin's opposite. One of the reasons that Calvin's character is fun to
write is that I often don't agree with him. . . .

Many of Calvin's struggles are metaphors for my own. I suspect that most of us get old
without growing up, and that inside every adult (sometimes not very far inside) is a
bratty kid who wants everything his own way. I use Calvin as an outlet for my immaturity,
as a way to keep myself curious about the natural world, as a way to ridicule my own
obsessions, and as a way to comment on human nature. I wouldn't want Calvin in my house,
but on paper, he helps me sort through my life and understand it.",
			"hobbes"=>"Named after a seventeenth-century philosopher with a dim view of human nature, Hobbes has
the patient dignity and common sense of most animals I've met. Hobbes was very much
inspired by one of our cats, a gray tabby named Sprite. Sprite not only provided the long
body and facial characteristics for Hobbes, she also was the model for his personality.
She was good-natured, intelligent, friendly, and enthusiastic in a sneaking-up-and-pouncing
sort of way. Sprite suggested the idea of Hobbes greeting Calvin at the door in midair at
high velocity.

The so-called \"gimmick\" of my strip -- the two versions of Hobbes -- is sometimes
misunderstood. I don't think of Hobbes as a doll that miraculously comes to life when
Calvin's around. Neither do I think of Hobbes as the product of Calvin's imagination. . . .
Calvin sees Hobbes one way, and everyone else sees Hobbes another way. I show two versions
of reality, and each makes complete sense to the participant who sees it. I think that's
how life works. None of us sees the world exactly the same way, and I just draw that
literally in the strip."
		);
		return $bios;
	}
}