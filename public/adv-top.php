<?php
// adv-top.php — включай/выключай рекламу одной строчкой
$ADV_ENABLED = true;  // false — реклама отключится полностью

if ($ADV_ENABLED):
    $adv_url = "https://t.leads.tech/click/401/686/";      // ← сюда ссылку
    $adv_img = "https://sun6-21.userapi.com/Kz1wtMj4XfR-I0yRlbNR7u8TNNMJSnidPmTcGw/deFGDWcQ8i8.jpg"; // ← сюда баннер
?>
<div class="adv-top">
    <a href="<?=$adv_url?>" rel="nofollow" target="_blank">
        <img src="<?=$adv_img?>" alt="Реклама" loading="lazy" style="max-width:100%;height:auto;border:none">
    </a>
</div>
<?php endif; ?>
