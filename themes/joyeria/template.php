<?php 
function joyeria_menu_tree__menu_inicio($variables) {

    return '<nav><ul>' . $variables['tree'] . '</ul></nav>';
}

function joyeria_menu_link__menu_inicio(array $variables) {
    $element = $variables['element'];

    $sub_menu = '';

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li>' . $output . $sub_menu . "</li>\n";
}
?>