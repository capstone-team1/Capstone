function clear_html(id){
    $(id).html("");
}

function admin_header(admin_title) {
    var header =
        "<div class='container-fluid'>" +
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<h1>" + admin_title + "</h1>" +
                    "<button type='button' class='btn' id='" + admin_title + "'>Add New</button>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-1'></div>" +
                "<div class='col-lg-10' id='list_" + admin_title + "'></div>" +
                "<div class='col-lg-1'></div>" +
            "</div>" +
        "</div>";
    return header;
}

$(document).ready(function(){

        $("#Blogs").click( function (e){
            clear_html("#page-content-wrapper");
            $("#page-content-wrapper").html(admin_header("Blogs"));
            strTable = "";
            strTable += "<table class='table table-hover'>";
            strTable += "<thead><tr><th>Image</th><th>Date</th><th>Title</th><th>Edit</th><th>Delete</th></tr></thead>";
            strTable += "<tbody>";

            $("#list_blogs").html(strTable);

            $.getJSON("admin_controller.php", {action: "list_Blogs"} ,function (data) {
                //build table
                //loop data
                $.each(data, function(key, value){
                    strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                    strTable += "<td>" + value.upload_date + "</td>";
                    strTable += "<td>" + value.title + "</td>";
                    strTable += "<td>" + "<a href='#' id='edit_" + value.blog_id + "'>EDIT</a></td>";
                    strTable += "<td>" + "<a href='#' id='delete_" + value.blog_id + "'>DELETE</a></td>";
                    });

                strTable += "</tbody></table>";

                $("#list_Blogs").html(strTable);
            });
        });

    $("#Images").click( function (e){
        clear_html("#page-content-wrapper");
        $("#page-content-wrapper").html(admin_header("Images"));
        strTable = "";
        strTable += "<table class='table table-hover'>";
        strTable += "<thead><tr><th>Image</th><th>Date</th><th>Title</th><th>Type</th><th>Tags</th>" +
            "<th>Edit</th><th>Delete</th></tr></thead>";
        strTable += "<tbody>";

        $("#list_images").html(strTable);

        $.getJSON("admin_controller.php", {action: "list_Images"} ,function (data) {
            $.each(data, function(key, value){
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                strTable += "<td>" + value.image_upload_date + "</td>";
                strTable += "<td>" + value.image_title + "</td>";
                strTable += "<td>" + value.image_type + "</td>";
                strTable += "<td>" + value.image_tags + "</td>";
                strTable += "<td>" + "<a href='#' id='edit_" + value.image_id + "'>EDIT</a></td>";
                strTable += "<td>" + "<a href='#' id='delete_" + value.image_id + "'>DELETE</a></td>";
            });

            strTable += "</tbody></table>";

            $("#list_Images").html(strTable);

        });
    });
});

console.log("Displaying the Console");