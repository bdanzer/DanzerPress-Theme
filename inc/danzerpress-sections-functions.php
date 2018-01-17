<?php

function danzerpress_sections_header() {
	return include(locate_template('template-parts/content-header.php' ));
}

function danzerpress_sections_footer() {?>
		</div>
	</div>
<?php }

function danzerpressSectionClass($array) {
	foreach ($array as $value) {
		echo $value . ' ';
	}
}
