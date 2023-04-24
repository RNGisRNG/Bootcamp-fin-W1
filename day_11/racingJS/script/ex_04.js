window.addEventListener(("load"), ()=>{
   const whiteBox = document.querySelector("footer div");
   let str = "";

   window.addEventListener(("keydown"), (e)=>{
        str += e.key;
        whiteBox.innerText = str.slice(-42);
    });
});