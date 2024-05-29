function getDateTime(){
    let datetime = new Date();
    document.getElementById("footer").innerHTML = datetime.toLocaleString();
}


