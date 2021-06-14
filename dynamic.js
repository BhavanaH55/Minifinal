/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var places={
    Delhi:['45000','90000'],
    Assam:['50000','70000']
}
var main=document.getElementById('main_menu');
var sub=document.getElementById('sub_menu');
main.addEventListener('change',function(){
    var selected_option = places[this.value];
    while(sub.options.length >0){
    sub.options.remove(0);
}
Array.from(selected_option).ForEach(function(el){
    let option=new Option(el,el);
    sub.appendChild(option);
});
});


/*var valueCount;
        
var price=document.getElementById("price").innerText;
         function priceTotal()
         {
             var total=valueCount*price;
             document.getElementById("price").innerText=total;
         }
       
        
        document.querySelector(".plus-btn").addEventListener("click",function(){
            valueCount=document.getElementById("quantity").value;
            valueCount++;
             valueCount=document.getElementById("quantity").value=valueCount;
             if(valueCount>1){
                
                 document.querySelector(".minus-btn").removeAttribute("disabled");
             }
             
            priceTotal(); 
            
        })
         document.querySelector(".minus-btn").addEventListener("click",function(){
            valueCount=document.getElementById("quantity").value;
            valueCount--;
             valueCount=document.getElementById("quantity").value=valueCount;
             if(valueCount==1){
                 document.querySelector(".minus-btn").setAttribute("disabled","disabled");
             }
            priceTotal(); 
        })
 * 
 */