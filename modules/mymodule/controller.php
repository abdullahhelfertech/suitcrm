<?php



if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class mymoduleController extends SugarController
{
    public function action_hello(){
        echo ("heello");
      }
}