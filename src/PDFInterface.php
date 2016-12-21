<?php

namespace PHPCraft\PDF;

/**
 * PDF manipulation
 *
 * @author vuk <info@vuk.bg.it>
 */
interface PDFInterface
{
    
    /**
     * Sets an option
     *
     * @param string $name
     * @param string $value
     **/
    public function setOption($name, $value);
    
    /**
     * Sets more options at once
     *
     * @param array $options [option-name => option-value]
     **/
    public function setOptions($options);
    
    /**
     * Loads html code into PDF
     *
     * @param strin $html
     **/
    public function loadHtml($html);
    
    /**
     * Saves to filesystem
     *
     * @param string $path
     **/
    public function save($path);
    
    /**
     * Streams to browser
     *
     * @param string $fileName
     **/
    public function stream($fileName);
}