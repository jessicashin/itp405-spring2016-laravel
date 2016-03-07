<?php

namespace App\Services\API;
use Illuminate\Cache;

class Flickr {
    protected $api_key;
    const ENDPOINT = 'https://api.flickr.com/services/rest/';

    public function __construct(array $config)
    {
        $this->api_key = $config['api_key'];
    }

    public function photos($url)
    {
        if (Cache::get($url)) {
            $jsonString = Cache::get($url);
        } else {
            $profile = $this->profile($url);
            $endpoint = $this->buildRequestURL('users/' . $profile->id . '/tracks.json');
            $jsonString = file_get_contents($endpoint);
            Cache::put($url, $jsonString, 60);
        }

        return json_decode($jsonString);
    }

    public function userPhotos($userID)
    {
        $url = $this->buildRequestURL('flickr.people.getPublicPhotos', [
            'user_id' => $userID,
            'per_page' => 5,

        ]);
        $jsonString = file_get_contents($url);
        $photos = json_decode($jsonString);
        return $photos;
    }

    public function userID($username)
    {
        $url = $this->buildRequestURL('flickr.people.findByUsername', [
            'username' => $username
        ]);
        $jsonString = file_get_contents($url);
        $userID = json_decode($jsonString);
        return $userID;
    }

    protected function buildRequestURL($method, $qs = [])
    {
        $qs['api_key'] = $this->api_key;
        return self::ENDPOINT . '?method=' . $method . http_build_query($qs);
    }
}