$(document).ready(function(){

    let orderTotalAmount = $("#orderTotalAmount").children("span");
    let i = 0;
    $(".orderTheItem").click(function(){
        i++;
        let name = $(this).parent().parent().find("#name").text();
        let price = $(this).parent().parent().find("#price").text();
        let pid = $(this).parent().parent().find("#pid").text();
        
        orderTotalAmount.html(parseFloat(orderTotalAmount.text()) + parseFloat(price));

        
     $("#orderItemContainer").append(`
     <div id="orderItem${i}" class="row product-row" style="margin: auto;">
                
     <div class="col-sm-2">${name}</div>
     <div class="col-sm-1">
         <span class="badge badge-light itemQuantity">1</span>
     </div>
     <div class="col-sm-2">
         <button type="button" class="incItemQuantity btn btn-success">+</button>
     </div>
     <div class="col-sm-2">
         <button type="button" class="decItemQuantity btn btn-info">-</button>
     </div>
     <div class="col-sm-2 itemTotalAmount" >${price} </div>
     <div class="col-sm-2">
         <button type="button" class="removeItem btn btn-danger">X</button>
     </div>
     <input type="hidden" name="productId" value=${pid}/>

 </div>
    ` );

    $(`#orderItem${i}`).find(".incItemQuantity").click( function () {
        let itemTotalAmount = $(this).parent().parent().find(".itemTotalAmount");
        let itemQuantity = $(this).parent().parent().find(".itemQuantity");

        if(parseFloat(itemQuantity.text()) !== 5){
            itemQuantity.html(parseFloat(itemQuantity.text()) + 1);
            itemTotalAmount.html(parseFloat(itemTotalAmount.text()) + parseFloat(price));
            itemTotalAmount.append(" EGP");
            orderTotalAmount.html(parseFloat(orderTotalAmount.text()) + parseFloat(price));

        }
        
   });

   $(`#orderItem${i}`).find(".decItemQuantity").click( function () {
    let itemTotalAmount = $(this).parent().parent().find(".itemTotalAmount");
    let itemQuantity = $(this).parent().parent().find(".itemQuantity");

    if(parseFloat(itemQuantity.text()) !== 1){
        itemQuantity.html(parseFloat(itemQuantity.text()) - 1);
        itemTotalAmount.html(parseFloat(itemTotalAmount.text()) - parseFloat(price));
        itemTotalAmount.append(" EGP");
        orderTotalAmount.html(parseFloat(orderTotalAmount.text()) - parseFloat(price));

    }  
});

    // When Remove ordered Item
    $(`#orderItem${i}`).find(".removeItem").click( function () {
        let itemTotalAmount = $(this).parent().parent().find(".itemTotalAmount");
        
        orderTotalAmount.html(parseFloat(orderTotalAmount.text()) - parseFloat(itemTotalAmount.text()));
        console.log(parseFloat(orderTotalAmount.text()));
        $(this).parent().parent().remove();

    });

});
  });
