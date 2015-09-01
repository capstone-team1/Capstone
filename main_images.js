//This file is to load thumbnail images to new page, main_images_view.php, based on whether user clicks All, Tattoos, or Drawings from main page

$(document).ready(function(){

    $("#Images").click( function (e) {

        strTable = "";
        strTable += "<table class='table-bordered'>";
        strTable += "<thead><tr><th colspan='3'>Images</th></tr></thead>";
        strTable += "<tbody>";

        $.getJSON("main_images_controller.php", {action: "show_images_All"}, function (data) {
            //build table and load images
            $.each(data, function (key, value) {
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                strTable += "<td>" + "HELP" + "</td>";
            });

            strTable += "</tr></tbody></table>";

            $("#thumbnails").html(strTable);
        });
    });

//**MAKE THIS WORK FIRST THEN COPY AND PASTE FOR DRAWINGS AND TATTOOS SEPARTELY**

});
