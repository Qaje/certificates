function userStore() {
    var formData = new FormData(document.getElementById("user"));
    axios({
        method: 'post',
        url: 'userStore',
        data: formData,
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
        .then(function (response) {
            //handle success
            // var contentdiv = document.getElementById("mycontent");
            // contentdiv.innerHTML = response.data;
            // //carga pdf- csv - excel
            // datatable_load();
            alert('Registrado Correctamente');
        })
        .catch(function (response) {
            //handle error
            console.log(response);
        });

}