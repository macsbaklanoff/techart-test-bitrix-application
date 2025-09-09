<?php

namespace Local\Components\Resource;

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Data\Connection\Bitrix\Main\DB\Connection;


if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

class NewsList extends \CBitrixComponent
{

    public $dbContext;

    public $currentPage = 1;

    private $countItemsPage = 4;

    private $offset;

    public function executeComponent()
    {
        $this->initResult();
        $this->includeComponentTemplate();
    }

    private function initResult()
    {
        $this->dbContext = \Bitrix\Main\Application::getConnection();
        $this->arResult['lastNews'] = $this->getLastNews();

        $this->currentPage = $this->getPageFromUrl($_SERVER['REQUEST_URI']) ?? 1;
        $this->offset = $this->countItemsPage * $this->currentPage - $this->countItemsPage;
        $newsList = $this->getAllNews($this->countItemsPage, $this->offset);

        foreach ($newsList as &$news) {
            $news['date'] = str_replace('-', '.', explode(' ', $news['date'])[0]);
        }
        unset($news);

        $this->arResult['newsList'] = $newsList;
        $this->arResult['currentPage'] = $this->currentPage;
        $this->arResult['countItemsPage'] = $this->countItemsPage;
        $this->arResult['totalCountNews'] = $this->getCountNews();
    }

    public function getPageFromUrl($requestUri)
    {
        if (preg_match('~^/news-list/page-(\d+)/$~', $requestUri, $matches)) {
            return (int) $matches[1];
        }
    }
    public function getLastNews()
    {
        $data = $this->dbContext->query("SELECT * FROM news ORDER BY id DESC LIMIT 1");
        return $data->fetch();
    }
    public function getAllNews($countItemsPage, $offset): array
    {
        $data = $this->dbContext->query("SELECT * FROM news ORDER BY date DESC LIMIT $countItemsPage OFFSET $offset");
        return $data->fetchAll();
    }

    public function getCountNews()
    {
        $data = $this->dbContext->query("SELECT COUNT(*) as count FROM news");
        return (int)$data->fetch()['count'];
    }

    public static function getUrlPage($page = -1)
    {
        if ($page == -1) return "news-list/";
        return "/news-list/page-$page/";
    }

}