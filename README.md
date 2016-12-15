# PrestaShop Weather Module

Example PrestaShop Module that shows the weather at a US location to your visitors.

## Install

1. Copy the weather directory to the PrestaShop 1.6 modules folder
2. Visit Admin -> Modules and Services
3. Find Weather and click Install
4. Configure your API key and other options
5. Visit Admin -> Positions and based on the location in the configuration position the display as desired

## Testing

1. Install [PHPUnit](https://phpunit.de/)
2. Get a free [OpenWeatherMap API Key](https://openweathermap.org/)
2. `export WEATHER_KEY="your_key_here"`
3. `phpunit /tests`
