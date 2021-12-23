

function addHoroscope() {

    document.getElementById("date")
    let datum = date.value;
    console.log(datum);

    let url = "./addHoroscope.php"
    let method = "POST"
    
    let formData = new FormData()  
    formData.set("date", datum)
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope()
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
 
}


function updateHoroscope(){
    document.getElementById("date")
    let datum = date.value;
    console.log(datum + " updated!");

    let url = "./updateHoroscope.php"
    let method = "POST"
    
    let formData = new FormData()  
    formData.set("dates", datum)
 
    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope()
    }).catch((err) => {
        console.log("Error: ", err)
    })
    
}


function deleteHoroscope() {

    fetch("./deleteHoroscope.php", {
      method: "DELETE",
    }).then((data) => {
        return data.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope();
    }).catch((err) => {
      console.error(err)
    })
  console.log("Successfully delete the saved horoscop")
  }




function viewHoroscope(){

    fetch("./viewHoroscope.php", {   
      method: "GET",
    }).then((data) => {
      return data.json()
    }).then((result) => {
        console.log(result)
        printHoroscope(result)
    }).catch((err) => {
      console.log(err)
    })
  }


 function printHoroscope(result) {
    var div = document.getElementById("showHoroscope")
    if(result) {
        div.innerHTML = result
    } else {
        div.innerHTML = ""
    } 
} 

