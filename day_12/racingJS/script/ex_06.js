window.addEventListener(("load"), ()=>{
    const whiteBox = document.querySelector("footer div");

    fetch("https://data.education.gouv.fr/api/v2/catalog/datasets/fr-en-annuaire-education")
        .then((response) => response.json())
        .then((data) => {
            const fields = data.dataset.fields;
            console.log(fields[1]);
            /*for(let i = 0; i < fields.length; i++)
                whiteBox.innerText = fields[9]+" "+fields[1]+" "+fields[21]+"\n";*/
        });
});