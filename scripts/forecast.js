function forecast() {
  var xhttp = new XMLHttpRequest();
  xhttp.onload = tryto;
  xhttp.open("GET", "data/api.php?q=" + '1', true);
  xhttp.send();
  function tryto() {
    var data = JSON.parse(this.responseText);
    function getToday() {
      var d = new Date();
      var month = d.getMonth() + 1;
      switch (d.getDay()) {
          case 0:
              day = "Sunday";
              break;
          case 1:
              day = "Monday";
              break;
          case 2:
              day = "Tuesday";
              break;
          case 3:
              day = "Wednesday";
              break;
          case 4:
              day = "Thursday";
              break;
          case 5:
              day = "Friday";
              break;
          case 6:
              day = "Saturday";
      }
      var dat = day + ' ' + d.getDate() + "/" + month;
      document.getElementById("today").innerHTML = dat;
    }
    getToday();
    //--------------------------------------------------------------------------
    function getTemp() {
      var cels = data[0].Temperature.Value;
      cels = (cels-32)/1.8;
      cels = cels.toFixed(0);
      document.getElementById("temp0").innerHTML = cels + '&deg';
    }
    getTemp();
    //--------------------------------------------------------------------------
    function getFutTemp() {
        for (var i = 0; i < 6; i++) {
          var cels = data[i+1].Temperature.Value;
          cels = (cels-32)/1.8;
          cels = cels.toFixed(0);
          document.getElementById("temp"+(i+1)).innerHTML = cels + '&deg';
        }
      }
    getFutTemp();
    //--------------------------------------------------------------------------
    function getFutTime() {
      for (var i = 0; i < 6; i++) {
        var hour = new Date(data[i+1].DateTime);
        hour = String(hour.getHours());
        if (hour.length == 1) {
          hour = '0' + hour;
        }
        document.getElementById("ho"+ (i+1)).innerHTML = hour + ':00';
      }
    }
    getFutTime();
    //--------------------------------------------------------------------------
    function getIcons() {
        for (var i = 0; i < 7; i++) {
          var a = data[i].WeatherIcon;
          document.getElementById('ic' + i).src = "https://vortex.accuweather.com/adc2010/images/slate/icons/"+ a +".svg";
        }
      }
      getIcons();
  }
}
forecast();
