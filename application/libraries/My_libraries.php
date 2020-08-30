<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_libraries
{

    private $cdn = 'cdn';

    public function ianArray($del,$str) {
        $read = str_replace($del, $del[0], $str);
        $lau = explode($del[0], $read);
        return $lau;
        }
      
        public function url()
        {
          return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
          );
        }
      
        public function cdn()
        {
          $url = $this->url();
          $b   = $this->ianArray("/",$url);
          return $b[0].$b[1].'//'.$b[2].'/'.$this->cdn.'/';
        }

}