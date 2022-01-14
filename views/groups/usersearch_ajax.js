//Getting value from "ajax.php".
function fill(Value) {
    //Assigning value to "search" div in "groups.php" file.
    $('#search-box').val(Value);
    //Hiding "result" div in "groups.php" file.
    $('#result').hide();
 }
 $(document).ready(function() {
    //On pressing a key on "Search box" in "groups.php" file. This function will be called.
    $("#search-box").keyup(function() {
        //Assigning search box value to javascript variable named as "name".
        var name = $('#search-box').val();
        //Validating, if "name" is empty.
        if (name == "") {
            //Assigning empty value to "result" div in "groups.php" file.
            $("#result").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "usersearch_ajax_php.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    search: name
                },
                //If result found, this funtion will be called.
                success: function(html) {
                    //Assigning result to "result" div in "search.php" file.
                    $("#result").html(html).show();
                }
            });
        }
    });
 });