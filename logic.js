

function addHoroscope() {

    const date= document.getElementById("date")
    let datum = date.value;


    let url = "./API/addHoroscope.php"
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
    const date = document.getElementById("date")
    let datum = date.value;

    let url = "./API/updateHoroscope.php"
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


function deleteHoroscope() {

    fetch("./API/deleteHoroscope.php", {
      method: "DELETE",
    }).then((data) => {
        return data.json()
    }).then((result) => {
        console.log(result)
        viewHoroscope();
    }).catch((err) => {
      console.error("Error: ", err)
    })
  console.log("Successfully delete the saved horoscope")
  }




function viewHoroscope(){

    fetch("./API/viewHoroscope.php", {   
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
        div.innerHTML = "Cleared!"
    } 
} 

