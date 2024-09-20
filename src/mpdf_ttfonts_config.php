<?php

use Illuminate\Support\Facades\Config;

class PdfConfig
{
    protected $fontdata = [];

    public function __construct()
    {
        define('_MPDF_SYSTEM_TTFONTS', Config::get('pdf.custom_font_path'));
        $this->fontdata = array_merge($this->fontdata, Config::get('pdf.custom_font_data'));
    }

    public function getFontData()
    {
        return $this->fontdata;
    }
}

// Usage example
$pdfConfig = new PdfConfig();
$fontData = $pdfConfig->getFontData();
