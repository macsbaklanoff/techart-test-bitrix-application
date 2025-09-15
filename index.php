<style>
.main_content {
  grid-column: 2/-2;
}

.news_header_headline {
  margin: 0;
  margin-top: 50px;
  font-family: 'OpenSans-SemiBold';
  font-size: 64px;
  color: #000;
}

.button_more {
  display: grid;
  grid-template-columns: min-content min-content;
  column-gap: 10px;
  align-items: center;
  justify-content: center;
  margin: 0;
  width: 214px;
  height: 54px;
  background-color: #FFF;
  color: #841844;
  border: 2px #9B407A solid;
  font-family: 'OpenSans-SemiBold';
  font-size: 16px;
  text-transform: uppercase;
  border-radius: 50px;
}

.button_more:hover {
  background-color: #841844;
  color: #FFF;
  transition: 250ms;
  cursor: pointer;
}

.button_more:hover .more-arrow {
  content: url('/upload/icons/arrow-more-hover.png');
  transition: 250ms;
}
</style>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?>

<div class="main_content">
    <h4 class="news_header_headline">Новости</h4>
    <button class="button_more" onclick="window.location.href = '/news'">
        Подробнее
        <img class="more-arrow" src="/upload/icons/arrow-more.png">
    </button>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>