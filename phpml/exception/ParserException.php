<?php

namespace phpml\exception;

/**
 * Base ParserException class
 *
 * @author Thiago Rigo <thiagophx@gmail.com>
 * @package phpml
 * @subpackage exception
 */
class ParserException extends \Exception {

    public function __construct($file, $line, $message)
    {
        parent::__construct();

        $this->file    = $file;
        $this->line    = $line;
        $this->message = $message;
    }

}
?>
