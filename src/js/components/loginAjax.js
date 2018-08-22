const loginAjax = ()=>{
    const d = document,
        w = window,
        c = console.log,
        formLogin = d.querySelector("#login_form"),
        messageLogin = d.querySelector("#message_login")
    formLogin.addEventListener("submit", e =>{
        e.preventDefault()
        let result = ''
        let user_login = d.querySelector("#user_login").value
        let pass_login = d.querySelector("#pass_login").value
        let session = d.querySelector("#session").checked ? true : false
           let form = `user_login={user_login}&pass_login={pass_login}&session={session}`
            const connect = new XMLHttpRequest()
            connect.onreadystatechange = function () {
                if (connect.readyState == 4 && connect.status == 200){
                    if (parseInt(connect.responseText == 1)) {
                        result = 'Conectado'
                        messageLogin.innerHTML = result
                        location.href = "?controller=page"
                    } else{
                        messageLogin.innerHTML = connect.responseText
                    }
                    c(connect.responseText)
                } else if (connect.readyState != 4){
                    result = 'procesando'
                    messageLogin.innerHTML = result
                }
            }
            connect.open(formLogin.method, formLogin.action, true )
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
            connect.send(form)


    })

}
export default loginAjax