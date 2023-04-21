window.addEventListener(("load"), ()=>{
    const whiteBox = document.querySelector("footer div");
    let name = "";

    whiteBox.addEventListener(("click"), ()=>{
        do{
            name = window.prompt("What is your name ?");
        }while(name === "" || name === null);

        if(window.confirm("Are you sure "+name+" is your name ?")){
            whiteBox.innerText = "Hello "+name+" !";
            alert("Hello "+name+" !");
        }
    });
});