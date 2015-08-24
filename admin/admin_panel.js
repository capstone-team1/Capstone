function clear_html(id)
{
    $(id).html("");
}

//Dynamically creates a header and names button ID's
function admin_header(admin_title)
{
    var header =
        "<div class='container-fluid'>" +
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<h1>" + admin_title + "</h1>" +
                    "<button type='button' class='btn' id='" + "Add_" + admin_title + "'>Add New</button>" +
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

$(document).ready(function()
{
        //Dynamic Blog Table
// ---------------- Needs a limit and pagination ----------------------
        $("#Blogs").on("click", function(e)
        {
            //Clears previous content to populate new HTML
            clear_html("#page-content-wrapper");
            $("#page-content-wrapper").html(admin_header("Blogs"));
            strTable = "";
            strTable += "<table class='table table-hover'>";
            strTable += "<thead><tr><th>Image</th><th>Date</th><th>Title</th><th>Edit</th><th>Delete</th></tr></thead>";
            strTable += "<tbody>";

            $("#list_blogs").html(strTable);

            $.getJSON("admin_controller.php", {action: "list_blogs"} ,function (data)
            {
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

        //To use dynamically created buttons you must use $(static_parent).on("action", "Dynamic Child", function)
        $("#page-content-wrapper").on("click", "#Add_Blogs", function(e)
        {
            clear_html("#page-content-wrapper");
            var blog_form =
                "<div class='add_blog'>" +
                    "<form method='post' action='controller.php'>" +
                    " <label>Blog Title" +
                        "<input type='text' name='blog_title'></label>" +
                        "<br>" +
                        "<label>Blog Image" +
                        " <input type='file' name='blog_image'></label>" +
                        "<br>" +
                        "<label>Blog Content" +
                        "<textarea cols='25' rows=10' name='blog_content'></textarea></label>" +
                        "<br>" +
                        "<input type='submit' name='add_blog' value='Add Blog'>" +
                " </form>" +
            "</div>";
            $("#page-content-wrapper").html(blog_form);
        });

//********************** IMAGES ************************
    $("#Images").on("click", function (e)
    {
        clear_html("#page-content-wrapper");
        $("#page-content-wrapper").html(admin_header("Images"));
        strTable = "";
        strTable += "<table class='table table-hover'>";
        strTable += "<thead><tr><th>Image</th><th>Date</th><th>Title</th><th>Type</th><th>Tags</th>" +
            "<th>Edit</th><th>Delete</th></tr></thead>";
        strTable += "<tbody>";

        $("#list_images").html(strTable);

        $.getJSON("admin_controller.php", {action: "list_images"} ,function (data)
        {
            $.each(data, function(key, value)
            {
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

    $("#page-content-wrapper").on("click", "#Add_Images", function(e)
    {
        clear_html("#page-content-wrapper");
        var image_form =
            "<div class='add_image'>" +
                "<form method='post' action='controller.php'>" +
                    "<label>Image Title" +
                    "<input type='text' name='image_title'></label>" +
                    " <br>" +
                    " <label>Image Type" +
                    " <input type='text' name='image_type'></label>" +
                    " <br>" +
                    " <label>Image Tags" +
                    " <input type='text' name='image_tags'></label>" +
                    "<br>" +
                    "<label>Choose Image" +
                    "<input type='file' name='image'></label>" +
                    "<br>" +
                    "<input type='submit' name='add_image' value='Add Image'>" +
                "</form>" +
            "</div>";
        $("#page-content-wrapper").html(image_form);
    });
});

console.log("Displaying the Console");