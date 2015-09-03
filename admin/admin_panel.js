function clear_html(id)
{
    $(id).html("");
}
function ajaxToController(formData) {
    // process the form
    $.ajax({
        type: 'POST', // define the type of HTTP
        url: 'controller.php', // the url where we want to POST
        data: formData, // our data object
        dataType: 'json', // what type of data do we expect back from the server
        encode: true
    })
        // using the done promise callback
        .done(function (data) {

            // log data to the console so we can see
            console.log(data);

            // here we will handle errors and validation messages
        });

}

//Dynamically creates a header and names button ID's
function admin_header(admin_title) {
    $title = admin_title.toLowerCase();

    var header =
        "<div class='container-fluid'>" +
            "<div class='row'>" +
                "<div class='col-lg-12'>" +
                    "<h1>" + admin_title + "</h1>" +
                    "<button type='button' class='btn' id='" + "Add_" + $title + "'>Add New</button>" +
                "</div>" +
            "</div>" +
            "<div class='row'>" +
                "<div class='col-lg-1'></div>" +
                "<div class='col-lg-10' id='list_" + $title + "'></div>" +
                "<div class='col-lg-1'></div>" +
            "</div>" +
        "</div>";
    return header;
}

$(document).ready(function() {

//Dynamic Blog Table
// ---------------- Needs a limit and pagination ----------------------
    $("#Blogs").on("click", function(e) {

        //Clears previous content to populate new HTML
        clear_html("#page-content-wrapper");
        $("#page-content-wrapper").html(admin_header("Blogs"));
        var strTable = "";
        strTable += "<table class='table table-striped'>";
        strTable += "<thead><tr class='success'><th>Image</th><th>Date</th><th>Title</th>" +
            "<th></th><th></th></tr></thead>";
        strTable += "<tbody>";

        $.getJSON("controller.php", {action: "list_blogs"} ,function (data) {
            //build table
            //loop data
            $.each(data, function(key, value) {
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                strTable += "<td>" + value.upload_date + "</td>";
                strTable += "<td>" + value.title + "</td>";
                strTable += "<td>" + "<a href='#' id='edit_" + value.id + "'>EDIT</a></td>";
                strTable += "<td>" + "<a href='#' class ='delete_blog' id='delete_" + value.id + "'>DELETE</a></td>";
            });

            //Gets the value of each unique id to set up a delete function
            $(document).on('click', ".delete_blog", function(e) {
                var id = $(this).attr('id');
               // if(confirm("Are you sure you want to delete this blog?")) {
                        //location.reload();
                $.get("controller.php", {action:"delete", id:id}, function(data) {
                    alert(data);
                });
            });

            strTable += "</tbody></table>";
            $("#list_blogs").html(strTable);
        });
    });
    //To use dynamically created buttons you must use $(static_parent).on("action", "Dynamic Child", function)
    $("#page-content-wrapper").on("click", "#Add_blogs", function(e) {
        e.preventDefault();
        clear_html("#page-content-wrapper");
        var blog_form =
            "<div class='blog_form'>" +
            "<form method='post' id='add_blog_form' action='controller.php'>" +
            "<label>Blog Title" +
            "<input type='text' name='blog_title'></label>" +
            "<br>" +
            "<label>Blog Image" +
            "<input type='file' name='blog_image'></label>" +
            "<br>" +
            "<label>Blog Content" +
            "<textarea cols='25' rows=10' id='blog_content' name='blog_content'></textarea></label>" +
            "<br>" +
            "<button type='submit' id='submit_blog' name='add_blog' value='Add Blog'>Add Blog</button>" +
            "</form>" +
            "</div>";
        $("#page-content-wrapper").html(blog_form);

        $("form").submit(function (e) {
            e.preventDefault();
            var formData = {
                //'action': "add"
                'blog_title': $('input[name=blog_title]').val(),
                'blog_image': $('input[name=blog_image]').val(),
                'blog_content': $('#blog_content').val()
            };
            ajaxToController(formData);
        });

    });





//********************** IMAGES ************************

    $("#Images").on("click", function(e) {
        clear_html("#page-content-wrapper");

        $("#page-content-wrapper").html(admin_header("Images"));
        var strTable = "";
        strTable += "<table class='table table-striped'>";
        strTable += "<thead><tr class='success'><th>Image</th><th>Date</th><th>Title</th><th>Category</th><th>Tags</th>" +
            "<th></th><th></th>" +
            "</tr></thead>";
        strTable += "<tbody>";

        $.getJSON("controller.php", {action: "list_images"} ,function (data) {
            $.each(data, function(key, value)
            {
                strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                strTable += "<td>" + value.upload_date + "</td>";
                strTable += "<td>" + value.title + "</td>";
                strTable += "<td>" + value.category + "</td>";
                strTable += "<td>" + value.tags + "</td>";
                strTable += "<td>" + "<a href='#' id='edit_" + value.id + "'>EDIT</a></td>";
                strTable += "<td>" + "<a href='#' id='delete_" + value.id + "'>DELETE</a></td></tr>";
            });

            strTable += "</tbody></table>";

            $("#list_images").html(strTable);

        });
    });

    $("#page-content-wrapper").on("click", "#Add_images", function(e)
    {
        clear_html("#page-content-wrapper");

        var image_form =
            "<div class='image_form'>" +
                "<form method='post' action=''>" +
                    "<label>Image Title" +
                    "<input type='text' name='image_title'></label>" +
                    "<br>" +
                    "<label>Image Type" +
                    "<input type='text' name='image_type'></label>" +
                    "<br>" +
                    "<label>Image Tags" +
                    "<input type='text' name='image_tags'></label>" +
                    "<br>" +
                    "<label>Choose Image" +
                    "<input type='file' name='image'></label>" +
                    "<br>" +
                    "<input type='submit' name='add_image' value='Add Image'>" +
                "</form>" +
            "</div>";
        $("#page-content-wrapper").html(image_form);
        $("form").submit(function (e) {
            e.preventDefault();
            var formData = {
                //'action': "add"
                'image_title': $('input[name=image_title]').val(),
                'image_type': $('input[name=image_type]').val(),
                'image_tags': $('input[name=image_tags]').val(),
                'image': $('input[name=image]').val()
            };
            ajaxToController(formData);
        });
    });

//*********************** LINKS ***********************************

    $("#Links").on("click", function (e)
    {
        clear_html("#page-content-wrapper");

        $("#page-content-wrapper").html(admin_header("Links"));
        var strTable = "";
        strTable += "<table class='table table-striped'>";
        strTable += "<thead><tr class='success'><th>Image</th><th>Title</th><th>Description</th>" +
            "<th></th><th></th></tr></thead>";
        strTable += "<tbody>";

        $.getJSON("controller.php", {action: "list_links"} ,function (data)
        {
                $.each(data, function(key, value)
                {
                    strTable += "<tr id=' + key + '><td>" + value.image + "</td>";
                    strTable += "<td>" + value.title + "</td>";
                    strTable += "<td>" + value.description + "</td>";
                    strTable += "<td>" + "<a href='#' id='edit_" + value.id + "'>EDIT</a></td>";
                    strTable += "<td>" + "<a href='#' id='delete_" + value.id + "'>DELETE</a></td></tr>";
                });

            strTable += "</tbody></table>";
            $("#list_links").html(strTable);

        });
    });
});

console.log("Displaying the Console");