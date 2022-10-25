$(document).ready(() => {
    GetUsers('');
    });
    
    function GetUsers(role){
        $.ajax({
            method:'post',
            url:'getregusers.php',
            data:{
                role: role
            },
            success: function(data) {
                $('#t-d').html(data);
            }
        });
    }
    $(document).on('change','#sel-filter', () => {
    
    
        const val = $('#sel-filter').val();
        GetUsers(val);
    }) 

    


$(document).ready(() => {
        GetFreelance('');
        });
        
        function GetFreelance(role){
            $.ajax({
                method:'post',
                url:'getfreelance.php',
                data:{
                    role: role
                },
                success: function(data) {
                    $('#t-d').html(data);
                }
            });
        }
        $(document).on('change','#sel-filter', () => {
        
        
            const val = $('#sel-filter').val();
            GetUsers(val);
        }) 

$(document).ready(function(){

            load_data(1);

            function load_data(page, query = '')
            {
            $.ajax({
                url:"getregusers.php",
                method:"POST",
                data:{page:page, query:query},
                success:function(data)
                {
                $('#dynamic_content').html(data);
                }
            });
            }
 $(document).on('click', '.page-link', function(){
            var page = $(this).data('page_number');
            var query = $('#search_box').val();
            load_data(page, query);
            });

            $('#search_box').keyup(function(){
            var query = $('#search_box').val();
            load_data(1, query);
            });

});

        