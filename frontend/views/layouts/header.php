<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

// NavBar::begin([
//         'brandLabel' => Yii::$app->name,
//         'brandUrl' => Yii::$app->homeUrl,
//         'options' => [
//             'class' => 'navbar-inverse navbar-fixed-top',
//         ],
//     ]);
//     $menuItems = [
//         ['label' => 'Home', 'url' => ['/site/index']],
//         ['label' => 'About', 'url' => ['/site/about']],
//         ['label' => 'Contact', 'url' => ['/site/contact']],
//         ['label' => 'Product'.Yii::$app->params['var1'], 'url' => ['/product']],
//     ];
//     if (Yii::$app->user->isGuest) {
//         $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//         $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//     } else {
//         $menuItems[] = '<li>'
//             . Html::beginForm(['/site/logout'], 'post')
//             . Html::submitButton(
//                 'Logout (' . Yii::$app->user->identity->username . ')',
//                 ['class' => 'btn btn-link logout']
//             )
//             . Html::endForm()
//             . '</li>';
//     }
//     echo Nav::widget([
//         'options' => ['class' => 'navbar-nav navbar-right'],
//         'items' => $menuItems,
//     ]);
//     NavBar::end();
?>

 <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">simple<span class="logo_colour">style_blue_trees</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="<?=Url::to(['/site/index'])?>">Home</a></li>
          <li><a href="<?=Url::to(['/site/about'])?>">About</a></li>
          <li><a href="<?=Url::to(['/site/contact'])?>">Contact</a></li>
          <li><a href="<?=Url::to(['/product'])?>">Product</a></li>
          <li><a href="<?=Url::to(['/site/login'])?>">Login</a></li>
          <li><a href="<?=Url::to(['/site/signup'])?>">SignUp</a></li>
        </ul>
      </div>
    </div>