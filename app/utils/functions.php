<?php
// je voudrais enregister cette fonction dans un autoload

    function sanitaze(string $data) :string{
        return htmlentities(strip_tags(stripslashes(trim($data))));
        // htmlentities() convertit tous les caractères éligibles en entités HTML
        // strip_tags() supprime les balises HTML et PHP d'une chaîne
        // stripslashes() supprime les antislashes d'une chaîne
        // trim() supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    }