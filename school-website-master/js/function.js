const menu = () =>{
    const list = document.querySelector('#dropdown');
    
    const menu = document.querySelector('#menu');
    
    //list.style.display = "none";
    
    menu.addEventListener('click', function(){
        
       if(menu.textContent == "MENU"){
           
           list.style.display = "block";
           
           menu.textContent = "HIDE";
       }else{
           
           list.style.display = "none";
           
           menu.textContent = "MENU";
       } 
});
    
    
}

menu();