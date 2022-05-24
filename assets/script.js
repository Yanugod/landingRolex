
function mostrarMenu (toggleid, menuId){
    const menuToggle = document.getElementById(toggleid);
    const menu = document.getElementById(menuId);

    if(menuToggle && menu){

        menuToggle.addEventListener('click', ()=>{
            const menu__close = document.getElementById('menu__close')

            menu.classList.add("show");
            menu__close.classList.add("show");

        })
    }
}

mostrarMenu('menu__toggleIcon','hero__links');

function cerrarMenu (toggleid, menuId){
    const menuToggle = document.getElementById(toggleid);

    const menu = document.getElementById(menuId);

    if(menuToggle && menu){

        menuToggle.addEventListener('click', ()=>{
            menu.classList.remove("show");
        })
    }
}

cerrarMenu('menu__close','hero__links');



// function cambiarImg (data){
//     const imgPrincipal = document.querySelector('.img__reloj');
//     const imgModels = document.querySelectorAll('.imgModels');
//     if (data) {
//         let tempImg = imgPrincipal.src
//         imgPrincipal.src = imgModels[0].src
//         imgModels[0].src = tempImg

//     }
    
//     if (data == 2) {
//         let tempImg = imgPrincipal.src
//         imgPrincipal.src = imgModels[1].src
//         imgModels[1].src = tempImg
//     }
//     }