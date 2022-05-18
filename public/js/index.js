$(document).ready(function(){
    $('#search_').click(function() {
        check_inputs();
    })

    function check_inputs()
    {
        if(!$('#search_username').val()){alert('Por Favor Preencha o campo de Usuário');throw new Error('Por Favor Preencha o campo de Usuário');}

        if($('#user').is(':checked')) { search("/search/user/"+$('#search_username').val()); }
        if($('#sgl_rep').is(':checked')) { search("/search/repos/"+$('#search_username').val()+"/"+$('#search_project')); }
        if($('#all_rep').is(':checked')) { search("/search/repos/all/"+$('#search_username').val()); }
    }

    function search(url)
    {
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            success: function(res) {
                $('#body_results').empty();
                $('#body_results').html(res);
            },
            error: function(data) { 
                Swal.fire(data.responseJSON.message);
            },  
            async:false,
        });
    }
});