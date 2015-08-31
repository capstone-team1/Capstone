/*
//This file is to load thumbnail images to new page, main_images_view.php, based on whether user clicks All, Tattoos, or Drawings from main page
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
*/

$(document).ready(function(){

    $("#Images").click( function (e) {

        //clear_html("#thumbnails");
        //$("#page-content-wrapper").html(admin_header("Images"));

        strTable = "";
        strTable += "<table class='table-bordered'>";
        strTable += "<thead><tr><th colspan='3'>Images</th></tr></thead>";
        strTable += "<tbody>";

        //$("#thumbnails").html(strTable);

        $.getJSON("main_images_controller.php", {action: "show_images_all"}, function (data) {
            //build table and load images
            $.each(data, function (key, value) {
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                strTable += "<td>" + value.image_upload_date + "</td>";
            });

            strTable += "</tbody></table>";

            $("#thumbnails").html(strTable);
        });
    });

//**MAKE THIS WORK FIRST THEN COPY AND PASTE FOR DRAWINGS AND TATTOOS SEPARTELY**

});
