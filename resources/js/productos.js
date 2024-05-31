

    

$(function(){
    ajaxProducto();
    $("#s").on("submit",function(event){
        event.preventDefault();
        ajaxProducto();
    })
})

function ajaxProducto(){
    $.ajax({
        url:'/productos/search',
        type:'POST',
        
        data:$('#s').serialize()
    }).done(function(res){
        var array=JSON.parse(res);
        console.log(array[0]);
        
    })
}