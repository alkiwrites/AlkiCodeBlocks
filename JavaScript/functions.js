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
    // xhttp.setRequestHeader('Accept', 'application/json');  // alt
    xhttp.send(); // go! LOl
}


// post string of data to URL
function postData(URL,buffer , callback ) {
     let xhttp = new XMLHttpRequest(); // the thing
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        callback(this.responseText); // the cb 
      }
    };
       // post request
      xhttp.open("POST", URL, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send('buffer='+buffer); // send string buffer
}