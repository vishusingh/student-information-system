<?php

    class View
    {
        public static function renderTemplate(string $viewFile)
        {
            $file = ROOTPATH . "/src/pages/$viewFile" . '.php';

            if (file_exists($file) && is_readable($file)) 
            {
                require_once $file;
            }
            else 
            {
                throw new Exception("$file not found");
            }
        }
    }

?>
