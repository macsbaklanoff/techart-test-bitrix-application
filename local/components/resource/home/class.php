<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class Home extends \CBitrixComponent {

    public $dbContext;
    
    public function executeComponent() {
        $this->initResult();
        // $this->includeComponentTemplate();
    }

    private function initResult() {
        $this->dbContext = \Bitrix\Main\Application::getConnection();
        $this->arResult['lastNews'] = $this->getLastNews();
    }

    public function getLastNews()
    {
        $data = $this->dbContext->query("SELECT * FROM news ORDER BY id DESC LIMIT 1");
        
        return $data->fetch();
    }
}