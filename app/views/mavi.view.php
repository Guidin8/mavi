<?php
  include_once 'lib/smarty/libs/Smarty.class.php';

class MaviView {

  /** muestra la barra lateral que lista las profesiones  */
  function showHome() {
    $smarty = new Smarty ();
    $smarty->display('./templates/home.tpl');
  }
  function showInscInicial() {
    $smarty = new Smarty ();
    $smarty->display('./templates/inscinicial.tpl');
  }
  function showTransferencia() {
    $smarty = new Smarty ();
    $smarty->display('./templates/transferencia.tpl');
  }
  function showPrendario() {
    $smarty = new Smarty ();
    $smarty->display('./templates/prendario.tpl');
  }


}