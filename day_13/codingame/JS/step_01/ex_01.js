function display_recu(nbrLoop, symbol){
    let str = "";
    let space = "";

    for(let i = 0; i < nbrLoop; i++){
        if(i === nbrLoop-1){
            str += space+symbol;
        }else{
            str += space+symbol+"\n";
            space += " ";
        }
    }

    console.log(str);
}