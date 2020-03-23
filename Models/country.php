<?php
class Country {
    // Properties
    private $countryName;
    private $cityName;
  
    // Methods
    function set_country_name($countryName) {
      $this->countryName = $countryName;
    }
    function get_country_name() {
      return $this->countryName;
    }

    function set_city_name($cityName) {
        $this->cityName = $cityName;
      }
    function get_city_name() {
        return $this->cityName;
    }
  }

?>