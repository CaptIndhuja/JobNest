$(document).ready(function(){

    loadData();

    $("#addBtn").click(function(){

        let company = $("#company").val();

        let role = $("#role").val();

        let status = $("#status").val();

        $.ajax({

            url: "add.php",

            type: "POST",

            data: {
                company: company,
                role: role,
                status: status
            },

            success: function(response){

                $("#company").val('');
                $("#role").val('');

                loadData();

            }

        });

    });

    $(document).on("click", ".deleteBtn", function(){

    let id = $(this).data("id");

    $.ajax({

        url: "delete.php",

        type: "POST",

        data: {
            id: id
        },

        success: function(response){

            loadData();

            }

        });

    });

    $(document).on("change", ".updateStatus", function(){

    let id = $(this).data("id");

    let status = $(this).val();

    $.ajax({

        url: "update.php",

        type: "POST",

        data: {
            id: id,
            status: status
        },

        success: function(response){

            loadData();

        }

        });

    });

    function loadData(){

        $.ajax({

            url: "fetch.php",

            type: "GET",

            success: function(data){

                $("#jobData").html(data);

            }

        });

    }10

});