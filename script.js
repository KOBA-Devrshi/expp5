$(document).ready(function(){

    $("#search").keyup(function(){

        var searchText = $(this).val();

        if(searchText != "")
        {
            $.ajax({
                url: "search.php",
                method: "POST",
                data: {query: searchText},

                success: function(response)
                {
                    $("#result").html(response);
                }
            });
        }
        else
        {
            $("#result").html("");
        }

    });

});
