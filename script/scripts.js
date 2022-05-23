// Menu responsivo //

let show = true;   // 1º crio a variavel show, e true= mostrando o menu //

const menuSection = document.querySelector(".menu-section")   // 2º Pegando os menu Section e Toggle //
const menuToggle = document.querySelector(".menu-toggle")
 
menuToggle.addEventListener("click", () =>{    // Quando clicar no menuToggle vai rodar uma função () //
    
    document.body.style.overflow = show ? "hidden" : "initial"  
    
    menuSection.classList.toggle("on", show)  // pegando o menuSection e adicionando as classes desse menu ("on") ao toggle, ou seja se existir o on ele vai tirar se não vai colocar //
    show= !show;                              // para ter a segurança de não haver bug, atualizando esse show dizendo que é diferente do primeiro show
}) 

// em formato de arrow function
