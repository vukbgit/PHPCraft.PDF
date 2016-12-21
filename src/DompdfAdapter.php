<?php

namespace PHPCraft\PDF;

use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * Creates PDF from HTML using dompdf/dompdf (https://github.com/dompdf/dompdf)
 *
 * @author vuk <info@vuk.bg.it>
 */
class DompdfAdapter implements PDFInterface
{
    private $pdf;
    
    /**
     * Constructor
     * @param Dompdf\Dompdf $dompdf
     **/
    public function __contruct(Dompdf $dompdf)
    {
        $this->pdf = $dompdf;
    }
    
    /**
     * Sets an option
     *
     * @param string $name
     * @param string $value
     **/
    public function setOption($name, $value)
    {
    }
    
    /**
     * Loads html code into PDF
     *
     * @param strin $html
     **/
    public function loadHtml($html)
    {
    }
    
    /**
     * Saves to filesystem
     *
     * @param string $path
     **/
    public function save($path)
    {
    }
    
    /**
     * Streams to browser
     **/
    public function stream($stream)
    {
    }
}