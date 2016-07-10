<?php

class StatusHelper extends AppHelper {

	var $helpers = ['Html'];
	
	public function status($style = null, $label = null, $url = []) {
	
		$class = !$style
			? 'label'
			: 'label label-'.$style
		;
		
		$output = '<span class="'.$class.'">';
		
		if ($url) {
			$output .= $this->Html->link(
				$label,
				$url
			);
		} else {
			$output .= $label;
		}

		$output .= '</span>';

		return $output;
	
	}
	
}