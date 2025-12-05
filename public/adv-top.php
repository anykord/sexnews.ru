<?php
// adv-top.php — включай/выключай рекламу одной строчкой
$ADV_ENABLED = true;  // false — реклама отключится полностью

if ($ADV_ENABLED):
    $adv_url = "https://your-adv-link.com/xyz";      // ← сюда ссылку
    $adv_img = "https://your-host.com/adv/728x90.jpg"; // ← сюда баннер
?>
<div class="adv-top">
    <a href="<?=$adv_url?>" rel="nofollow" target="_blank">
        <img src="<?=$adv_img?>" alt="Реклама" loading="lazy" style="max-width:100%;height:auto;border:none">
    </a>
</div>
<?php endif; ?>