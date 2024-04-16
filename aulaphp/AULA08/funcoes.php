<?php
function criarCampos($metodo,...$nomesCampos) {
        echo '<form method="' . $metodo . '" action="processar_formulario.php">';

        foreach ($nomesCampos as $campo) {
            echo '<label for="'.$campo.'">'.ucfirst($campo).':</label>'; 
            echo '<input type="text" name="'.$campo.'"><br>';
        }

        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }
?>