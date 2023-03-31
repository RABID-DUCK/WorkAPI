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
            $('[data-bs-dismiss="modal"]').click(); 
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
    var formDdata = new FormData();
    formDdata.append('id', $('#form-editVersion').find('[name="id"]').val());
    formDdata.append('major', $('#form-editVersion').find('[name="major"]').val());
    formDdata.append('minor', $('#form-editVersion').find('[name="minor"]').val());
    formDdata.append('micro', $('#form-editVersion').find('[name="micro"]').val());
    formDdata.append('releaseNote', $('#form-editVersion').find('[name="releaseNote"]').val());
    formDdata.append('platform', $('#form-editVersion').find('[name="platform"]').val());
    formDdata.append('file', $('#sortfile')[0].files[0]);
    $.ajax({
        type: 'post',
        url: '../../dist/application/controller/controller_editVersion.php',
        cache: false,
        contentType: false,
        processData: false,
        data: formDdata,
        success: function(response){
            alert(response);
            $('[data-bs-dismiss="modal"]').click(); 
        },
        error: function(){
            alert("Произошла ошибка!");
        }
    });
}

$('#search').on('click', function(e){
    e.preventDefault();
    id = $('#info-id').val();
    $.ajax({
        url: '../../dist/application/view/search_view.php',
        type: 'GET',
        data: {searchId: id},
        success: function(res){
            $('#search-tbody').html(res);
            $('#list-tbody').addClass('hide');
            $('#search-tbody').removeClass('hide');
        }
    });  
});