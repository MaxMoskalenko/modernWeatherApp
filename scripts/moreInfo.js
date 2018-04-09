function moreInfo() {
  var city = document.getElementById('city').value;
  if (city == '') {
    alert('No City');
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onload = tryto;
  xhttp.open("GET", "data/api.php?q=2&qCity=" + city, true);
  xhttp.send();
  function tryto() {
    if (this.responseText !== 'false') {
      var data = JSON.parse(this.responseText);
      document.getElementById('fc-city-icon').src = "https://vortex.accuweather.com/adc2010/images/slate/icons/"+ data.Headline.Severity +".svg"
      var minTemp = ((data.DailyForecasts[0].Temperature.Minimum.Value-32)/1.8).toFixed(0);
      var maxTemp = ((data.DailyForecasts[0].Temperature.Maximum.Value-32)/1.8).toFixed(0);
      var avTemp = ((Number(minTemp) + Number(maxTemp))/2).toFixed(0);
      document.getElementById('curTemp').innerHTML = avTemp + '&deg';
      document.getElementById('minTemp').innerHTML = minTemp + '&deg';
      document.getElementById('maxTemp').innerHTML = maxTemp + '&deg';
      document.getElementById('probD').innerHTML =  data.DailyForecasts[0].Day.PrecipitationProbability;
      document.getElementById('probN').innerHTML =  data.DailyForecasts[0].Night.PrecipitationProbability;
      document.getElementById('speedD').innerHTML =  data.DailyForecasts[0].Day.Wind.Speed.Value;
      document.getElementById('speedN').innerHTML =  data.DailyForecasts[0].Night.Wind.Speed.Value;
      document.getElementById('dirD').innerHTML =  data.DailyForecasts[0].Day.Wind.Direction.Localized;
      document.getElementById('dirN').innerHTML =  data.DailyForecasts[0].Night.Wind.Direction.Localized;
      document.getElementById('cloudsD').innerHTML = data.DailyForecasts[0].Day.CloudCover;
      document.getElementById('cloudsN').innerHTML =  data.DailyForecasts[0].Night.CloudCover;
      var hour = new Date(data.DailyForecasts[0].Sun.Rise).getHours();
      var min = new Date(data.DailyForecasts[0].Sun.Rise).getMinutes();
      document.getElementById('SRise').innerHTML =  hour+':'+min;
      hour = new Date(data.DailyForecasts[0].Moon.Rise).getHours();
      min = new Date(data.DailyForecasts[0].Moon.Rise).getMinutes();
      document.getElementById('MRise').innerHTML =  hour+':'+min;
      hour = new Date(data.DailyForecasts[0].Sun.Set).getHours();
      min = new Date(data.DailyForecasts[0].Sun.Set).getMinutes();
      document.getElementById('SSet').innerHTML =  hour+':'+min;
      hour = new Date(data.DailyForecasts[0].Moon.Set).getHours();
      min = new Date(data.DailyForecasts[0].Moon.Set).getMinutes();
      document.getElementById('MSet').innerHTML =  hour+':'+min;
      document.getElementById('MDay').innerHTML =  data.DailyForecasts[0].Moon.Age;
      document.getElementById('SHours').innerHTML =  data.DailyForecasts[0].HoursOfSun;
    }
    else {
      alert('No city in database');
    }
  }
}
moreInfo();

function addCity() {
  var xhttp = new XMLHttpRequest();
  var city = document.getElementById('city').value;
  if (city == '') {
    alert('No City');
  }
  xhttp.onload = tryto;
  xhttp.open("GET", "data/api.php?q=3&qCity=" + city, true);
  xhttp.send();
  function tryto() {

  }
}

document.getElementById("city")
.addEventListener("keyup", function(event) {
event.preventDefault();
if (event.keyCode === 13) {
  moreInfo();
  //  document.getElementById("send").click();
}
});
