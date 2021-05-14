/* ****************************
* AJAX запрос на аутентификацию
*******************************/
$('#tokenForm__btn').on('click', function (){
   site = $('#tokenForm__inp_url').val();
   db_host = $('#tokenForm__inp__db_host').val();
   db_port = $('#tokenForm__inp__db_port').val();
   db_name = $('#tokenForm__inp__db_name').val();
   db_username = $('#tokenForm__inp__db_username').val();
   db_password = $('#tokenForm__inp__db_password').val();
   console.log(site);
    $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/setToken",
        data: {
            site:site,
            db_host:db_host,
            db_port:db_port,
            db_name:db_name,
            db_username:db_username,
            db_password:db_password
        },
        success: function (data) {
            alert(data['message'])
            console.log(data);
        }
    });
})



// var servResponse = document.querySelector('#response');
//
// document.forms.tokenForm.onsubmit = function (e) {
//     e.preventDefault();
//
//     var url = document.forms.tokenForm.tokenForm__inp_url;
//     var db_host = document.forms.tokenForm.tokenForm__inp__db_host;
//     var db_port = document.forms.tokenForm.tokenForm__inp__db_port;
//     var db_name = document.forms.tokenForm.tokenForm__inp__db_name;
//     var db_username = document.forms.tokenForm.tokenForm__inp__db_username;
//     var db_password = document.forms.tokenForm.tokenForm__inp__db_password;
//
//     var xhr = new XMLHttpRequest();
//
//     xhr.open('POST', '/setToken');
//
//     xhr.onreadystatechange = function(){
//         if(xhr.readyState === 4 && xhr.status === 200){
//             servResponse.textContent = xhr.responseText;
//         }
//     }
//
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
// }

//     <input type="text" name="url" id="tokenForm__inp_url">
//     <p>Введите db_host</p>
// <input type="text" name="db_host" id="tokenForm__inp__db_host">
//     <p>Введите db_port</p>
// <input type="text" name="db_port" id="tokenForm__inp__db_port">
//     <p>Введите db_name</p>
// <input type="text" name="db_name" id="tokenForm__inp__db_name">
//     <p>Введите db_username</p>
// <input type="text" name="db_username" id="tokenForm__inp__db_username">
//     <p>Введите db_password</p>
// <input type="password" name="db_password" id="tokenForm__inp__db_password">
