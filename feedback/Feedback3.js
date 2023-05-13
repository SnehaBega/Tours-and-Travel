$(document).ready(function() {

    // initialize variables
    var rating = 0;
    var feedback = "";

    // update rating variable when user clicks on a star
    $(".star").click(function() {
        rating = $(this).attr("data-rating");
        $(".star").removeClass("filled");
        $(this).prevAll().addBack().addClass("filled");
    });

    // update feedback variable when user types in the text area
    $("#feedback").on("input", function() {
        feedback = $(this).val();
    });

    // submit button click handler
    $("#submit-btn").click(function() {
        // send rating and feedback to the server
        $.post("/submit-feedback", { rating: rating, feedback: feedback })
            .done(function() {
                // show success message
                $("#success-msg").fadeIn();
                // reset variables and form
                rating = 0;
                feedback = "";
                $(".star").removeClass("filled");
                $("#feedback").val("");
            })
            .fail(function() {
                // show error message
                $("#error-msg").fadeIn();
            });
    });

});