$(document).ready(function(){
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
})
$("#product").click(function(){
    $.ajax({
        url:"../allproducts.php",
        type:"POST"
    }).done(function(){

        window.location="../allproducts.php";
    })
})
$(document).on('click','.btn',function(){
   let id= this.getAttribute("id");
    
   $(".inputtext"+id).prop("disabled",false);
    $("#" + id).html("Update");
    $("#" + id).attr("class","update");
    
})
$(document).on('click','.update',function(){ 
    let id= this.getAttribute("id");
    $name=$("#name"+id).prop("disabled",false).val();
    $category=$("#category"+id).prop("disabled",false).val();
    $price=$("#price"+id).prop("disabled",false).val();
    $quantity=$("#quantity"+id).prop("disabled",false).val();
    $description=$("#description"+id).prop("disabled",false).val();
$.ajax({
    url:"../update.php",
    type:"POST",
    data:{"id":id,"name":$name,"category":$category,"price":$price,"quantity":$quantity,"description":$description}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#category"+id).prop("disabled",true).val();
    $("#price"+id).prop("disabled",true).val();
    $("#quantity"+id).prop("disabled",true).val();
    $("#description"+id).prop("disabled",true).val();
    $("#" + id).html("EDIT");
    console.log(result);
    
})

})
$(document).on('click','.delete_btn',function(){
    
    let id= this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../delete.php",
        type:"POST",
        data:{"id":id}
    }).done(function(result){
        console.log(result);
    })
 })
$(document).on('click','.btn_user',function(){
    // let id= this.getAttribute("id");
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(6);
    console.log(id);
     $(".inputtext"+id).prop("disabled",false);
     $("#update" + id).html("Update");
    $("#update" + id).attr("class","update_user");
     
     
 })
$(document).on('click','.update_user',function(){ 
    let id= this.getAttribute("id");
    $name=$("#name"+id).prop("disabled",false).val();
    $email=$("#email"+id).prop("disabled",false).val();
    $address=$("#address"+id).prop("disabled",false).val();
    $pincode=$("#pincode"+id).prop("disabled",false).val();
    $status=$("#status"+id).prop("disabled",false).val();
    $role=$("#role"+id).prop("disabled",false).val();

$.ajax({
    url:"../updateuser.php",
    type:"POST",
    data:{"id":id,"name":$name,"email":$email,"address":$address,"pincode":$pincode,
    "status":$status,"role":$role}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#email"+id).prop("disabled",true).val();
    $("#address"+id).prop("disabled",true).val();
    $("#pincode"+id).prop("disabled",true).val();
    $("#status"+id).prop("disabled",true).val();
    $("#role"+id).prop("disabled",true).val();
    console.log(result);
    $("#" + id).html("EDIT");
  //  console.log(result);
    
})
})
$(document).on('click','.delete_btn_user',function(){
    // let id= this.getAttribute("id");
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(6);
    console.log(id);
    console.log(id);
    $.ajax({
        url:"../deleteuser.php",
        type:"POST",
        data:{"id":id}

    }).done(function(result){
        console.log(result);

    })
 })
$(document).on('click','.change_status',function(){
    let status=$("#user_status").val();
    let role=$("#user_role").val();
    let id=this.getAttribute("id");
    $.ajax({
        url:"changestatus.php",
        type:"POST",
        data:{"id":id,"role":role,"status":status}
    }).done(function(result){
        console.log(result);
    })
})
$(document).on('click','.btn_order',function(){
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(4);
    console.log(id);
    $(".input"+id).prop("disabled",false);
      $("#edit" + id).html("Update");
     $("#edit" + id).attr("class","update_user");
     
     
 })
$(document).on('click','.update_order',function(){ 
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(4);
    console.log(id);
    $name=$("#name"+id).prop("disabled",false).val();
    $address=$("#shipping_address"+id).prop("disabled",false).val();
    $order=$("#order_status"+id).prop("disabled",false).val();
    $total=$("#total"+id).prop("disabled",false).val();
    

$.ajax({
    url:"../updateorder.php",
    type:"POST",
    data:{"id":id,"name":$name,"address":$address,"order":$order,"total":$total}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#shipping_address"+id).prop("disabled",true).val();
    $("#order_status"+id).prop("disabled",true).val();
    $("#total"+id).prop("disabled",true).val();
    console.log(result);
    $("#" + id).html("EDIT");
    console.log(result);
    
})
})
$(document).on('click','.delete_btn_order',function(){
    let id= this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../deleteorder.php",
        type:"POST",
        data:{"id":id}

    }).done(function(result){
        console.log(result);

    })
 })
 $(document).on("click", "#addProducts", function () {
    let name = $("#name").val();
    let price = $("#price").val();
    let qty = $("#qty").val();
    let desc = $("#desc").val();
    let catageory = $("#catageory").val();
    let img = $("#img").val();
    img = img.split("\\");
    //  let file = $('#img').prop("files")[0];
    // console.log(file);
    $.ajax({
        url: 'addproducts.php',
        data: { 'name': name, 'price': price, 'qty': qty, 'desc': desc, 'catageory': catageory, 'img': img[2] },
        type: 'post',
        datatype: 'json'
    }).done(function (value) {
        console.log(value);
    })
})
$(".move").click(function () {
    let id = this.id;
    id = id.split("_");
    console.log(id);
    $.ajax({
        url: 'moveproduct.php',
        data: { 'id': id[1], 'action': id[0] },
        type: 'post',
        datatype: 'text'
    }).done(function () {
        // location.reload();
    })
})
$(".buy").click(function () {
    id = this.id;
    id = id.split("_");
    $.ajax({
        url: 'productdescriptiondata.php',
        type: 'POST',
        data: { 'id': id[2], 'action': id[1], 'event': id[0] },
        datatype: 'text'
    }).done(function (value) {
        console.log(value);
        window.location = 'productdescription.php';
    })
})
$(document).on("click", "#checkOut", function () {
    let id = $("#pid").val();
    let qty = $("#inputQuantity").val();
    $.ajax({
        url: 'checkout.php',
        data: { 'id': id, "qty": qty },
        type: 'post',
        datatype: 'text'

    }).done(function (value) {
        if(value){
        alert(value);
        window.location = 'index.php';}else{
            
            alert("Quantity is not availbale")
        }
    })
})
$(".delete").click(function(value){
    id = this.id;
    id = id.split("_");
    $.ajax({
        url: 'deletewish.php',
        type: 'POST',
        data: { 'id': id[1],  'event': id[0] },
        datatype: 'text'
    }).done(function (value) {
        if(id[0]=='cart'){
            window.location="cartview.php";
        }else{
            window.location="wishlist.php";
        }
    })
})