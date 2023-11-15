<h1>Majors by Division Distribution</h1>
<!-- Load c3.css -->
<link href="/path/to/c3.css" rel="stylesheet">

<!-- Load d3.js and c3.js -->
<script src="/path/to/d3.v5.min.js" charset="utf-8"></script>
<script src="/path/to/c3.min.js"></script>

<div id="chart"></div>

var chart = c3.generate({
    bindto: '#chart',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 50, 20, 10, 40, 15, 25]
      ]
    }
});
