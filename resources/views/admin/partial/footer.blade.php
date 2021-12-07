  </section>

  <footer>
    <div class="container">
      <p>© 2021 Edausauras. All Rights Reserved</p>
    </div>
  </footer>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Users', 'Years'],
        ['2013', 1000, 400],
        ['2014', 1170, 460],
        ['2015', 660, 1120],
        ['2016', 1030, 540],
        ['2017', 1030, 540],
        ['2018', 1030, 540]
      ]);

      var options = {
        hAxis: { title: 'Year', titleTextStyle: { color: '#333' } },
        vAxis: { minValue: 0 }
      };

      var chart1 = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart1.draw(data, options);
    }
  </script>

  <script src="{{ asset('assets/admin/js/all.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

</body>

</html>