<?php

require dirname(__DIR__). '/weather/lib/OpenWeatherMap.php';
require dirname(__DIR__). '/weather/lib/OpenWeatherMapWeather.php';

class OpenWeatherMapTest extends PHPUnit_Framework_TestCase
{
    public static function key()
    {
        $key = getenv('WEATHER_KEY');
        if( ! $key ) {
            throw new Exception("Unable to load the WEATHER_KEY environment variable.\nIf you use a Unix type system try `export WEATHER_KEY=\"your_open_weather_map_key_here\"`");
        }
        return $key;
    }

    public function testValidateSuccess()
    {
        $this->assertTrue(OpenWeatherMap::validate(self::key(), '20500'));
    }

    public function testValidateFail()
    {
        $result = OpenWeatherMap::validate('bad_key', '20500');
        $this->assertStringStartsWith('Invalid API key', $result);

        $result = OpenWeatherMap::validate(self::key(), 'sdfsdfsdfsdfsdfsdf');
        $this->assertStringStartsWith('Error: Not found city', $result);
    }

    public function testGetWeather()
    {
        $owm = new OpenWeatherMap(self::key());
        $weather = $owm->getWeather('20500');

        $this->assertInstanceOf(OpenWeatherMapWeather::class, $weather);
        $this->assertEquals('Washington, D. C.', $weather->locationName);
    }
}
