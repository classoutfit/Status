<?php

class StatusHelper extends AppHelper {

    var $helpers = ['Html'];

    public function status($style = null, $label = null, $url = [], $domElement = 'span')
    {

        $class = !$style
            ? 'label'
            : 'label label-'.$style
        ;

        $output = '<' . $domElement . ' class="'. $class . '">';

        if ($url) {
            $output .= $this->Html->link(
                $label,
                $url
            );
        } else {
            $output .= $label;
        }

        $output .= '</' . $domElement . '>';

        return $output;

    }

}