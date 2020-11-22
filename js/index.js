let api = 'https://api.punkapi.com/v2/beers'

async function getBeerList() {
    response = await fetch(api)
    let data = await response.json()
    let listHtml = document.getElementById('list')
    for (let i = 0; i < data.length; i++) {
        const beer = data[i];
        listHtml.innerHTML += `<li>${beer.name}</li>`
    }
}
