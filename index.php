                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php
  require_once('Defines/defines.php');
  require_once(PATH_DEFINES.'configuration.php');
  require_once(PATH_LANGUES.PATH_FR.'textes.php');
  require_once(PATH_LIB.'bases.php');
  require_once(PATH_LIB.PATH_BDD.'bdd.php');
  require_once(PATH_MODEL.'diaporama.php');
  $base = new Bases();
  $diapos = new Diapos();
  //print_r($_GET);
  //echo realpath(PATH_VIEWS.$_GET['page'].".php");
  if(isset($_GET['page']))
  {
    if($_GET['page'] == 'login')
    {
      $page = 'login';
    }
    else
    {
      if(isset($_SESSION['logged']))
      {
        if($_SESSION['logged'] == 1)
        {
          if(is_file(PATH_CONTROLLER.$_GET['page'].".php"))
          {
          $page = $_GET['page'];
          }
          else
          {
            $page = 'page';
          }
        }
        else
        {
        $page = 'page';
        }
      }
      else
      {
        $page = 'page';
      }
    }
  }
    require_once(PATH_CONTROLLER.$page.'.php');
?>
