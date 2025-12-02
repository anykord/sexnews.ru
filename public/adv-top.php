<?php
// adv-top.php — включай/выключай одной строчкой
$ADV_ENABLED = true; // false = выключить
if ($ADV_ENABLED):
    $adv_url = "https://your-adv-link.com/xyz";
    $adv_img = "https://your-host.com/adv/728x90.jpg";
?>
<div class="adv-top">
    <a href="<?=$adv_url?>" rel="nofollow" target="_blank">
        <img src="<?=$adv_img?>" alt="Реклама" loading="lazy" style="max-width:100%;height:auto;border:none">
    </a>
</div>
<?php endif; ?>