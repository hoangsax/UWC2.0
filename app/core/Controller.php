<?php

Trait Controller {
    public function view($page, $data = []) {
        // if (!empty($data)) extract($data);
        $filename = "../app/views/".$page.".php";
        if (!file_exists($filename))
            $filename = "../app/views/notfound.php";
        require_once $filename;
    }

    public function reload_page(){
        echo '<script type="text/JavaScript"> 
                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                            }
                        window.location = window.location.href; </script>';
    }
}