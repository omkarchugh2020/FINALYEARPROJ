//rent
let input= document.querySelector(".numberic");
let output= document.querySelector(".toword");
//rent * no of months
let input1= document.querySelector(".numberic1");
let output1= document.querySelector(".toword1");
//deposit 
let input2= document.querySelector(".numberic2");
let output2= document.querySelector(".toword2");
let noofmonths=document.querySelector("#ContractLength");
//total
let input3= document.querySelector(".numberic3");
let output3= document.querySelector(".toword3");


//rent
input.addEventListener('change', () =>{
    output.value=numberToWords.toWords(input.value)+" only";
});

//rent * no of months
input.addEventListener('change', () =>{
    input1.value=(input.value*noofmonths.value);
     output1.value=numberToWords.toWords(input.value*noofmonths.value)+" only";
});
//deposit 
input2.addEventListener('change', () =>{
    output2.value=numberToWords.toWords(input2.value)+" only";

});
//total
input2.addEventListener('change', () =>{
	input3.value=(parseInt(input1.value)+parseInt(input2.value));
    output3.value=numberToWords.toWords(parseInt(input1.value)+parseInt(input2.value))+" only";
});

