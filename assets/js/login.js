/*-----------------------------------
LOGIN
------------------------------------*/
const btnLogin = document.querySelector("#btnLogin")
btnLogin.addEventListener("click", login);
function login() {
    const user = document.querySelector("#usuario")
    const pass = document.querySelector("#pass")
    const url = '../model/login.php'
    const metodo = 'POST'
    const header = {'Content-Type': 'application/json'}
    const datos = {
        user: user.value,
        pass: pass.value
    }

    fetch(url, {
        method: metodo,
        headers: header,
        body: JSON.stringify(datos)
    })
        .then(response => response.json())
        .then(data => {
            if (data == 'true') {
                window.location.href = '/adminSite/dashboard.php'
            } else {
                user.classList.add('loginError')
                pass.classList.add('loginError')
            }
        })
     /*.catch(error => {
        console.error('Error al enviar la solicitud:', error);
    }); */

}