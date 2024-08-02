let currentOperation = '';


function showAdd(): void{
    
    document.getElementById("math").innerHTML = String ("+") ;
    currentOperation = '+';
}
function showSubtract(): void{
   
    document.getElementById("math").innerHTML = String ("-") ;
    currentOperation = '-';
}
function showMultiply(): void{
   
    document.getElementById("math").innerHTML = String ("*") ;
    currentOperation = '*';
}
function showDivide(): void{
    
    document.getElementById("math").innerHTML = String ("/") ;
    currentOperation = '/';
}
 
function cal() {
    var num1;
    var num2;
    var x1;
    var x2;
    x1 = document.getElementById("num1");
    num1 = Number(x1.value);
    x2 = document.getElementById("num2");
    num2 = Number(x2.value);
    let res;

            switch (currentOperation) {
                case '+':
                    res = num1 + num2;
                    break;
                case '-':
                    res = num1 - num2;
                    break;
                case '*':
                    res = num1 * num2;
                    break;
                case '/':
                    res = num1 / num2;
                    break;
                default:
                    res = 'Invalid operation';
            }

            document.getElementById("result").innerHTML = "ผลลัพธ์: " + res;
}
// //function cal() : void{
//     //var num1 : number;
//    // var num2 : number;
//     //var x1: any ;
//     var x2 : any;
//     x1 = document.getElementById("num1");
//     num1 =Number( x1.value) ;
//     x2 = document.getElementById("num2");
//     num2 =Number (x2.value) ; 
//     var res : number = num1 + num2 ;
//     document.getElementById("result").innerHTML = String(res);

// }
