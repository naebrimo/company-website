<?php
function treeToHtmlSelect($treeDecrypted, $branch = 0, $level = 0, $className = null)
{
    $select = '';
    if($branch === 0) $select .= '<select class="'.$className.'" aria-label="page list">';
    if($branch === 0) $select .= '<option value="null" style="font-weight:bold;color:green;">page root</option>';
    foreach($treeDecrypted[$branch] as $twig)
    {
        $style = ($branch == 0) ? 'style="font-weight: bold;"' : '';
        $select .= '<option value="'.$twig->id.'" '.$style.'>'.insertHtmlElement($level). $twig->name .'</option>';
        if(isset($treeDecrypted[$twig->id])) $select .= treeToHtmlSelect($treeDecrypted, $twig->id, $level+1);
    }
    if($branch === 0) $select .= '</select>';
    return html_entity_decode($select);
}
function treeToHtmlUl($treeDecrypted, $branch = 0, $link = null)
{
    $ul = '<ul class="text-capitalize">';
    foreach($treeDecrypted[$branch] as $twig)
    {
        $ul .= '<li>';
            if(!is_null($link)) $ul .= '<a href="'.route($link, $twig->id).'">';
                $ul .= $twig->name;
            if(!is_null($link)) $ul .= '</a>';
            if(isset($treeDecrypted[$twig->id])) $ul .= treeToHtmlUl($treeDecrypted, $twig->id, $link);
        $ul .= '</li>';
    }
    $ul .= '</ul>';
    return $ul;
}
function insertHtmlElement($iteration, $element = null)
{
    if($iteration > 0) $element = (is_null($element)) ? '*' : $element;
    for($i = 0; $i < $iteration - 1; $i++)
    {
        $element .= $element;
    }
    return $element;
}
