window.addEventListener(("load"), ()=>{
    const whiteBox = document.querySelector("footer div")
    let i = 0;

       whiteBox.addEventListener(("click"), ()=>{
           whiteBox.innerText = i++;
       });
});