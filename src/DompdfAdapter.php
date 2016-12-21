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
    private $dompdf;
    
    /**
     * Constructor
     * @param Dompdf\Dompdf $dompdf
     **/
    public function __construct(Dompdf $dompdf)
    {
        $this->dompdf = $dompdf;
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
     * Sets more options at once
     *
     * @param array $options [option-name => option-value]
     **/
    public function setOptions($options)
    {
        $this->dompdf->set_options($options);
    }
    
    /**
     * Loads html code into PDF
     *
     * @param strin $html
     **/
    public function loadHtml($html)
    {
        $this->dompdf->loadHtml($html);
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
     *
     * @param string $fileName
     **/
    public function stream($fileName)
    {
        $this->dompdf->render();
        $this->dompdf->stream($fileName);
    }
}