function handleSubmit () {
    const name = document.getElementById('name').value;
   
     const age = document.getElementById('agea').value;
    const date = document.getElementById('trip_date').value;
    const place = document.getElementById('subject').value;
      const person = document.getElementById('topic').value;
    const price = document.getElementById('chapter').value;
    // to set into local storage
    /* localStorage.setItem("NAME", name);
    localStorage.setItem("SURNAME", surname); */
    
    sessionStorage.setItem("NAME", name);
    sessionStorage.setItem("Age", age);
    sessionStorage.setItem("Date", date);
    sessionStorage.setItem("Place", place);
     sessionStorage.setItem("No.of persons", person);
     sessionStorage.setItem("Price", price);

    return;
}