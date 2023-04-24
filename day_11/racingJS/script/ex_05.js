window.addEventListener(("load"), ()=>{
    const button = document.querySelectorAll("footer button");
    const whiteBox = document.querySelector("footer div");
    const select = document.querySelector("footer select");
    const text = document.querySelectorAll("body");
    let textSize = 16;

    select.addEventListener(("input"), (e)=>{
        whiteBox.style.backgroundColor = select.value;
    });

    button[0].addEventListener(("click"), ()=>{
        for(let i = 0; i < text.length; i++){
            textSize++;
            text[i].style.fontSize = textSize+"px";
        }
    });

    button[1].addEventListener(("click"), ()=>{
        for(let j = 0; j < text.length; j++){
            if(textSize >= 2){
                textSize--;
                text[j].style.fontSize = textSize+"px";
            }
        }
    });
});