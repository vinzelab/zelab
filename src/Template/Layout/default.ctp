<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = 'Zelab -  Vincent ZERBIB // Graphic & Webdesigner';
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta(
  'description',
  'Portfolio of Vincent ZERBIB Graphic & Webdesigner. See all my best projects.'
);?>
<?= $this->Html->meta('img/favicon-zelab.ico','/img/favicon-zelab.ico',['type' => 'icon']);?>

<?= $this->Html->css('normalize.css') ?>
<?=$this->Html->css('https://fonts.googleapis.com/css?family=Playfair+Display',array('inline' => false));?>
<?=$this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',array('inline' => false));?>
<?=$this->Html->css('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css',array('inline' => false));?>
<?=$this->Html->css('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',array('inline' => false));?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('responsive.css') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
</head>
<body>

  <header class="container-fluid header-project">
    <nav menu-header>
      <ul>
        <li><?=$this->Html->image("zelab-sticky.png", ["alt" => "zelab logo",'url' => ['controller' => 'Projects', 'action' => 'index']]);?></li>
        <li><?=$this->Html->link('skills','/skills');?></li>
        <li><?=$this->Html->link('projects','/projects/categories');?></li>
        <li><?=$this->Html->link('partners','/partners');?></li>
        <li><?=$this->Html->link('contact','/contact');?></li>
        <li><?=$this->Html->link('','https://fr.pinterest.com/vinzerb',['class'=> "fa fa-pinterest",'target' => '_blank']);?></li>
        <li><?=$this->Html->link('','https://www.behance.net/Vincentzerd2fc',['class'=> "fa fa-behance",'target' => '_blank']);?></li>
      </ul>
    </nav>
    <div class="sticky-header menu-header hide">
      <nav>
        <ul>
          <li><?=$this->Html->image("zelab-sticky.png", ["alt" => "zelab logo",'url' => ['controller' => 'Projects', 'action' => 'index']]);?></li>
          <li><?=$this->Html->link('skills','/skills');?></li>
          <li><?=$this->Html->link('partners','/partners');?></li>
          <li><?=$this->Html->link('projects','/projects/categories');?></li>
          <li><?=$this->Html->link('contact','/contact');?></li>
          <li><?=$this->Html->link('','https://fr.pinterest.com/vinzerb',['class'=> "fa fa-pinterest",'target' => '_blank']);?></li>
          <li><?=$this->Html->link('','https://www.behance.net/Vincentzerd2fc',['class'=> "fa fa-behance",'target' => '_blank']);?></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- MENU HAMBURGER MOBILE -->
  <div class="button_container menu-page" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
  </div>

  <div class="overlay" id="overlay">
    <nav class="overlay-menu">
      <ul>
        <li><?=$this->Html->link('skills','/skills');?></li>
        <li><?=$this->Html->link('projects','/projects/categories');?></li>
        <li><?=$this->Html->link('partners','/partners');?></li>
        <li><?=$this->Html->link('contact','/contact');?></li>
      </ul>
    </nav>
  </div>

  <?= $this->fetch('home') ?>

  <?= $this->Flash->render() ?>

  <?= $this->fetch('content') ?>


  <footer>
    <div class="logo-footer">
      <div class="svg-wrapper">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="350px" height="150px" viewBox="0 0 86.076 45.886" enable-background="new 0 0 86.076 45.886" xml:space="preserve">
        <g>
          <path id="z-letter" fill="#2E3192" d="M19.852,30.152l-0.353-1.456c3.835-1.834,7.648-7.317,5.987-8.61c-1.447-1.125-4.873,4.745-6.076,6.541
          c-0.388-0.193-0.783-0.458-1.036-0.741c1.911-2.899,4.108-7.577,7.371-7.985c4.239-0.53,2.831,7.556-3.325,11.325l-0.093,0.036
          c0.447,0.283,0.792,0.723,0.938,1.31c2.245-1.007,3.998-2.846,6.017-5.856l0.143-0.211c0.351,0.102,0.828,0.429,1.036,0.741
          c-2.344,3.51-4.646,5.588-7.166,6.725c-0.057,0.322-0.16,0.649-0.307,1.03l-1.024,2.451c-1.378,3.292-5.21,3.214-5.507,0.833
          c-0.232-1.858,1.715-3.505,4.969-4.951c0.3-0.884-0.652-1.346-1.524-1.164l-0.047,0.006l-0.024,0.003L19.852,30.152z
          M19.744,35.294l0.916-2.146c-1.837,0.979-2.34,1.792-2.259,2.436C18.484,36.25,19.312,36.292,19.744,35.294z"/>
          <path id="e-letter" fill="#2E3192" d="M31.681,24.755l-0.186,0.458c-0.892,2.144,0.132,2.983,1.656,2.793c1.738-0.217,3.819-2.146,5.348-4.442
          l0.142-0.211c0.352,0.102,0.827,0.429,1.036,0.742c-1.75,2.637-4.263,5.178-7.073,5.529c-2.93,0.366-4.567-1.896-3.35-4.734
          l2.039-4.778c0.822-1.941,2.286-3.188,4.287-3.438c2.025-0.253,3.525,1.302,2.478,3.755l-0.28,0.664
          C36.322,24.538,33.359,25.223,31.681,24.755z M32.243,23.451c0.97,0.218,2.572,0.066,3.51-2.107l0.279-0.664
          c1.155-2.757-1.419-2.846-2.542-0.214L32.243,23.451z"/>
          <path fill="#2E3192" d="M44.761,22.588c0.352,0.102,0.827,0.429,1.036,0.741c-1.751,2.638-3.835,5.124-5.883,5.38
          c-2.001,0.25-2.95-1.349-2.132-3.313l6.271-14.861l2.477-0.31l-6.523,15.546c-0.449,1.048-0.092,1.391,0.456,1.322
          c1.096-0.137,2.629-1.998,4.157-4.294L44.761,22.588z"/>
          <path fill="#2E3192" d="M56.454,21.126c0.352,0.102,0.827,0.429,1.036,0.742c-1.75,2.637-3.835,5.124-5.883,5.38
          c-1.263,0.158-2.107-0.415-2.346-1.352c-1.068,1.125-2.227,1.924-3.228,2.049c-2,0.25-2.949-1.35-2.132-3.314l2.729-6.437
          c0.82-1.941,2.547-3.221,3.882-3.388c1.619-0.202,2.872,1.117,2.908,2.176l1.405-0.175L51.7,24.309
          c-0.45,1.048-0.093,1.391,0.455,1.322c1.096-0.137,2.629-1.998,4.157-4.293L56.454,21.126z M46.126,25.005
          c-0.448,1.048-0.092,1.391,0.456,1.322c1.024-0.128,2.361-1.432,3.567-3.978l1.506-3.623c0.936-2.391-1.783-2.656-2.828-0.178
          L46.126,25.005z"/>
          <path fill="#2E3192" d="M61.929,13.838c0.458-0.396,0.955-0.676,1.551-0.75c1.381-0.172,2.357,0.673,2.515,1.935
          c0.099,0.786-0.091,1.777-0.573,2.951l-1.832,4.316c1.213-0.176,2.547-0.923,3.512-2.301l0.142-0.211
          c0.352,0.102,0.827,0.429,1.036,0.742c-1.074,1.658-3.295,2.855-4.772,3.04c-0.189,0.023-0.356,0.044-0.55,0.044
          c-1.039,1.751-2.547,2.665-3.928,2.837c-1.596,0.199-2.977-0.596-3.188-2.286c-0.098-0.786,0.049-1.748,0.536-2.873l5.49-12.974
          l2.524-0.315L61.929,13.838z M60.854,23.237c-0.977-0.458-1.569-1.328-1.894-2.376l-0.691,1.635c-0.22,0.56-0.312,0.982-0.267,1.34
          c0.077,0.619,0.571,0.896,1.119,0.827C59.74,24.585,60.455,24.109,60.854,23.237z M61.416,21.933l1.982-4.65
          c0.263-0.614,0.343-1.131,0.292-1.537c-0.083-0.667-0.515-1.024-1.062-0.956c-1.406,0.176-2.76,3.271-2.54,5.034
          C60.215,20.825,60.714,21.537,61.416,21.933z"/>
        </g>
        <g>
          <path id="mark" fill="#2E3192" d="M72.957,24.813l-4.199,3.383c-0.496,0.398-1.416,0.798-2.045,0.887l-11.65,1.653
          c-0.631,0.089-1.439,0.59-1.801,1.113l-2.826,4.098c-0.361,0.523-0.793,0.449-0.959-0.164l-0.95-3.517
          c-0.166-0.614-0.816-1.043-1.445-0.954l-16.96,2.403"/>
        </g>
      </svg>
    </div>
    <h2>Graphic and web designer</h2>
  </div>
  <div class="container footer-social">
    <ul>
      <li><?=$this->Html->link('','https://fr.pinterest.com/vinzerb',['class'=> "fa fa-pinterest",'target' => '_blank']);?></li>
      <li><?=$this->Html->link('','https://www.behance.net/Vincentzerd2fc',['class'=> "fa fa-behance",'target' => '_blank']);?></li>
    </ul>
  </div>
  <?= $this->Html->link('contact','/contact',['class' => 'zelab-button']);?>
  <nav class="container">
    <ul>
      <li><?=$this->Html->link('skills','/skills');?></li>
      <li><?=$this->Html->link('partners','/partners');?></li>
      <li><?=$this->Html->link('projects','/projects/categories');?></li>
      <li><?=$this->Html->link('contact','/contact');?></li>
    </ul>
  </nav>
  <h4>Made with love with Cake php3 & bootstrap</h4>
</footer>
<?=$this->Html->script('https://code.jquery.com/jquery-3.1.0.min.js',array('inline' => false));?>
<?=$this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',array('inline' => false));?>
<?=$this->Html->script('https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js',array('inline' => false));?>
<?= $this->Html->script('animation');?>
<?= $this->Html->script('main');?>
<?= $this->fetch('script') ?>
</body>

</html>
