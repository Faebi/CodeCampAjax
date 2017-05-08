window.onload = initPage;
function initPage() {

$("#level-0 > button").click(function(){
    $.get("***URL****", function(data, status){
        // some action
    });
});
}
