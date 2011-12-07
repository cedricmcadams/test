<?php
  include('template.php');

  $connect = mysql_connect('localhost', 'radins', 'loremipsum');
  mysql_select_db('radins', $connect);

  $result = mysql_query("SELECT * FROM logs ORDER BY start DESC LIMIT 25");
  $row = mysql_fetch_array($result);

  /*
   * Nous admettrons ici que le pseudo obtenu est bobe
   * et l'email est bobe@domain.com
   */

  // on créé une nouvelle instance de la classe Template
  // et on indique en argument le chemin vers les modèles
  $template = new Template('./');

  // modèle à utiliser auquel on adjoint un nom arbitraire

  $template->set_filenames(array(
    'body' => 'template.tpl'
  ));


  // Assignation des variables

  //
  // Assignation des variables dans le block 'row'
  //
   $template->assign_block_vars('table');
  while( $row = mysql_fetch_array($result) )
  {
      $template->assign_block_vars('table.row',array(
          'ID' => $row['id'],
          'VALUE'  => $row['IP']

      ));
      // Si mode contient la chaine display, on affiche l'id du membre.
      $template->assign_block_vars('table.row.col',array(
          'ID' => $row['id'],
          'VALUE'  => $row['IP']." ".date('d-m-Y H:i:',$row['start']),

      ));
      }
  

  // Affichage des données

  $template->pparse('body');
?>