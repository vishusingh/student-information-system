<?php

return !empty($_POST) ? shell_exec('git pull') : '';
