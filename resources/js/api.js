async function afiche() {
    const fromcity =  document.getElementById('fromcity');
    const tocity =  document.getElementById('tocity');
    const response = await fetch("./../../js/city.json");
    const citys = await response.json();
    console.log(citys);
    citys.forEach(city => {
        fromcity.innerHTML+= `<option>${city.ville}</option>`;
        tocity.innerHTML+= `<option>${city.ville}</option>`;

    })
}
afiche();
console.log('rr');
