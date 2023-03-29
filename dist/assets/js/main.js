$('#newUser').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: '../../dist/application/view/addVersion_view.php',
        method: 'GET',
        success: function(data){
            $('#load-modal').html(data);
        }
    });
    
});

function addVersion(){
    var modalForm_data = $('#form-addVersion').serialize();
    let form_data = new FormData();
    form_data.append('file', $('#sortfile')[0].files[0]);
    form_data.append('modal', modalForm_data);
    console.log(form_data);
    $.ajax({
        type: 'post',
        url: '../../dist/application/controller/controller_addVersion.php',
        cache: false,
        processData: false,
        data: form_data,
        success: function(response){
            alert(response);
        },
        error: function(){
            alert("Произошла ошибка!");
        }
    });
}

$(document).on('click', '#download_file', function(e){
    let elem = $(e.currentTarget);
    let id = $(elem.parents()[2]).find(".id-version").text();
    $.ajax({
        type: 'get',
        url: '../../dist/application/controller/controller_downloadVersion.php',
        data: {name: id},
        success: function(){
        }
    });
})

$(document).on('click', '#edit_version', function(e){
    let elem = $(e.currentTarget);
    let id = $(elem.parents()[2]).find('.id-version').text();
    $.ajax({
        type: 'get',
        url: '../../dist/application/view/editVersion_view.php',
        data: {id: id},
        success: function(res){
            $('#load-modal').html(res);
        }
    });
});

function editVersion(){
    var modalForm_data = $('#form-editVersion').serialize();
    $.ajax({
        type: 'post',
        url: '../../dist/application/controller/controller_editVersion.php',
        dataType: 'text',
        data: modalForm_data,
        success: function(response){
            alert(response);
        },
        error: function(){
            alert("Произошла ошибка!");
        }
    });
}

// $('#search').on('click', function(e){
//     let value = $('[data-search]').val();
//     $.ajax({
//         url: '../../dist/application/view/search_view.php',
//         type: "get",
//         data: {search: value},
//         success: function(res){
//             document.location.href = '../../dist/application/view/search_view.php?id='+value;
//         }
//     });
// });