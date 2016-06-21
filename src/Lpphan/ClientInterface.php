<?php

namespace Lpphan;

/**
 *
 * @author lamphuong
 */
interface ClientInterface 
{
    public function get($url);
    
    public function setBaseUrl($url);
    
}
