<?php

    class Domain
    {
        protected static function getWebsiteName()
        {
            return "w3schools.com";
        }
    }

    class DomainW3 extends Domain
    {
        public $websiteName;
        public function __construct()
        {
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domain = new DomainW3();
    echo $domain->websiteName;
    var_dump($domain);

?>