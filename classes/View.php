<?php

    class View
    {
        public static function renderTemplate(string $viewFile)
        {
            $file = ROOTPATH . "/pages/$viewFile" . '.php';

            if (file_exists($file) && is_readable($file)) 
            {
                return $file;
            }
            else 
            {
                throw new Exception("$file not found");
            }
        }
    }

?>
