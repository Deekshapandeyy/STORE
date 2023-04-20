$(document).ready(function(){

})

function addcart(id){
    // console.log(id);
    let id = this.id;
    id = id.split("_");
    console.log(id);
    $.ajax({
        url:"../cart.php",
        data: { 'id': id[1], 'action': id[0] },
        datatype: 'text',
        success:function(result){
            console.log(result);
            // header.location.href="../view/cartview.php";
        }
    })
}
$(document).on('click','remove',function(){
    console.log(id);
})
function wishlist(id){
    console.log(id);
    $.ajax({
        url:"../wishlist.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
        }
    })
}
function removeitem(id){
    console.log(id);
    $.ajax({
        url:"../remove.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
        }
    })
   

}