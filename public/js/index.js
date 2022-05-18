var obj = [];
$(document).ready(function(){
    $('#search_').click(function() {
        checkInputs();
    })

    $('#filter_select').on('change', function() {
        var filterKey = $(this).val();
        organizeCards()
        filter(filterKey)
        reMount()
    });

    function checkInputs()
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

    function organizeCards() 
    {
        obj = [];
        $('#body_results div.div_parent_data').each((index, div)=>{

            var item = $(div).data('infolistfilter');
            item.html = div;
            obj.push(item);

        })
    }

    function filter(key) {
        obj = obj.sort(function (a, b) {
            if (a[key] === null) {return 1;}
            if (b[key] === null) {return -1;}
            if (a[key].toLowerCase() > b[key].toLowerCase()) {return 1;}
            if (a[key].toLowerCase() < b[key].toLowerCase()) {return -1;}
            return 0;
        });
    }



    function reMount()
    {
        $('#body_results').empty();
        $(obj).each(function(index,value){
            $('#body_results').append(value.html);
        })
    }

});