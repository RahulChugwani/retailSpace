$(document).ready(function() {

  /**
   * call the data.php file to fetch the result from db table.
   */
  $.ajax({
    url : "http://localhost/retail_enterprise/salesMonthData.php",
    type : "GET",
    success : function(data){
      console.log(data);
      console.log("success");

      var score = {
        month : [],
        ordersMade: [],
        salesMade: []
      };

      var len = data.length;

      for (var i = 0; i < len; i++) {
    
          score.month.push(data[i].month);
          score.ordersMade.push(data[i].orders_made);
          score.salesMade.push(data[i].sales);
  
      }

      //get canvas
      var ctx = $("#line-salesMonth");

      var data = {
        labels : score.month,
        datasets : [
          {
            label : "OrdersMade",
            data : score.ordersMade,
            backgroundColor : "blue",
            borderColor : "lightblue",
            fill : false,
            lineTension : 0,
            pointRadius : 5
          },
          {
            label : "Sales",
            data : score.salesMade,
            backgroundColor : "green",
            borderColor : "lightgreen",
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

