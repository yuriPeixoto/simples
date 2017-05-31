<?php
/** @var Simples\Template\View $this */

$title = config('app.name') . ' / ' . $this->get('title');

?>
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
  <meta http-equiv="cache-control" content="max-age=0"/>
  <meta http-equiv="cache-control" content="no-cache"/>
  <meta http-equiv="expires" content="0"/>
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
  <meta http-equiv="pragma" content="no-cache"/>

  <title><?php out($title) ?></title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php $this->image('favicon/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php $this->image('favicon/favicon-32x32.png" sizes="32x32') ?>">
  <link rel="icon" type="image/png" href="<?php $this->image('favicon/favicon-16x16.png" sizes="16x16') ?>">
  <link rel="manifest" href="<?php $this->image('favicon/manifest.json') ?>">
  <link rel="mask-icon" href="/<?php $this->image('favicon/safari-pinned-tab.svg') ?>" color="#318dce">

  <link href="<?php $this->style('style.css') ?>" rel="stylesheet" type="text/css">

  <meta name="theme-color" content="#8bbcff">
</head>