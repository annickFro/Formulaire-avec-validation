<?php

?>

<div>

<?php
//var_dump ($_POST);
require_once('validation.php');

    if ($fieldValidation)
    {
        echo "<h1>Merci :-)</h1>" ;

        echo "<p>";
            echo 'Merci <strong>';
            echo $_POST['user_firstname'] . ' ' ;
            echo $_POST['user_name'] . '</strong> ' ;
            echo 'de nous avoir contacté à propos de <strong>' ;
            echo $_POST['user_sujet'] . '</strong>.' ;
        echo "</p>";


        echo "<p>";
            echo "Un de nos conseiller vous contactera soit à l’adresse <strong>";
            echo $_POST['user_email'] ;
            echo "</strong> ou par téléphone au <strong>";
            echo $_POST['user_phone'] ;
            echo "</strong> dans les plus brefs délais pour traiter votre demande : ";
            //echo "Un de nos conseiller vous contactera soit à l’adresse $_POST['user_email'] ou " ;
            // $_POST['user_email'] ou " ;
            //echo "par téléphone au $_POST['user_phone'] dans les plus brefs délais pour traiter votre demande : ";

        echo "</p>";

        echo "<p>";
            echo "<strong>";
            echo $_POST['user_message'] ;
            echo "</strong>";
        echo "</p>";

    } else {
        echo "<h1>Non conforme :-(</h1>" ;
    }
?>

</div>

<!-- 
array (size=6)
  'user_name' => string 'ann fro' (length=7)
  'user_firstname' => string 'Ann' (length=3)
  'user_email' => string 'annick.moretti@yahoo.fr' (length=23)
  'user_phone' => string '0643221155' (length=10)
  'user_sujet' => string 'Information' (length=11)
  'user_message' => string '33' (length=2)
-->