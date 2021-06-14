window.addEventListener('load', () => {

    // Via Query parameters - GET
    /* const params = (new URL(document.location)).searchParams;
    const name = params.get('name');
    const surname = params.get('surname'); */

    // Via local Storage
    /* const name = localStorage.getItem('NAME');
    const surname = localStorage.getItem('SURNAME'); */
    
    const name = sessionStorage.getItem('NAME');
     const age = sessionStorage.getItem('Age');
     const date = sessionStorage.getItem('Date');
     const place = sessionStorage.getItem('Place');
    const persons = sessionStorage.getItem('No.of persons');
    const prices = sessionStorage.getItem('Price');
    document.getElementById('result-name').innerHTML = name;
    document.getElementById('result-age').innerHTML = age;
    document.getElementById('result-date').innerHTML = date;
     document.getElementById('result-place').innerHTML = place;
     document.getElementById('result-person').innerHTML = persons;
     document.getElementById('result-price').innerHTML = prices;

})