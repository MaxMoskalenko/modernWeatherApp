<?php
$q = $_GET['q'];
if ($q==1) {
  $curl = curl_init();

  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'http://dataservice.accuweather.com/forecasts/v1/hourly/12hour/324291?apikey=6bZOyyL2FNQCCnqGcZQFR3eSh4RWOYf1',
      CURLOPT_USERAGENT => 'Codular Sample cURL Request'
  ));
  $resp = curl_exec($curl);
  curl_close($curl);
  $resp = (string)$resp;
  $res = '[
    {
    "DateTime": "2018-04-03T20:00:00+03:00",
    "EpochDateTime": 1522774800,
    "WeatherIcon": 35,
    "IconPhrase": "Partly cloudy",
    "IsDaylight": false,
    "Temperature": {
      "Value": 49,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&hbhhour=20&lang=en-us"
  },
    {
    "DateTime": "2018-04-03T21:00:00+03:00",
    "EpochDateTime": 1522778400,
    "WeatherIcon": 34,
    "IconPhrase": "Mostly clear",
    "IsDaylight": false,
    "Temperature": {
      "Value": 47,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&hbhhour=21&lang=en-us"
  },
    {
    "DateTime": "2018-04-03T22:00:00+03:00",
    "EpochDateTime": 1522782000,
    "WeatherIcon": 35,
    "IconPhrase": "Partly cloudy",
    "IsDaylight": false,
    "Temperature": {
      "Value": 46,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&hbhhour=22&lang=en-us"
  },
    {
    "DateTime": "2018-04-03T23:00:00+03:00",
    "EpochDateTime": 1522785600,
    "WeatherIcon": 36,
    "IconPhrase": "Intermittent clouds",
    "IsDaylight": false,
    "Temperature": {
      "Value": 44,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=1&hbhhour=23&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T00:00:00+03:00",
    "EpochDateTime": 1522789200,
    "WeatherIcon": 7,
    "IconPhrase": "Cloudy",
    "IsDaylight": false,
    "Temperature": {
      "Value": 43,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=0&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T01:00:00+03:00",
    "EpochDateTime": 1522792800,
    "WeatherIcon": 36,
    "IconPhrase": "Intermittent clouds",
    "IsDaylight": false,
    "Temperature": {
      "Value": 43,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=1&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T02:00:00+03:00",
    "EpochDateTime": 1522796400,
    "WeatherIcon": 35,
    "IconPhrase": "Partly cloudy",
    "IsDaylight": false,
    "Temperature": {
      "Value": 43,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=2&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T03:00:00+03:00",
    "EpochDateTime": 1522800000,
    "WeatherIcon": 34,
    "IconPhrase": "Mostly clear",
    "IsDaylight": false,
    "Temperature": {
      "Value": 42,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=3&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T04:00:00+03:00",
    "EpochDateTime": 1522803600,
    "WeatherIcon": 34,
    "IconPhrase": "Mostly clear",
    "IsDaylight": false,
    "Temperature": {
      "Value": 42,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=4&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T05:00:00+03:00",
    "EpochDateTime": 1522807200,
    "WeatherIcon": 34,
    "IconPhrase": "Mostly clear",
    "IsDaylight": false,
    "Temperature": {
      "Value": 42,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=5&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T06:00:00+03:00",
    "EpochDateTime": 1522810800,
    "WeatherIcon": 34,
    "IconPhrase": "Mostly clear",
    "IsDaylight": false,
    "Temperature": {
      "Value": 42,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 0,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=6&lang=en-us"
  },
    {
    "DateTime": "2018-04-04T07:00:00+03:00",
    "EpochDateTime": 1522814400,
    "WeatherIcon": 3,
    "IconPhrase": "Partly sunny",
    "IsDaylight": true,
    "Temperature": {
      "Value": 42,
      "Unit": "F",
      "UnitType": 18
    },
    "PrecipitationProbability": 1,
    "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&lang=en-us",
    "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/hourly-weather-forecast/324291?day=2&hbhhour=7&lang=en-us"
  }
        ]';
  echo $resp;
}
else if($q==2){
  $servername = "localhost";
  $username = "root";
  $password = "";   //rSJ7ezzhCIDUonMw
  $dbname = 'weather';
  $city = $_GET['qCity'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = 'SELECT * FROM cities';
  $table = mysqli_query($conn, $sql);
  $size = mysqli_num_rows($table);
  for ($i=0; $i < $size; $i++) {
    $curCity = mysqli_fetch_row($table);
    if ($city == $curCity[1]) {
      $curl = curl_init();
      $url = 'http://dataservice.accuweather.com/forecasts/v1/daily/1day/'.$curCity[5].'?apikey=6bZOyyL2FNQCCnqGcZQFR3eSh4RWOYf1&details=true';
      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => $url,
          CURLOPT_USERAGENT => 'Codular Sample cURL Request'
      ));
      $resp = curl_exec($curl);
      curl_close($curl);
      $resp = (string)$resp;
      $res2 = '{
        "Headline": {
          "EffectiveDate": "2018-04-08T08:00:00+03:00",
          "EffectiveEpochDate": 1523163600,
          "Severity": 4,
          "Text": "Pleasant Sunday",
          "Category": "",
          "EndDate": null,
          "EndEpochDate": null,
          "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/extended-weather-forecast/324291?lang=en-us",
          "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/daily-weather-forecast/324291?lang=en-us"
        },
        "DailyForecasts": [
          {
            "Date": "2018-04-06T07:00:00+03:00",
            "EpochDate": 1522987200,
            "Sun": {
              "Rise": "2018-04-06T06:20:00+03:00",
              "EpochRise": 1522984800,
              "Set": "2018-04-06T19:28:00+03:00",
              "EpochSet": 1523032080
            },
            "Moon": {
              "Rise": "2018-04-06T00:44:00+03:00",
              "EpochRise": 1522964640,
              "Set": "2018-04-06T09:54:00+03:00",
              "EpochSet": 1522997640,
              "Phase": "WaningGibbous",
              "Age": 20
            },
            "Temperature": {
              "Minimum": {
                "Value": 45,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 62,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "RealFeelTemperature": {
              "Minimum": {
                "Value": 42,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 64,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "RealFeelTemperatureShade": {
              "Minimum": {
                "Value": 42,
                "Unit": "F",
                "UnitType": 18
              },
              "Maximum": {
                "Value": 60,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "HoursOfSun": 5.3,
            "DegreeDaySummary": {
              "Heating": {
                "Value": 12,
                "Unit": "F",
                "UnitType": 18
              },
              "Cooling": {
                "Value": 0,
                "Unit": "F",
                "UnitType": 18
              }
            },
            "AirAndPollen": [
              {
                "Name": "AirQuality",
                "Value": 0,
                "Category": "Good",
                "CategoryValue": 1,
                "Type": "Ozone"
              },
              {
                "Name": "Grass",
                "Value": 0,
                "Category": "Low",
                "CategoryValue": 1
              },
              {
                "Name": "Mold",
                "Value": 0,
                "Category": "Low",
                "CategoryValue": 1
              },
              {
                "Name": "Ragweed",
                "Value": 0,
                "Category": "Low",
                "CategoryValue": 1
              },
              {
                "Name": "Tree",
                "Value": 0,
                "Category": "Low",
                "CategoryValue": 1
              },
              {
                "Name": "UVIndex",
                "Value": 4,
                "Category": "Moderate",
                "CategoryValue": 2
              }
            ],
            "Day": {
              "Icon": 4,
              "IconPhrase": "Intermittent clouds",
              "ShortPhrase": "Times of clouds and sun",
              "LongPhrase": "Times of clouds and sun",
              "PrecipitationProbability": 40,
              "ThunderstormProbability": 20,
              "RainProbability": 40,
              "SnowProbability": 0,
              "IceProbability": 0,
              "Wind": {
                "Speed": {
                  "Value": 8.1,
                  "Unit": "mi/h",
                  "UnitType": 9
                },
                "Direction": {
                  "Degrees": 177,
                  "Localized": "S",
                  "English": "S"
                }
              },
              "WindGust": {
                "Speed": {
                  "Value": 11.5,
                  "Unit": "mi/h",
                  "UnitType": 9
                },
                "Direction": {
                  "Degrees": 161,
                  "Localized": "SSE",
                  "English": "SSE"
                }
              },
              "TotalLiquid": {
                "Value": 0.01,
                "Unit": "in",
                "UnitType": 1
              },
              "Rain": {
                "Value": 0.01,
                "Unit": "in",
                "UnitType": 1
              },
              "Snow": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "Ice": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "HoursOfPrecipitation": 0.5,
              "HoursOfRain": 0.5,
              "HoursOfSnow": 0,
              "HoursOfIce": 0,
              "CloudCover": 67
            },
            "Night": {
              "Icon": 36,
              "IconPhrase": "Intermittent clouds",
              "ShortPhrase": "Partly cloudy",
              "LongPhrase": "Partly cloudy",
              "PrecipitationProbability": 11,
              "ThunderstormProbability": 0,
              "RainProbability": 11,
              "SnowProbability": 0,
              "IceProbability": 0,
              "Wind": {
                "Speed": {
                  "Value": 5.8,
                  "Unit": "mi/h",
                  "UnitType": 9
                },
                "Direction": {
                  "Degrees": 236,
                  "Localized": "SW",
                  "English": "SW"
                }
              },
              "WindGust": {
                "Speed": {
                  "Value": 10.4,
                  "Unit": "mi/h",
                  "UnitType": 9
                },
                "Direction": {
                  "Degrees": 1,
                  "Localized": "N",
                  "English": "N"
                }
              },
              "TotalLiquid": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "Rain": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "Snow": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "Ice": {
                "Value": 0,
                "Unit": "in",
                "UnitType": 1
              },
              "HoursOfPrecipitation": 0,
              "HoursOfRain": 0,
              "HoursOfSnow": 0,
              "HoursOfIce": 0,
              "CloudCover": 71
            },
            "Sources": [
              "AccuWeather"
            ],
            "MobileLink": "http://m.accuweather.com/en/ua/kropyvnytskyi/324291/daily-weather-forecast/324291?day=1&lang=en-us",
            "Link": "http://www.accuweather.com/en/ua/kropyvnytskyi/324291/daily-weather-forecast/324291?day=1&lang=en-us"
          }
        ]
      }';
      echo $resp;
      break;
    }elseif ($i==$size-1) {
      echo "false";
    }
  }
  mysqli_close($conn);

}elseif ($q==3) {
  $servername = "localhost";
  $username = "root";
  $password = "";   //rSJ7ezzhCIDUonMw
  $dbname = 'weather';
  $city = $_GET['qCity'];

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = 'SELECT * FROM cities';
  $table = mysqli_query($conn, $sql);
  $size = mysqli_num_rows($table);
  for ($i=0; $i < $size; $i++) {
   $curCity = mysqli_fetch_row($table);
    if ($city == $curCity[1]) {
      echo "false";
      break;
    }elseif ($i==$size-1) {
      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => "http://dataservice.accuweather.com/locations/v1/cities/autocomplete?apikey=6bZOyyL2FNQCCnqGcZQFR3eSh4RWOYf1&q=".$city,
          CURLOPT_USERAGENT => 'Codular Sample cURL Request'
      ));
      $resp = curl_exec($curl);
      curl_close($curl);
     $resp = (string)$resp;
      $res = '[
        {
          "Version": 1,
          "Key": "332287",
          "Type": "City",
          "Rank": 45,
          "LocalizedName": "St. Petersburg",
          "Country": {
            "ID": "US",
            "LocalizedName": "United States"
          },
          "AdministrativeArea": {
            "ID": "FL",
            "LocalizedName": "Florida"
          }
        },
        {
          "Version": 1,
          "Key": "2206565",
          "Type": "City",
          "Rank": 85,
          "LocalizedName": "St. Petersburg",
          "Country": {
            "ID": "US",
            "LocalizedName": "United States"
          },
          "AdministrativeArea": {
            "ID": "PA",
            "LocalizedName": "Pennsylvania"
          }
        }
        ]';
            $resp = json_decode($resp);
      date_default_timezone_set("Europe/Kiev");
              $date = date('Y-m-d H:i:s');
              $key = $resp[0]->Key;
              $country_code = $resp[0]->Country->ID;
              $city = $resp[0]->LocalizedName;
              echo $city." ".$country_code." ".$date." ".$date." ".$key;
              $sql = "INSERT INTO cities (name, country_code, created_at, updated_at, cityKey)
              VALUES ('$city', '$country_code', '$date', '$date', '$key')";
              mysqli_query($conn, $sql);

          }
        }
        mysqli_close($conn);
      }
 ?>
