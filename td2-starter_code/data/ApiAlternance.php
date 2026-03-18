<?php

// Interface definition for accessing Annonce data
interface AnnonceAccessInterface {
    public function fetchData();
}

// Class to consume the Alternance API and cache results
class ApiAlternance implements AnnonceAccessInterface {
    private $cacheFile;

    public function __construct($cacheFile = 'cache.json') {
        $this->cacheFile = $cacheFile;
    }

    public function fetchData() {
        // Check if cache file exists and is not outdated
        if (file_exists($this->cacheFile) && (time() - filemtime($this->cacheFile)) < 3600) {
            return json_decode(file_get_contents($this->cacheFile), true);
        }

        // Fetch new data from the Alternance API
        $apiUrl = 'https://api.example.com/alternance'; // Update this to the actual API URL
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        // Cache the data in a file
        file_put_contents($this->cacheFile, json_encode($data));

        return $data;
    }
}

?>