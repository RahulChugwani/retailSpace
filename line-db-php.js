$(document).ready(function() {

  /**
   * call the data.php file to fetch the result from db table.
   */
  $.ajax({
    url : "http://localhost/retail_enterprise/sales_data.php",
    type : "GET",
    success : function(data){
      console.log(data);
      console.log("success");

      var score = {
        Sales : [],
        Customer: [],
      };

      var len = data.length;

      for (var i = 0; i < len; i++) {
    
          score.Sales.push(data[i].transaction_amount);
          score.Customer.push(data[i].customer_id);
  
      }

      //get canvas
      var ctx = $("#line-chartcanvas");

      var data = {
        labels : score.Customer,
        datasets : [
          {
            label : "Sales",
            data : score.Sales,
            backgroundColor : "blue",
            borderColor : "lightblue",
            fill : false,
            lineTension : 0,
            pointRadius : 5
          },
          
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Line Graph",
          fontSize : 18,
          fontColor : "#111"
        },
        legend : {
          display : true,
          position : "bottom"
        }
      };

      var chart = new Chart( ctx, {
        type : "line",
        data : data,
        options : options
      } );

    },
    error : function(data) {
      console.log("error");
      console.log(data);
    }

  });
  
});

