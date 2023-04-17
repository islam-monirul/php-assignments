function multiplicationTable(num){

    // checking if anything other than integer is provided as parameter
    if(!Number.isInteger(num)){
        console.log("You must provide an integer number.");
        return;
    }
    
    let product;
    for(let i=1; i<=10; i++){
        product = i * num;

        console.log(num + " x " + i + " = " + product);
    }
}

multiplicationTable(4);