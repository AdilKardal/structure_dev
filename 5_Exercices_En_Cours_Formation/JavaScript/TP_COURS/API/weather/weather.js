let pSelector = document.querySelector("p");
let temperature = document.querySelector(".temps");
let icone = document.querySelector(".icon");
let description = document.querySelector(".desc");
let btnSelector = document.querySelector("button");

btnSelector.addEventListener("click", function () {
  let inputSelector = document.querySelector("input");
  console.log(inputSelector.value);

  fetch(
    `https://api.openweathermap.org/data/2.5/weather?q=${inputSelector.value}&appid=91f40637a9cf837a5cee29d14c07e41b&units=metric&lang=fr`
  )
    .then((response) => {
      console.log(response);
      return response.json();
    })
    .then((weatherCity) => {
      console.log(weatherCity);
      pSelector.textContent = weatherCity.name;
      temperature.textContent = `${Math.round(weatherCity.main.temp)}°`;
      description.textContent = weatherCity.weather[0].description;
      icone.src = `http://openweathermap.org/img/wn/${weatherCity.weather[0].icon}@2x.png`
    });
});


