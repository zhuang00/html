$(function(){
    function resizeDiv() {
        var _docHeight =$(window).height();
        // alert(_docHeight);
        $("#left").height(_docHeight-80);

    }
    resizeDiv();
})