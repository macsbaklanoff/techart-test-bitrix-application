<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Data\Connection\Bitrix\Main\DB\Connection;
use CDatabase;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class DetailNews extends CBitrixComponent {

    public $dbContext;
    
    public function executeComponent() {
        $this->initResult();
        $this->includeComponentTemplate();
    }

    private function initResult() {
        $this->dbContext = Bitrix\Main\Application::getConnection();

        $detailNewsId = $this->getIdFromUrl($_SERVER['REQUEST_URI']);

        $detailNews = $this->getNewsById($detailNewsId);

        $breadCrumbs = [
            ['title' => 'Главная', 'url' => '/news-list/'],
            ['title' => $detailNews['title'], 'url' => '/news-list/' . (string) $detailNews['id']]
        ];

        $detailNews['date'] = str_replace('-', '.', explode(' ', $detailNews['date'])[0]);

        $this->arResult['detailNews'] = $detailNews;
        $this->arResult['breadCrumbs'] = $breadCrumbs;
    }

    public function getIdFromUrl($requestUri) {
        if (preg_match('~^/detail-news/(\d+)/$~', $requestUri, $matches)) {
            return (int)$matches[1];
        }
    }

    public function getNewsById($id) {
        $data = $this->dbContext->query("SELECT * FROM news WHERE id = $id");
        
        return $data->fetch();
    }
}