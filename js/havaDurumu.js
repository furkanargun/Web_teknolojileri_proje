const url = 'https://api.openweathermap.org/data/2.5/'
const key = 'eb60967494279b2049cd0cbd795b2793'

/*
getResult = (denizli) => {
    let query = '${url}weather?q=denizli&appid=${key}&units=metric&lang=tr'
    fetch(query)
    .then(weather => {
        return weather.json()
    })
    .then(data => {
      console.log(data);
    })
}
getResult();


const displayResult =(result) => {
    let temp = document.querySelector('.temp')
    temp.innerText = '${Math.round(result.main.temp)}°C'
}
*/

let query = 'https://api.openweathermap.org/data/2.5/weather?q=denizli&appid=eb60967494279b2049cd0cbd795b2793&units=metric&lang=tr'
    fetch(query)
    .then(weather => {
        return weather.json()
    })
    .then(data => {
        displayResult(data)
    })

    const displayResult =(result) => {
        
        let humidity = Math.round(result.main.humidity)
        document.querySelector('.humidity').innerText = 'Nem: ' + humidity + '%'

        let temp = Math.round(result.main.temp)
        document.querySelector('.temp').innerText = temp+'°C'
        

        //let mainClass = document.querySelector('.content').append('<div class="humidity">'+humidity+'</div>')
        
       }