async function fetchData() {
    try {
        const response = await fetch("https://api.punkapi.com/v2/beers")
        const data = await response.json()
        return data

    } catch (error) {
        console.error(error)
    }
}
const beers = fetchData()
console.log(beers)
