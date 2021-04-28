@extends('admin.template')
    @section('cbody')
    <div class="d_concludes">
        <p>รายงานผล</p>
        <div class="listconclue">
            <div class="conclude ccl">
                <p>
                  รายวัน
                </p>
                <div class="grah">
                    <canvas class="gcanva" id="canvasd"></canvas>
                </div>
                <h1 class="Count">
                    3040
                </h1>
            </div>
       
                
            <div class="conclude1 ccl">
                <p>
                    สัปดาห์
                  </p>
                  <div class="grah">
                      <canvas class="gcanva" id="canvasw"></canvas>
                  </div>
                  <h1 class="Count">
                      5000
                  </h1>
              </div>  
            <div class="conclude1 ccl">
                <p>
                    รายเดือน
                  </p>
                  <div class="grah">
                      <canvas class="gcanva" id="canvasm"></canvas>
                  </div>
                  <h1 class="Count">
                      10432
                  </h1>
              </div>  
              <div class="conclude1 ccl">
                <p>
                    รายปี
                  </p>
                  <div class="grah">
                      <canvas class="gcanva"id="canvasy"></canvas>
                  </div>
                  <h1 class="Count">
                      302300
                  </h1>
              </div>
            
        </div>
        <p>กราฟรายปี</p>
        <div class= " ">
            <div class="mo">
                <div class="hgbar">
             
                    <div class="flex">
                        <div class="week">วัน</div>
                        <div class="week">สัปดาห์</div>
                        <div class="week">เดือน</div>
                        <div class="week">ปี</div>
                    </div>
                </div>
                <div class="mo1" >
                    <canvas class="ed" id="ed" ></canvas>
                </div>
            </div>
            <div class="acction" style="display: none" >
                <div class="flex">
                    <h1>History</h1>
                    <p>See All</p>
                </div>
                <div class="centerdiv">
                    <div>
                        <canvas class="gcanva"id="Doughnut " height="225"></canvas>  
                    </div>
                </div>
            </div>
        </div>
            @endsection
            