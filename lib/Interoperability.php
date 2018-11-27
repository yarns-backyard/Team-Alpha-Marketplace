<?php
/**
 * Created by PhpStorm.
 * User: dronca
 * Date: 11/12/18
 * Time: 11:14 PM
 */

class TeamEndPoints
{
    public $name;
    public $baseUrl;
    public $readProductsUrl;
    public $rateProductUrl;

    public function __construct($name, $baseUrl, $readProductsUrl, $rateProductUrl)
    {
        $this->name = $name;
        $this->baseUrl = $baseUrl;
        $this->readProductsUrl = $readProductsUrl;
        $this->rateProductUrl = $rateProductUrl;
    }

    public function getRateProductUrl($productCode, $uToken){
        return $this->rateProductUrl."?productCode=$productCode&userToken=$uToken";
    }

    public static $userServers;

    static function init()
    {
        TeamEndPoints::$userServers = array();
        array_push(TeamEndPoints::$userServers, new TeamEndPoints
        (
            "The Beanz Products",
            "http://roncabeanz.com",
            "http://roncabeanz.com/Roncabeanz/ReadProducts.php",
            "http://roncabeanz.com/Roncabeanz/RateProduct.php"
        ));
        array_push(TeamEndPoints::$userServers, new TeamEndPoints
        (
            "Think Full Stack Products",
            "http://www.thinkinfullstack.com",
            "http://www.thinkinfullstack.com/project/apiproducts.php",
            ""
        ));

    }
}

TeamEndPoints::init();

