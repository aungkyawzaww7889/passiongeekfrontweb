
// Start Right Navbar 
const getsitesettings = document.getElementById('sitesettings');

getsitesettings.addEventListener('click',function(){
    document.body.classList.toggle('show-nav');
});


// End Right Navbar 


// Start Navbar

        // start top navbar 
        function dropbtn(e){
            // console.log(e.target);
            // console.log(e.target.parentElement.nextElementSibling);

            e.target.parentElement.nextElementSibling.classList.toggle("shows");
        }
        // end top navbar 



    // End Navbar

    $(document).ready(function(){
        // console.log("i am working");

        $('.sidebarlinks').click(function(){
            $('.sidebarlinks').removeClass('currents');
            $(this).addClass('currents');
        });

    });


// Start Gauge Area 
var gaugeusers = new JustGage({
    id: "gaugeusers", // the id of the html element
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});


var gaugecusts = new JustGage({
    id: "gaugecustomers", // the id of the html element
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});


var gaugeenpls = new JustGage({
    id: "gaugeenployees", // the id of the html element
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});


var gaugeinvests = new JustGage({
    id: "gaugeinvesters", // the id of the html element
    value: 50,
    min: 0,
    max: 100,
    decimals: 2,
    gaugeWidthScale: 0.6
});

// update the value randomly
setInterval(() => {
    gaugeusers.refresh(Math.random() * 100);
    gaugecusts.refresh(Math.random() * 100);
    gaugeenpls.refresh(Math.random() * 100);
    gaugeinvests.refresh(Math.random() * 100);
}, 5000);
// End Gauge Area 




// Start Expenses Area
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [12, 19, 3],
      borderWidth: 1
    }]
  },
  options: {
    
  }
});
// End Expenses Area



//Start Earning Area
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Sales Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    };
//End Earning Area




// Start Footer 
 const getyear = document.getElementById('getyear');
 const getfullyear = new Date().getFullYear();
 getyear.innerText = getfullyear;
// End Footer 