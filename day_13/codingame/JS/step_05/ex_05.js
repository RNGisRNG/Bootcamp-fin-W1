function minute_to_second(duration){
    let minute = parseInt(duration.slice(0, 2));
    let seconde = minute * 60;
    let val = parseInt(duration.slice(3));

    console.log(seconde + val)
}