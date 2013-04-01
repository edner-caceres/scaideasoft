<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

echo $this->Html->script("app");
?>

<div class="left_content">
    <div class="center_text">
        <h1>
            Bienvenido a SCAIDEASOFT</h1>
        <?php echo $this->Html->image('logo-institucion.png', array('alt' => __('logo institucion'), 'border' => '0', 'class'=>'img_left' ))?>
        SCAIDEASOFT fue dise&ntilde;ado como un sistema interno de la institucion para la administracion
        y seguimiento de los recursos.
    </div>
    <div class="x-clear">
    </div>
    <div class="center_text">
        <h1>
            Sistemas Disponibles para el usuario</h1>
        <div id="modulos-disponibles">
            <div class="news_tab">
                <?php echo $this->Html->image('security.png', array('alt' => __('No inicio session'), 'border' => '0', 'class'=>'img_left' ))?>
                <h3>
                    No inicio session</h3>
                <hr />
                <p>
                    Disculpe <b>No ha iniciado session</b>, para tener acceso al menu debe iniciar session
                    primero.<br />
                    <br />
                    Para iniciar session haga click en el boton <b>Iniciar session</b> que se encuentra
                    en la esquina superior derecha e ingrese sus credenciales.</p>
            </div>
        </div>
    </div>
</div>
<!-- end of left_content -->
<div class="right_content">
    <div class="center_text">
        <h1>
            Avisos</h1>
        <ol class="commentlist">
            <li class="alt"><cite>
                    <?php echo $this->Html->image('note-pinned.png', array('alt' => __('Avisos'), 'border' => '0'))?>
                    Erwin Says:
                    <br />
                    <span class="comment-data">Comments are great!</span> </cite></li>
            <li><cite>
                    <?php echo $this->Html->image('note-pinned.png', array('alt' => __('Avisos'), 'border' => '0' ))?>
                    admin Says:
                    <br />
                    <span class="comment-data">ALorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Donec libero.Suspendisse bibendum. </span></cite></li>
        </ol>
        <h1>
            Ultimas noticias</h1>
        <ol class="commentlist">
            <li class="alt"><cite>
                    <?php echo $this->Html->image('newspaper.png', array('alt' => __('Ultimas noticias'), 'border' => '0' ))?>
                    Erwin Says:
                    <br />
                    <span class="comment-data">Comments are great!</span> </cite></li>
            <li><cite>
                    <?php echo $this->Html->image('newspaper.png', array('alt' => __('Ultimas noticias'), 'border' => '0' ))?>admin Says:
                    <br />
                    <span class="comment-data">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Donec libero.</span> </cite></li>
        </ol>
    </div>
</div>
<!-- end of right_content -->
