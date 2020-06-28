$(document).ready(function() {

  /**
   * call the data.php file to fetch the result from db table.
   */
  $.ajax({
    url : "http://localhost/retail_enterprise/custCitydata.php",
    type : "GET",
    success : function(data){
      console.log(data);
      console.log("success");

      var dataP = {
        Id : [],
        City : [],
        countOfCustomers: [], 
      };

      var len = data.length;

      for (var i = 0; i < len; i++) {
          dataP.Id.push((i+1));
          dataP.City.push(data[i].address);
          dataP.countOfCustomers.push(data[i].custCount);
  
      }

      //get canvas
      var ctx = $("#line-cityCust");

      var data = {
        labels : dataP.City,
        datasets : [
          {
            label : "City",
            data : dataP.countOfCustomers,
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
      console.log("error fucking.");
      console.log(data);
    }

  }
  );
});

