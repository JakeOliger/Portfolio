<script src="{{ url('/js/app.js') }}"></script>
<script>
    $("#close-drawer, #gray-cover").on("click", function(e) {
        $("#drawer-container").animate({
            width: '0%'
        }, 200);
        var gc = $("#gray-cover");
        gc.animate({
            opacity: 0
        }, 200, function(e) { gc.css('visibility', 'hidden'); });
    });
    $("#open-drawer").on("click", function(e) {
        $("#drawer-container").animate({
            width: '75%'
        }, 200);
        var gc = $("#gray-cover");
        gc.css('visibility', 'visible');
        gc.animate({
            opacity: 1
        }, 200);
    });
</script>