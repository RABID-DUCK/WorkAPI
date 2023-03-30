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
    var formDdata = new FormData();
    formDdata.append('major', $('#form-addVersion').find('[name="major"]').val());
    formDdata.append('minor', $('#form-addVersion').find('[name="minor"]').val());
    formDdata.append('micro', $('#form-addVersion').find('[name="micro"]').val());
    formDdata.append('releaseNote', $('#form-addVersion').find('[name="releaseNote"]').val());
    formDdata.append('platform', $('#form-addVersion').find('[name="platform"]').val());
    formDdata.append('file', $('#sortfile')[0].files[0]);
    $.ajax({
        type: 'post',
        url: '../../dist/application/controller/controller_addVersion.php',
        cache: false,
        contentType: false,
        processData: false,
        data: formDdata,
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