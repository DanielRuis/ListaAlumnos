//?Seccion de tarjetas
const cardAdd = document.querySelector("#barAdd");//*Cargamos la carta de añadir
const cardUpdate = document.querySelector("#barUpdate");//*Cargamos la carte de actualizar
const cardDelete = document.querySelector("#barDelete");//*Cargamos la carta de borrar
//?Seccion de vistas
const containerAdd=document.querySelector("#addView");//*Cargamos el contenedor de add
const containerUpdate=document.querySelector("#updateView");//*Cargamos el contenedor de add
const containerDelete=document.querySelector("#deleteView");//*Cargamos el contenedor de add
//?Seccion de añadir a la lista de de alumnos
const name = document.querySelector('#name');//*Se carga el nombre
const tel=document.querySelector('#matri');//*Se carga el Telefono
const correo = document.querySelector('#correo');//*Se carga el Correo
const buttonAdd = document.querySelector('#buttonAdd');//*Se carga el boton de añadir a la lista
const infoAdd = document.querySelector('#infoAdd');//*Se carga la seccion para añadir texto
//?----------------------------------------------------------------

//?Acciones con la parte de añadir alumnos
cardAdd.addEventListener("click",toggleAdd);

function toggleAdd(){
    if(containerUpdate.classList.contains("inactive")&&containerDelete.classList.contains("inactive")){
        containerAdd.classList.toggle("inactive");
    }
}

//?Aciones con la parte de modificar alumnos
cardUpdate.addEventListener("click",toggleUpdate);
function toggleUpdate(){
    if(containerAdd.classList.contains("inactive")&&containerDelete.classList.contains("inactive")){
        containerUpdate.classList.toggle("inactive");
    }
}

//?Acciones con la parte de eliminar alumnos

cardDelete.addEventListener("click",toggleDelete);
function toggleDelete(){
    if(containerAdd.classList.contains("inactive")&&containerUpdate.classList.contains("inactive")){
        containerDelete.classList.toggle("inactive");
    }
}
