</head>
<body>
<center>
<?php

$inc = $_REQUEST['inc'];
$year = $_REQUEST['yr'];
$month_num = $_REQUEST['mon'];

$cmon = $_REQUEST['cmon'];
$cday = $_REQUEST['cday'];

$dt = DateTime::createFromFormat('!m', $month_num);
$month_abrev = strtolower($dt->format('M'));
$month_name = $dt->format('F');

$year = $yr;
$cd = date("d");
$cm = date("m");
$cy = date("Y");

$path = "{$year}/{$month_abrev}/";

$firstday = mktime(0, 0, 0, $mon, 1, $year);
$end = date('t', $firstday);

$i = 0;
while ($i <= $end) {
	$i++;
	if (($cday < "$i") & ($cm == $mon) & ($cy == $year)) {
		$img = 'images/0.gif';
	} else {
		$img = $path.$i.'.gif';
	}
	if (!file_exists($img)) {
		$img = 'images/0.gif';
	}

	$size = getimagesize($img);
	$resizew = $size[0];
	$resizel = $size[1] + 2;
	$img_path = base64_encode(json_encode($img));
	$link[$i] = "'pic.php?p={$img_path}',{$resizew},{$resizel}";
}

$days = array();
for($i = 1; $i <= $end; $i++) {
	$days[$i] = array($link[$i], 'linked-day');
}

echo generate_calendar($year, $mon, $days, 1, '', $month_name);

function generate_calendar($year, $mon, $days = array(), $day_heading_length = 3, $mon_href = null, $month_name) {
	$first_of_month = mktime(0, 0, 0, $mon, 1, $year);

	static $day_headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
	$maxdays = date('t', $first_of_month);
	$date_info = getdate($first_of_month);

	//$mon     = $date_info['mon'];
	//$year      = $date_info['year'];

	$calendar = '<table class="calendar">' . "\n";

	$calendar .= '<caption class="month">' .
				 ($mon_href ? '<a href="' . htmlspecialchars($mon_href) . '">' : '') .
				 "$month_name, $year" .
				 ($mon_href ? '</a>' : '') .
				 "</caption>\n";

	if ($day_heading_length > 0 and $day_heading_length <= 4) {
		$calendar .= '<tr>';
		foreach ($day_headings as $day_heading) {
			$calendar .= '<th abbr="' . $day_heading . '" class="dayofweek">' .
						 ($day_heading_length != 4 ? substr($day_heading, 0, $day_heading_length) : $day_heading) .
						 '</th>';
		}
		$calendar .= "</tr>\n";
	}
	$calendar .= '<tr>';

	$weekday = $date_info['wday'];
	$day = 1; #starting day of the month

	if ($weekday > 0) {
		$calendar .= '<td colspan="' . $weekday . '">&nbsp;</td>';
	}

	while ($day <= $maxdays) {
		if ($weekday == 7) {
			$calendar .= "</tr>\n<tr>";
			$weekday = 0;
		}
		if (isset($days[ $day ]) and is_array($days[ $day ])) {
			$d = &$days[ $day ];
			#stupid PHP notices....
			$link = isset($d[0]) ? $d[0] : null;
			$classes = isset($d[1]) ? $d[1] : null;
			$content = isset($d[2]) ? $d[2] : null;

			$calendar .= '<td' . ($classes ? ' class="' . htmlspecialchars($classes) . '">' : '>') .
						 //($link ? '<a href="'.htmlspecialchars($link).'">' : '') .
						 ($link ? '<a href="javascript:loadpage(' . htmlspecialchars($link) . ');">' : '') .
						 (isset($content) ? $content : $day) .
						 ($link ? '</a>' : '') .
						 '</td>';
		} else {
			$calendar .= '<td>' . $day . '</td>';
		}
		$day++;
		$weekday++;
	}
	if ($weekday != 7) {
		$calendar .= '<td colspan="' . (7 - $weekday) . '">&nbsp;</td>';
	}

	return $calendar . "</tr>\n</table>\n";
}

?>
