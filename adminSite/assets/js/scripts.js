const btnCreateNews = document.querySelector("#btnSaveNew")
const btnResetNews = document.querySelector("#btnResetNews")
const btnCerrarMsg = document.querySelector("#cerrarMsg")
const btnDeleteNews = document.querySelector("#btnDeleteNews")
const btnUpdateNews = document.querySelector("#btnUpdateNews")
const btnDate = document.querySelector("#btnDate")
const inputSearch = document.querySelector('#inputSearch')
const inputSearchDate = document.querySelector('#inputSearchDate')
const news = document.querySelector("#news")
const contentPqrsf = document.querySelector(".contentPqrsf")
const typePqrsf = document.querySelector("#typePqrsf")
const statePqrsf = document.querySelector("#statePqrsf")
const datePqrsf = document.querySelector("#datePqrsf")


/*----------------------------------------
            CREATE NEWS
-----------------------------------------*/
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

/*----------------------------------------
            MESSAGE
-----------------------------------------*/

//funcion para mostrar div mensaje con error o informativo
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

/*----------------------------------------
            SHOW ALL NEWS
-----------------------------------------*/
//consulta todas las noticias y las imprime en una tabla
async function allNews() {
    let datos = []
    const url = '/adminSite/model/allNews.php'

    await fetch(url)
        .then(response => response.json())
        .then(data => datos.push(...data))
    renderNews(datos)
}

async function renderNews(datos) {
    const htmlHead = `
        <tr class="titleTable">
            <th>Noticia</th>
            <th>Fecha</th>
            <th>Estado</th>
        </tr>
        `
    if (datos != "") {
        const html = await datos.map(data => {
            return `
            <tr class="tr" id="itemNews" data-keyNews="${data.idNoticia}">
                <td data-keyNews="${data.idNoticia}" onClick="selectNews(event)">${data.titulo}</td>
                <td data-keyNews="${data.idNoticia}" onClick="selectNews(event)">${data.fecha}</td>
                <td data-keyNews="${data.idNoticia}" onClick="selectNews(event)" style="text-align: right;"><i class="fa-solid fa-trash-can" id="btnDeleteNews" data-keyNews="${data.idNoticia}" onClick="deleteNews(event)"></i></td>
            </tr>
            `
        }).join('')
        news.innerHTML = htmlHead + html
    } else {
        news.innerHTML = `<h1 class="font-bold text text-2xl text-center">Sin Resultados</h1>`
    }
}

/*----------------------------------------
            DELETE NEWS
-----------------------------------------*/
//borra la noticias y todos sus archivos adjuntos
async function deleteNews(e) {
    e.stopPropagation()
    const idNoticia = e.target.dataset.keynews
    const url = "/adminSite/model/deleteNews.php"
    const method = "POST";
    const data = new FormData()
    data.append("idNoticia", idNoticia)

    const response = await fetch(url, {
        method: method,
        body: data
    })
    const phpResponse = await response.json()
    if (phpResponse == "true") {
        msgInfo("La noticia y sus adjuntos se borraron exitosamente")
        allNews()
    } else {
        msgInfo("La noticia no se pudo borrar correctamente, intentalo de nuevo, si el error persiste, contacte con el administador del sistema")
    }

}

/*----------------------------------------
            DELETE ATTACHs
-----------------------------------------*/
//borra la noticias y todos sus archivos adjuntos
async function deleteAttach(e) {
    e.stopPropagation()
    const noticia = document.querySelector("#updateNews")
    const idNoticia = noticia.dataset.keynews
    const idAdjunto = e.target.dataset.keyattach
    const url = "/adminSite/model/deleteAttach.php"
    const method = "POST";
    const data = new FormData()
    data.append("idAdjunto", idAdjunto)

    const response = await fetch(url, {
        method: method,
        body: data
    })
    const phpResponse = await response.json()
    if (phpResponse == "true") {
        msgInfo("Archivo adjunto eliminado exitosamente")
        showAttach(idNoticia)
    } else {
        msgInfo("El adjunto no se pudo borrar correctamente, intentalo de nuevo, si el error persiste, contacte con el administador del sistema")
    }

}

/*----------------------------------------
            SEARCH NEWS
-----------------------------------------*/

async function searchNews() {
    const datos = []
    const search = (inputSearch.value).replace(/[.,'"]/g, "")
    const searchDate = inputSearchDate.value
    const url = "/adminSite/model/allNews.php"
    const method = "POST";
    const data = new FormData()
    data.append("search", search)
    data.append("searchDate", searchDate)
    const response = await fetch(url, {
        method: method,
        body: data
    })
    await response.json()
        .then(data => datos.push(...data))
    renderNews(datos)
}

/*----------------------------------------
            UPDATE NEWS
-----------------------------------------*/

async function selectNews(e) {
    //insertamos la vista de edicion de la noticia
    const contentNews = document.querySelector(".contentNews")
    const datos = []
    const responseHtml = await fetch("/adminSite/dashboard/noticias/actualizarNoticia/index.php")
    const html = await responseHtml.text()
    contentNews.innerHTML = html
    //mandamos los datos a guardar
    const idNoticia = e.target.dataset.keynews
    const data = new FormData()
    data.append("idNoticia", idNoticia)
    const response = await fetch("/adminSite/model/selectNews.php", {
        method: "POST",
        body: data
    })
    await response.json()
        .then(data => datos.push(...data))
    //actualizamos los campos con a informacion consultada en la BD
    const id = document.querySelector("#updateNews")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")
    id.dataset.keynews = idNoticia
    title.value = datos[0].titulo
    description.value = datos[0].descripcion
    //mostramos los archivos adjunto de la noticia seleccionada a actualizar
    showAttach(idNoticia)
}

async function showAttach(idNoticia) {
    const datos = []
    const attach = document.querySelector("#attach")
    const data = new FormData()
    data.append("idNoticia", idNoticia)
    const response = await fetch("/adminSite/model/selectAttach.php", {
        method: "POST",
        body: data
    })
    const responseAttach = await response.json()
    if (!(responseAttach == "false")) {
        datos.push(...responseAttach)

        const html2 = datos.map(data => {
            return `
            <tr class="tr">
                <td>${data.nombre}</td><td style="text-align: right;"><i class="fa-solid fa-trash-can" id="btnDeleteNews" data-keyAttach="${data.idAdjunto}" onClick="deleteAttach(event)"></i></td>
            </tr>
                `
        }).join('')
        attach.innerHTML = html2
    } else {
        attach.innerHTML = `<tr><td>Sin archivos adjuntos</td></tr>`
    }
}

async function updateNews() {
    //recogemos los datos del formulario
    const labelNew = document.querySelector("#labelNew")
    const idNoticia = document.querySelector("#updateNews")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")
    const image = document.querySelector("#imageNew").files[0]
    const attach = document.querySelector("#attachNewFile").files
    const url = "/adminSite/model/updateNews.php"
    const method = "POST"
    if (title.value != '' && description.value != '') {
        //creamos un objeto formdata para enviar el formulario y archivos adjuntos
        const data = new FormData()
        for (let i = 0; i < attach.length; i++) {
            data.append('attach[]', attach[i]);//metemos los datos de los archivos a un array
        }
        //pasa los datos del formulario al objeto formdata para enviar
        data.append("idNoticia", idNoticia.dataset.keynews)
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
            showAttach(idNoticia.dataset.keynews)
        } else {
            console.log(phpResponse)
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
function cancelNew() {
    formNew.reset()
    const labelNew = document.querySelector("#labelNew")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")
    title.classList.remove('required')
    description.classList.remove('required')
    labelNew.classList.remove('required')
}

function requiredNew() {
    const labelNew = document.querySelector("#labelNew")
    const title = document.querySelector("[name='titleNew']")
    const description = document.querySelector("[name='descriptionNew']")

    console.log('actu')
}

/*----------------------------------------
            PQRSF
-----------------------------------------*/

async function allPqrsf() {
    let datos = []
    const url = "/adminSite/model/allPqrsf.php"
    await fetch(url)
        .then(response => response.json())
        .then(data => datos.push(...data))
    renderPqrsf(datos)
}

async function searchPqrsf() {
    const datos = []
    const type = typePqrsf.value
    const state = statePqrsf.value
    const date = datePqrsf.value
    const url = "/adminSite/model/allPqrsf.php"
    const method = "POST";
    const data = new FormData()
    data.append("type", type)
    data.append("state", state)
    data.append("date", date)
    const response = await fetch(url, {
        method: method,
        body: data
    })
    await response.json()
        .then(data => datos.push(...data))
    renderPqrsf(datos)
} 

async function renderPqrsf(datos) {
    let tipoProceso = ""
    const htmlHead = `
        <tr class="titleTable">
            <th class="">Fecha</th>
            <th class="">Radicado</th>
            <th class="">Tipo de Proceso</th>
            <th class="">Estado</th>
        </tr>
        `
    if (datos != "") {
        const html = await datos.map(data => {
            return `
            <tr class="tr">
                <td data-keyPqrsf="${data.idpqrsf}" onClick="readPqrsf(event)">${data.fecha}</td>
                <td data-keyPqrsf="${data.idpqrsf}" onClick="readPqrsf(event)">${data.radicado}</td>
                <td data-keyPqrsf="${data.idpqrsf}" onClick="readPqrsf(event)">${tipoPro(data.tipoProceso)}</td>
                <td data-keyPqrsf="${data.idpqrsf}" onClick="readPqrsf(event)">${data.estado}</td>
            </tr>
            `
        }).join('')
        pqrsf.innerHTML = htmlHead + html
    } else {
        pqrsf.innerHTML = `<h1 class="font-bold text text-2xl text-center">Sin Resultados</h1>`
    }


}

async function readPqrsf(e) {
    //insertamos la vista de edicion de la noticia
    const datos = []
    const responseHtml = await fetch("/adminSite/dashboard/pqrsf/readPqrsf.php")
    const html = await responseHtml.text()
    contentPqrsf.innerHTML = html
    ///mandamos los datos a guardar
    const idPqrsf = e.target.dataset.keypqrsf
    const data = new FormData()
    data.append("idPqrsf", idPqrsf)
    const response = await fetch("/adminSite/model/selectPqrsf.php", {
        method: "POST",
        body: data
    })
    await response.json()
        .then(data => datos.push(...data))
    //actualizamos los campos con a informacion consultada en la BD
    const title = document.querySelector("#title")
    const radicado = document.querySelector("#radicado")
    const estado = document.querySelector("#estado")
    const tipoProceso = document.querySelector("#tipoProceso")
    const area = document.querySelector("#area")
    const alcance = document.querySelector("#alcance")
    const descripcion = document.querySelector("#descripcion")
    const apellidos = document.querySelector("#apellidos")
    const nombres = document.querySelector("#nombres")
    const tipoDocumento = document.querySelector("#tipoDocumento")
    const numeroDocumento = document.querySelector("#numeroDocumento")
    const telefono = document.querySelector("#telefono")
    const correo = document.querySelector("#correo")
    const sexo = document.querySelector("#sexo")
    const direccion = document.querySelector("#direccion")
    const barrio = document.querySelector("#barrio")
    const departamento = document.querySelector("#departamento")
    const eps = document.querySelector("#eps")
    const dataKeyPqrsf = document.querySelector("#idpqrsf")
    dataKeyPqrsf.dataset.keypqrsf = idPqrsf
    title.innerHTML = `Controlar PQRSF con numero de Radicado ${datos[0].radicado}`
    radicado.innerHTML = datos[0].radicado
    estado.innerHTML = datos[0].estado
    tipoProceso.innerHTML = tipoPro(datos[0].tipoProceso)
    area.innerHTML = datos[0].area
    alcance.innerHTML = datos[0].alcance
    descripcion.innerHTML = datos[0].descripcion
    apellidos.innerHTML = datos[0].apellidos
    nombres.innerHTML = datos[0].nombres
    tipoDocumento.innerHTML = datos[0].tipoDocumento
    numeroDocumento.innerHTML = datos[0].numeroDocumento
    telefono.innerHTML = datos[0].telefono
    correo.innerHTML = datos[0].correo
    switch (datos[0].sexo) {
        case "M":
            tipoSexo = "Masculino"
            break;
        case "F":
            tipoSexo = "Femenino"
            break;

        default:
            break;
    }
    sexo.innerHTML = tipoSexo
    direccion.innerHTML = datos[0].direccion
    barrio.innerHTML = datos[0].barrio
    departamento.innerHTML = datos[0].departamento
    eps.innerHTML = datos[0].eps
    if (datos[0].estado == "Resuelto") {
        estado.classList.remove("noSolve")
        estado.classList.add("solve")
    }

}

function tipoPro(proceso) {
    switch (proceso) {
        case "P":
            proceso = "Peticion"
            break
        case "Q":
            proceso = "Queja"
            break
        case "R":
            proceso = "Reclamo"
            break
        case "S":
            proceso = "Solicitud"
            break
        case "F":
            proceso = "Felicitación"
            break

        default:
            break
    }
    return proceso
}

async function solvePqrsf(e) {
    const idPqrsf = (e.target.dataset.keypqrsf)

    const data = new FormData();
    data.append('idPqrsf', idPqrsf);
    const response = await fetch("/adminSite/model/updatePqrsf.php", {
        method: "POST",
        body: data
    })

    const json = await response.json();
    if (json == "true") {
        msgInfo("PQRSF marcada como resuelta")
        const estado = document.querySelector("#estado")
        estado.classList.add("solve")
        estado.innerHTML = "Resuelto"
    } else {
        msgInfo("No se pudo marcar la PQRSF como marcada, intenta de nuevo y si el problema persiste contacta el administador del sistema")
    }
}

/*----------------------------------------
            EVENTS HANDLERS
-----------------------------------------*/
window.addEventListener('load', () => {
    if (window.location.pathname === "/adminSite/dashboard/noticias/") {
        allNews()
    }
})
window.addEventListener('load', () => {
    if (window.location.pathname === "/adminSite/dashboard/pqrsf/") {
        allPqrsf()
    }
})
!(btnCreateNews == null) ? btnCreateNews.addEventListener("click", createNews) : null
!(btnResetNews == null) ? btnResetNews.addEventListener("click", resetNews) : null
!(btnCerrarMsg == null) ? btnCerrarMsg.addEventListener("click", cerrarMsg) : null
!(btnDeleteNews == null) ? btnDeleteNews.addEventListener("click", deleteNews) : null
!(inputSearch == null) ? inputSearch.addEventListener("input", searchNews) : null
!(inputSearchDate == null) ? inputSearchDate.addEventListener("input", searchNews) : null
!(typePqrsf == null) ? typePqrsf.addEventListener("input", searchPqrsf) : null
!(statePqrsf == null) ? statePqrsf.addEventListener("input", searchPqrsf) : null
!(datePqrsf == null) ? datePqrsf.addEventListener("input", searchPqrsf) : null
