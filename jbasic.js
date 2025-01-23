// var number=7;
// var x=parseInt(prompt("Enter a number: "))
// var y=parseInt(prompt("Enter another number: "))
// var operation=prompt("Enter another number: ")



// if(number>1){
//     let number=11;
//     document.write(number);
// }
// document.write(number);
// // Output: 11 7

// function add(x,y){
//     return x+y;
// }
// var result=add(x,y);
// alert(result);
//use switch case to perform mathematical operations

// function operate(x,y){
//     if (operation='+'){ return x+y;}
//     else if (operation='-'){ return x-y;}
//     else if (operation='*'){ return x*y;}
//     else if (operation='/'){ return x/y;}
//     else {return "Invalid operation";}
// }
// function operate(x, y, operation) {
//     switch (operation) {
//         case '+':
//             return x + y;
//         case '-':
//             return x - y;
//         case '*':
//             return x * y;
//         case '/':
//             return x / y;
//         default:
//             return "Invalid operation";
//     }
// }
// function clickMe(){
//     var fname=document.getElementById("first_name").value;
//     var lname=document.getElementById("last_name").value;
//     var full=fname+" "+lname;
//     // alert("Hello! "+full);
//     // alert(`Hello! ${full}`);
//     // document.getElementById("result").innerText=full;
//     var fmessage="Please enter first name"
//     var lmessage="Please enter last name"

//     if(fname==""){
//         document.getElementById("result").innerText=fmessage;
//     }
//      else if(lname==""){
//         document.getElementById("result").innerText=lmessage;
//     }
//     else{
//     document.getElementById("result").innerText=full;

//     }
function hide() {
    var ele = document.getElementById("box");
    var btn = event.target; // The button element

    if (ele.style.display === "none") {
      ele.style.display = "block"; // Show the box
      btn.textContent = "Hide"; // Update button text
    } else {
      ele.style.display = "none"; // Hide the box
      btn.textContent = "Show"; // Update button text
    }
  }

  function hide_show(){
    var ele=document.getElementById("box");
    if(ele.style.display=="none"){
         ele.style.display="block";}
    else{
        ele.style.display="none";}
    }

  


    // event.preventDefault();

