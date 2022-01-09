
function saveHoroscope(){
    const date = document.getElementById("date").value;
    console.log(date + "Saved!")
    addHoroscope(date)
}

function addHoroscope(date) {
    let url = "./addHoroscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", date)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

function toUpdateHoroscope(){
    const update = document.getElementById("date").value;
    console.log(update + " updated!");
    updateHoroscope(update)
}

function updateHoroscope(update){

    let url = "./updateHoroscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", update)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

function toDeleteHoroscope() {
    const remove = document.getElementById("date").value;
    console.log(remove + " removed!");
    deleteHoroscope()
}

function deleteHoroscope() {
    let url = "./deleteHoroscope.php"
    let method = "DELETE"

    fetch(url, {
        method: method
    }).then((response) => {
        return response.json()
    }).then((body) => {
     
        console.log(body)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

  function viewHoroscope(){
    let url = "./viewHoroscope.php"
    let method = "GET"

    fetch(url, {
        method: method
    }).then((response) => {
        return response.json()
    }).then((result) => {
        const show = document.querySelector("showHoroscope")
        show.innerHTML = result

        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}







