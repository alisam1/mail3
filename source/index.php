<?php
if (in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'], true)) {
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
}
$availableGeoCodes = [
  "af", "ar", "bn", "en", "es", "fa", "fl", "fr", "hi", "id", "hg",
  "ms", "pt", "ro", "ru", "th", "ti", "tr", "vi", "rm", "ua", "zh", "ku", "so"
];
if (isset($_GET['geocode']) && in_array($_GET['geocode'], $availableGeoCodes, true)) {
  $geoCode = $_GET['geocode'];
} else {
  $geoCode = 'en';
}

if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/system/instruction_small_3/translate/{$geoCode}.php")) {
  die();
}
//if (isset($_GET['voluumdata'])) {
$exitLink = "http://lestsbane-sockgles.com/click";
//} else {
//    $exitLink = "http://lestsbane-sockgles.com/";
//}
if (isset($_GET['dsp']) && $_GET['dsp'] === '1') {
  $exitLink = "https://www.cwzpvo.com/click";
}
if (isset($_GET['nolink'])) {
  $exitLink = 'https://olymptrade.com';
}
if (isset($_GET['multioffer']) && $_GET['multioffer'] === '1') {
  $multiOffer = true;
  $instructionOffer1 = $exitLink . "/9";
  $instructionOffer2 = $exitLink . "/10";
} else {
  $instructionOffer1 = $exitLink;
  $instructionOffer2 = $exitLink;
}
if (isset($_GET['pltf'])) {
  if ($_GET['pltf'] === "ios") {
    $platform = 'ios';
    $imagePlatform = 'ios';
  } else {
    if ($_GET['pltf'] === "android") {
      $platform = 'android';
      $imagePlatform = 'ios';
    } else {
      $platform = 'desktop';
      $imagePlatform = 'desktop';
    }
  }
} else {
  $platform = 'desktop';
  $imagePlatform = 'desktop';
}

if (isset($_GET['tmpl-1']) && $_GET['tmpl-1'] == '1') {
  $tmpl = 'dark';
} else {
  $tmpl = 'white';
}

$instructionText = include $_SERVER['DOCUMENT_ROOT'] . "/system/instruction_small_3/translate/{$geoCode}.php";
?>
<style>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/system/instruction_small_3/source/style.css' ?>
  <?php if ($geoCode === 'ar' || $geoCode === 'fa' || $geoCode === 'ku') : ?>
  html {
    direction: rtl;
  }

  <?php endif; ?>
</style>

<header class="page_header container">
  <h1 class="page_title"><?= $instructionText['instruction-first-paragraph'] ?></h1>
</header>

<main>
  <section class="main_content container">
    <div class="content_block">
<div class="cont__instruction_small">
  <?php if(!empty($instructionText['instruction-p-1'])) { ?>
    <div class="content_block">
      <p class="content_info"><?= $instructionText['instruction-p-1'] ?></p>
      <p class="content_info"><?= $instructionText['instruction-p-2'] ?></p>
    </div>
  <?php } ?>
</div>
  <div class="content_block">
    <p class="content_info"><?= $instructionText['instruction-step-1'] ?></p>
    <div class="content_instruction">
      <div class="instruction_img"><img src="/system/instruction_small_3/img/<?= $tmpl ?>/Select.gif"></div>
      <div class="instruction_description">
        <p class="instruction_info"><?= $instructionText['instruction-info-1'] ?></p>
      </div>
    </div>
  </div>

  <div class="content_block">
    <p class="content_info"><?= $instructionText['instruction-step-2'] ?></p>
    <div class="content_instruction">
      <div class="instruction_description">
        <p class="instruction_info"><?= $instructionText['instruction-p-3'] ?> <span class="green"><?= $instructionText['instruction-color-1'] ?></span> <?= $instructionText['instruction-p-4'] ?> <span class="green"><?= $instructionText['instruction-color-2'] ?></span>:</p>
      </div>
      <div class="instruction_img"><img src="/system/instruction_small_3/img/<?= $tmpl ?>/Green.gif"></div>
    </div>
    <div class="content_instruction content_instruction--low">
      <div class="instruction_img"><img src="/system/instruction_small_3/img/<?= $tmpl ?>/Red.gif"></div>
      <div class="instruction_description">
        <p class="instruction_info"><?= $instructionText['instruction-p-5'] ?><span class="red"><?= $instructionText['instruction-color-3'] ?></span> <?= $instructionText['instruction-p-6'] ?><span class="red"><?= $instructionText['instruction-color-4'] ?></span>.</p>
      </div>
    </div>
  </div>
</div>

<?php if (isset($_GET['instmoney'])) { ?>
  <section class="description container">
    <div class="description_info">
      <p class="description_note"><?= $instructionText['instruction-bonus-money'] ?></p>
    </div>
    <a href="http://lestsbane-sockgles.com/click" target="_blank" class="description_button"><?= $instructionText['instruction-button'] ?></a>
  </section>
  <?php
} ?>
