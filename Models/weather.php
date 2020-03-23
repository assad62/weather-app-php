<?php
class Weather {

    /*
     "main": {
    "temp": 26.13,
    "feels_like": 30.2,
    "temp_min": 25.56,
    "temp_max": 26.67,
    "pressure": 1011,
    "humidity": 78
  },
    */

    // Properties
    protected $city;
    protected $temp;
    protected $feels_like;
    protected $temp_min;
    protected $temp_max;
    protected $pressure;
    protected $humidity;
    
    
  
    

    /**
     * Get the value of temp
     */ 
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set the value of temp
     *
     * @return  self
     */ 
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get the value of feels_like
     */ 
    public function getFeels_like()
    {
        return $this->feels_like;
    }

    /**
     * Set the value of feels_like
     *
     * @return  self
     */ 
    public function setFeels_like($feels_like)
    {
        $this->feels_like = $feels_like;

        return $this;
    }

    /**
     * Get the value of temp_min
     */ 
    public function getTemp_min()
    {
        return $this->temp_min;
    }

    /**
     * Set the value of temp_min
     *
     * @return  self
     */ 
    public function setTemp_min($temp_min)
    {
        $this->temp_min = $temp_min;

        return $this;
    }

    /**
     * Get the value of temp_max
     */ 
    public function getTemp_max()
    {
        return $this->temp_max;
    }

    /**
     * Set the value of temp_max
     *
     * @return  self
     */ 
    public function setTemp_max($temp_max)
    {
        $this->temp_max = $temp_max;

        return $this;
    }

    /**
     * Get the value of pressure
     */ 
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set the value of pressure
     *
     * @return  self
     */ 
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get the value of humidity
     */ 
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set the value of humidity
     *
     * @return  self
     */ 
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
  }

?>