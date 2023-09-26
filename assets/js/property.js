let input= document.querySelector("#area");

let input1= document.querySelector("#cost");

let input2= document.querySelector("#stampduty");

let output= document.querySelector("#total");

//rent
input1.addEventListener('onclick', () =>{
   output.value = parseInt(input.value)+parseInt(input1.value)+parseInt(input2.value);
  
});

//total
// input1.addEventListener('change', () =>{
	

// });
