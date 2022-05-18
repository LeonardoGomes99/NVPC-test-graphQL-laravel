$(document).ready(function(){
    
    $('#search_').click(function() {
        check_inputs();
        search();
    })

    function check_inputs()
    {
        if(!$('#search_username').val())
        {
            alert('Por Favor Preencha o campo de Usuário');
            throw new Error('Por Favor Preencha o campo de Usuário');
        }
    }

    function search()
    {
        $.ajax({
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/search/user/"+$('#search_username').val(),
            success: function(res) {
                console.log('')
            },
            error: function(data) { 
                console.log('eee');
            }   
        });
    }
});