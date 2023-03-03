/*----------------------------------------
SAVE NEWS
-----------------------------------------*/
const btnCreateNews = document.querySelector("#btnSaveNew")
const btnResetNews = document.querySelector("#btnResetNews")
const btnCerrarMsg = document.querySelector("#cerrarMsg")
const formNew = document.querySelector("#formNew")
async function createNews() {
    //recogemos los datos del formulario
    const labelNew = document.querySelector("#labelNew")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")
    const image = document.querySelector("#imageNew").files[0]
    const attach = document.querySelector("#attachNewFile").files
    const url = "/adminSite/model/createNews.php"
    const method = "POST"
    if (title.value != '' && description.value != '' && image != undefined) {
        //creamos un objeto formdata para enviar el formulario y archivos adjuntos
        const data = new FormData()
        for (let i = 0; i < attach.length; i++) {
            data.append('attach[]', attach[i]);//metemos los datos de los archivos a un array
        }
        //pasa los datos del formulario al objeto formdata para enviar
        data.append("title", title.value)
        data.append("description", description.value)
        data.append("image", image)
        //con la funcion fetch enviamos los datos a la url especificada,
        //se obtiene una respusta true o false en este caso, tambien puede ser un JSON u otro dato
        const response = await fetch(url, {
            method: method,
            body: data
        })
        const phpResponse = await response.json()
        if (phpResponse == "true") {
            msgInfo('La noticia y sus archivos se cargaron correctamente')
            resetNews()
        } else {
            msgInfo('La noticia no se pudo cargar correctamente, intentalo de nuevo, si el error persiste, contacte con el administador del sistema')
        }
    } else {
        title.value == '' ? title.classList.add("required") : title.classList.remove("required")
        description.value == '' ? description.classList.add("required") : description.classList.remove("required")
        image == undefined ? labelNew.classList.add("required") : labelNew.classList.remove("required")
        msgInfo('Debes diligencias todos los campos marcados con rojo');
    }
}

//resetear el formulario
function resetNews() {
    formNew.reset()
    const labelNew = document.querySelector("#labelNew")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")
    title.classList.remove("required")
    description.classList.remove("required")
    labelNew.classList.remove("required")
}

//funcion para mostrar div mensaje con error
function msgInfo(message) {
    const info = document.querySelector('.msgInfo')
    const msg = document.querySelector('.msg')
    msg.innerHTML = message
    info.style.display = "block"
}

function cerrarMsg() {
    const msgInfo = document.querySelector('.msgInfo')
    msgInfo.style.display = "none"
}

//manejadores de eventos
!(btnCreateNews == null) ? btnCreateNews.addEventListener("click", createNews) : null
!(btnResetNews == null) ? btnResetNews.addEventListener("click", resetNews) : null
!(btnCerrarMsg == null) ? btnCerrarMsg.addEventListener("click", cerrarMsg) : null
