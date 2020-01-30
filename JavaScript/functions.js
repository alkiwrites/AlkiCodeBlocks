 // get data fronm from URL in JSON format
 function getData( URL , callback ) {
    var xhttp = new XMLHttpRequest();  // make
    xhttp.onreadystatechange = function() { // check
        if (this.readyState == 4 && this.status == 200) {
            callback(JSON.parse(this.responseText));  // callback response as JSON
        } 
    };
    xhttp.open('GET', URL , true); // ready
    xhttp.setRequestHeader('Content-Type', 'application/json'); // set   
    xhttp.send(); // go! LOl
}


// post string of data to URL
function postData(URL,buffer , callback ) {
    var xhttp = new XMLHttpRequest();  // make
    xhttp.onreadystatechange = function() { // check
        if (this.readyState == 4 && this.status == 200) {
            callback(this.response);  // return response
        } 
    };
    xhttp.open('POST', URL , true); // ready
    xhttp.send('buffer=' + buffer); // go! LOl
}