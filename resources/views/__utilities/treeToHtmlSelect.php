<?php
function treeToHtmlSelect($treeDecrypted, $branch = 0, $className = null)
{
    $select = '';
    if($branch === 0) $select .= '<select class="'.$className.'" aria-label="page list">';
    if($branch === 0) $select .= '<option value="null" style="font-weight:bold;color:red;">root</option>';
    foreach($treeDecrypted[$branch] as $twig)
    {
        if($branch == 0)
        {
            $select .= '<option value="'.$twig->id.'" style="font-weight: bold;">'. $twig->name .'</option>';
        }
        else
        {
            $select .= '<option value="'.$twig->id.'">'. $twig->name .'</option>';
        }
        if(isset($treeDecrypted[$twig->id])) $select .= treeToHtmlSelect($treeDecrypted, $twig->id);
    }
    if($branch === 0) $select .= '</select>';
    return html_entity_decode($select);
}
function treeToHtmlUl($treeDecrypted, $branch = 0)
{
    $ul = '';
    if($branch === 0) $ul = '';



    return $ul;
}
