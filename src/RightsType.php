<?php

namespace Vzaar;

Class RightsType {

    var $borderless;

    var $searchEnhancer;

    public function RightsType($borderless, $searchEnhancer) {
        $this->borderless = $borderless;
        $this->searchEnhancer = $searchEnhancer;
    }
}