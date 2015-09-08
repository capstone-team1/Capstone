//This is to load thumbnail images to new page, main_images_view.php, based on whether user clicks All, Tattoos, or Drawings from main page

$(document).ready(function(){

    $("#btnThumb").onclick( function (e) {

        //clear_html("#page-content-wrapper");
        //$("#page-content-wrapper").html(admin_header("Blogs"));

        strTable = "";
        strTable += "<table class='thumbs-hover'>";
        strTable += "<thead><tr><th colspan='3'>Images</th></tr></thead>";
        strTable += "<tbody>";

        $("#thumbnails").html(strTable);

        $.getJSON("main_images_view.php", {action: "show_images_all"}, function (data) {
            //build table
            //load image thumbnail
            $.each(data, function (key, value) {
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
            });

            strTable += "</tbody></table>";

            $("#show_images_all").html(strTable);
        });
    });

//**MAKE THIS WORK FIRST THEN COPY AND PASTE FOR DRAWINGS AND TATTOOS SEPARTELY**

});
