@extends("layouts.admin")
@section("title", "Admin Dashboard")
@section("page:styles")
<link rel="stylesheet" href="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
@endsection
@section("content")
 
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Properties Distribution Chart</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                 <div class="chart">
                    <center>
                      <canvas id="propertyChart"></canvas>
                    </center>
                </div>
                </div>
              </div>
            </div>
            <div class="box-footer">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection

@section("page:scripts")
<script src="{{asset('assets/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('propertyChart').getContext('2d');
        var propertyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                // Change these lines to echo the already encoded data
                labels: {!! $chartLabels !!},
                datasets: [{
                    label: 'Property Types',
                    data: {!! $chartData !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection