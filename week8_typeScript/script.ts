let myname  :string = "Monchai";
let mynumber : number = 19 ;

console.log(myname);
//console.log(mynumber);

function showMyAge(): void{
    //mynumber++;
    console.log(mynumber);
    document.getElementById("age_data").innerHTML = String (mynumber) ;
}
 
function cal() : void{
    var num1 : number;
    var num2 : number;
    var x1: any ;
    var x2 : any;
    x1 = document.getElementById("num1");
    num1 =Number( x1.value) ;
    x2 = document.getElementById("num2");
    num2 =Number (x2.value) ; 
    var res : number = num1 + num2 ;
    document.getElementById("age_data").innerHTML = String(res);

}