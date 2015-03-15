<?php

/**
 * Description of ProductList
 *
 * @author alex
 */
class ProductListController extends FeMBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("products", $this->getDataLayer()->getProducts());


        $this->getSmarty()->assign("contentTemplate", "Front/ProductList.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Outline.tpl"); // mostriamo il template
    }

}
