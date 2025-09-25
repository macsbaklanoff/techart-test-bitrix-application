<style>
    h1 {
        grid-column: 2/-2;
    }
</style>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Test");
$officeTulaInfo = 'Офис в Туле <br>
        300041, г. Тула, ул. Ф. Смирнова ул., д. 28, оф. 601-602, 701, 703-707, 712 <br>
        Тел. / Факс: (4872) 250-450, 57-05-0';
$officeMoscowInfo = 'Офис в Москве <br>  
        115230, г. Москва, Варшавское шоссе, д. 47, к. 4, оф. 1224 (12 этаж). <br>
        Тел. / Факс: (495) 933-62-10';
?>
<h1>Мы на карте</h1>
<?=
    \TAO::frontend()->renderBlock(
        'common/tab',
        [
            'officeTulaInfo' => $officeTulaInfo,
            'officeMoscowInfo' => $officeMoscowInfo,
        ],
    )
    ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>