<?php

namespace Lpphan\Api;

/**
 * Description of ChampionApi
 *
 * @author lamphuong
 */
class ChampionApi extends AbstractApi {
    
    protected $version = 'v1.3';
    
    public function getAllChampions($free = false){
        $path = 'champion';
        return $this->makeRequest($path, $free ? ['freeToPlay'=>true] : null);
    }
    
    public function getChampion($id){
        $path = "champion/$id";
        return $this->makeRequest($path);
    }

}
