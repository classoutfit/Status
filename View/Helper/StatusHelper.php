<?php
class StatusHelper extends AppHelper {

    var $helpers = ['Html'];

    public function status($status = [], $url = [], $domElement = 'span')
    {

        $class = empty($status['style'])
            ? 'label'
            : 'label label-'.$status['style']
        ;

        $label = '<i class="fa ' . $status['icon'] . '"></i>' . $status['title'];

        $output = '<' . $domElement . ' class="'. $class . '">';

        if ($url) {
            $output .= $this->Html->link(
                $label,
                $url,
                ['escape' => false]
            );
        } else {
            $output .= $label;
        }

        $output .= '</' . $domElement . '>';

        return $output;

    }

}
