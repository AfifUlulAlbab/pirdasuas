<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
    src="https://code.jquery.com/jquery-3.7.0.js"
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
      <script src="{{asset('js/picograph.js')}}"></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script scr="{{asset('js/picograph.js')}}"></script>
    <title>Sentinel Door</title>
  </head>

  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <!-- <i class="bx bxs-bulb"></i> -->
        <img src="{{asset('logo.png')}}" alt="" />
        <span class="text">Sentinel Door</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="#">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu"></ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>

        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <!-- <input type="checkbox" id="switch-mode" hidden />
      <label for="switch-mode" class="switch-mode"></label> -->
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Smart Device</a>
              </li>
            </ul>
          </div>
        </div>

        <ul class="box-info">
          {{-- <li>
          
            <nav>
              <i class="bx">
    
                <input type="checkbox" id="switch-mode" hidden />
        
                <label for="switch-mode" class="switch-mode"></label></i>
            </nav>

            <span class="text">
              <h3>On</h3>
              <h3>Off</h3>
            </span>
          </li>
          <li>
            <nav>
              <i class="bx">
                <input type="checkbox" id="switch-modes" hidden />
                <label for="switch-modes" class="switch-modes"></label
              ></i>
            </nav>
            <span class="text">
              <h3>Bell</h3>
            </span>
          </li> --}}
          <li>
            <span class="text">
              <h3>Status: <span id="statusPintu">Terbuka</span></h3>
            </span>
          </li>
        </ul>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Grapichs</h3>
            </div>
            <canvas
            id="graphDemo"
            style="width: 500px; height:200px; border:2px solid #000000;"
        >
        </canvas>
    
        <!-- div for legends/labels -->
        <div id="graphLabels"></div>
    
        <script>
            /* Create graph using picograph */
            let demograph = new Graph("graphDemo",
                ["Sumbu X", "Sumbu Y"],
                "derajat", "graphLabels", 50, 10, 0, true, true);
    
            /* Update values every second */
            setInterval(updateEverySecond, 1000);
    
            function updateEverySecond() {
                $.ajax({
                    url: '{{route("getData")}}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        yrand0 = response.sumbu_x;
                        yrand1 = response.sumbu_y;
                        $('#statusPintu').html(response.status);
                        demograph.update([yrand0, yrand1])
                    }
                });             
            }
        </script>
            <!-- <table>
            <thead>
            </thead>
            <tbody>
            </tbody>
          </table> -->
          </div>
          <div class="todo">
            <div class="head">
              <h3>Tabel</h3>
            </div>
            <div class="table-wrapper">
              <table class="fl-table">
                  <thead>
                      <tr>
                          <th>Sumbu X</th>
                          <th>Sumbu Y</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($datas as $data)    
                      <tr>            
                          <td>{{$data->sumbu_x}}</td>
                          <td>{{$data->sumbu_y}}</td>
                      </tr>
                      @endforeach
                  <tbody>
              </table>
              <div class="pagination">
                <li>
                  {{$datas->links()}}
                </li>
              </div>
          </div>
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    {{-- <script src="Index.js"></script> --}}
  </body>
</html>
