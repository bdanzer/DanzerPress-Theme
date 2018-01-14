<?php

function danzerpress_sections_header() {
	return include(locate_template('template-parts/content-header.php' ));
}

function danzerpress_sections_footer() {?>
		</div>
	</div>
<?php }

function danzerpress_sections_buttons() {
	
}

function danzerpressSectionClass($array) {
	foreach ($array as $value) {
		echo $value . ' ';
	}
}
function danzerpress_push($values, $array) {
	if (is_array($values)) {
		foreach ($values as $value) {
			if (!in_array($value, $array)) {
		   		array_push($array, $value);
		   	}
	   	}
	} else {
		if (!in_array($values, $array)) {
	   		array_push($array, $values);
	   	}
	}
}

?>