document.getElementById('searchButton').addEventListener('click', function () {
    const city = document.getElementById('cityInput').value.trim();
    const apiKey = '3d1628845b70f805082b0cc084784c0c'; // Substitua pela sua chave da OpenWeatherMap API

    if (city) {
        fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&lang=pt_br&appid=${apiKey}`)
            .then(response => response.json())
            .then(data => {
                if (data.cod === 200) {
                    document.getElementById('weatherResult').innerHTML = `
                        <h2>${data.name}, ${data.sys.country}</h2>
                        <p>Temperatura: ${Math.round(data.main.temp)}°C</p>
                        <p>Clima: ${data.weather[0].description}</p>
                        <p>Umidade: ${data.main.humidity}%</p>
                        <p>Vento: ${data.wind.speed} km/h</p>
                    `;
                } else {
                    document.getElementById('weatherResult').innerHTML = `<p>Cidade não encontrada.</p>`;
                }
            })
            .catch(() => {
                document.getElementById('weatherResult').innerHTML = `<p>Erro ao buscar dados. Tente novamente.</p>`;
            });
    } else {
        alert('Por favor, digite o nome de uma cidade.');
    }
});

