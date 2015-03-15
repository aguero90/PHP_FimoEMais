<?php

/**
 * Description of FeMBaseController
 *
 * @author alex
 */
class FeMBaseController {

    private $dataLayer;
    private $smarty;

    public function __construct() {

        $this->dataLayer = new FeMDataLayerMySQL();
        $this->dataLayer->init();
        $this->smarty = new SmartySetup();
    }

    public function getDataLayer() {
        return $this->dataLayer;
    }

    public function getSmarty() {
        return $this->smarty;
    }

}
