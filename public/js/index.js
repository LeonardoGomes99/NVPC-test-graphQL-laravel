var obj = [];
var objSearchBar = [];
$(document).ready(function(){
    $('#search_').click(function() {
        checkInputs();
    })

    $('#filter_select').on('change', function() {
        if( $('#search_bar_input').val() === ''){
            var filterKey = $(this).val();
            filter(filterKey);
            reMount(obj);
        }else{
            var filterKey = $(this).val();
            var filterKeySearch = $('#search_bar_input').val();
            filter(filterKey);
            filterSearchBar(filterKeySearch);
            reMount(objSearchBar);
        }

    });

    $('#search_bar_input').keyup(function(event){
        var filterKey = $(this).val();

        if(filterKey == '')
        {
            reMount(obj);
        }
        else{
            filterSearchBar(filterKey);
            reMount(objSearchBar);
        }
    });

    function checkInputs()
    {
        if(!$('#search_username').val()){Swal.fire('Por Favor Preencha o campo de Usuário');throw new Error('Por Favor Preencha o campo de Usuário');}
        if($('#user').is(':checked')) { search("/search/user/"+$('#search_username').val()); $("#filter-container :input").attr("disabled", true); return true }
        if($('#all_rep').is(':checked')) { search("/search/repos/all/"+$('#search_username').val()); $("#filter-container :input").attr("disabled", false); return true }
        if($('#sgl_rep').is(':checked') && $('#search_project').val().length > 0) { search("/search/repos/"+$('#search_username').val()+"/"+$('#search_project').val()); $("#filter-container :input").attr("disabled", true); }else{Swal.fire('Preencha o campo com o nome do projeto')}
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
                organizeCards();
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

    function filter(key)
    {
        obj = obj.sort(function (a, b) {
            if (a[key] === null) {return 1;}
            if (b[key] === null) {return -1;}
            if (a[key].toLowerCase() > b[key].toLowerCase()) {return 1;}
            if (a[key].toLowerCase() < b[key].toLowerCase()) {return -1;}
            return 0;
        });
        if (key === 'C') {
            obj = obj.reverse();
        }
    }

    function filterSearchBar(keyword)
    {
        objSearchBar = obj.filter(y => y.N.indexOf(keyword) > -1);
    }

    function reMount(objToMount)
    {
        $('#body_results').empty();
        $(objToMount).each(function(index, value){
            $('#body_results').append(value.html);
        })
    }

});