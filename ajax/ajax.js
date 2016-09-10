function choose_size(my_size){

        $.ajax({
          type: 'json',
          url: 'ajax.php%'+my_size+'',
          success: function(jsondata){
            $('.product-name').html(jsondata.name);
            $('.product-price').html(jsondata.price);
            $('.product-last_prise').html(jsondata.last_price);
            $('.product-stars').html(jsondata.last_price);
          }
        });

    });
