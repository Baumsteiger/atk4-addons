<?php
namespace tree;
class MultiMenu extends TreeView {
    public $use_template = "treemenu";
    function addMenuItem($page, $title, $ref = null){
        $current = false;
        $p = (string)$this->api->url($page);
        if ($this->api->page == $page){
            $current = true;
        }
        return $this->addItem(array("page" => $p, "title" => $title, "current" => $current), $ref);
    }
    function defaultTemplate(){
        return array("multimenu");
    }
}
