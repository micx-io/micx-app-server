<?php
/**
 * Created by PhpStorm.
 * User: matthes
 * Date: 4/28/18
 * Time: 3:35 PM
 */

namespace Micx\Modules\Template\Element;


use HtmlTheme\Elements\HtmlContainerElement;

class TemplateContainerElement extends HtmlContainerElement implements TemplateNode
{
    use TemplateTrait;

    /**
     * @return TemplateContainerElement[]
     */
    public function getChildren()
    {
        return parent::getChildren(); // TODO: Change the autogenerated stub
    }
}