<?php

namespace Vzaar;

Class CostType {
    var $currency;
    var $monthly;
    /**
     *
     * @param <string> $currency
     * @param <integer> $monthly
     */
    public function CostType($currency, $monthly) {
        $this->currency = $currency;
        $this->monthly = $monthly;
    }
}

?>