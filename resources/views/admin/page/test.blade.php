@extends('admin.template')
    
    @section('cbody')

    <div class="brushowform">
        <form action="add.php" method="POST" class="botline">
            <div class="form">
                <div class="hform">
                    
                <h1>เพิ่มสมาชิก</h1>
                <button value="Submit">บันทึก</button>
            </div>
            <div class="p_auto">
                <div class="flex conten_input">
                    <div class="cform">
                        <div class="input_addproduct">
                            <h1>ชื่อเข้าใช้ </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="ข้อความ" >ข้อความ</p>
                                <input id="message" name="message"  type="text" >
                            </div>
                        </div>
                        <div class="input_addproduct">
                            <h1>รหัสเข้าใช้ </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="พาสเวิร์ด" >พาสเวิร์ด</p>
                                <input id="password" name="password"  type="password"  autocomplete="on">
                            </div>
                        </div>
                    
                        <div class="input_addproduct">
                            <h1>ชื่อ </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="ข้อความ">ข้อความ</p>
                                <input id="rp" name="rp"  type="text" >
                            </div>
                        </div>
                        
                        <div class="input_addproduct">
                            <h1>เพศ </h1>
                            <div class="input_radio">
                                <input type="radio" id="male" name="gender" value="male" checked>
                                <label for="male">ชาย</label><br>
                                <input type="radio" id="gender" name="gender" value="female">
                                <label for="female">หญิง</label><br>
                                <p class="errorinput" typetext="ตัวเลือก">ตัวเลือก</p>
                            </div>
                        </div>
                        <div class="input_addproduct">
                            <h1>รูป </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="รูป">รูป</p>
                                <input id="rpe" name="rpe"  type="file" >
                            </div>
                        </div>
                        
                    </div>
                    <div class="cform">
                        <div class="input_addproduct">
                            <h1>วันเกิด </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="วันที่" >วันที่</p>
                                <input id="sdadas" name="sdadas"  type="date" >
                            </div>
                        </div>
                        <div class="input_addproduct">
                            <h1>ที่อยู่ </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="ข้อความ" >ข้อความ</p>
                                <input id="sdadasd" name="sdadasd"  type="text" >
                            </div>
                        </div>
                        <div class="input_addproduct">
                            <h1>เบอร์โทร </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="เบอร์โทร" >เบอร์โทร</p>
                                <input id="sdadase" name="sdadase"  type="tel" >
                            </div>
                        </div>
                        <div class="input_addproduct">
                            <h1>อีเมล </h1>
                            <div class="input_apd">
                                <p class="countid errorinput" typetext="อีเมล" >อีเมล</p>
                                <input id="sdadassada" name="sdadassada"  type="email" >
                            </div>
                        </div>
                </div>
            </div>
        </div>
            <a href="index.php" class="cidright">
                <svg width="65" height="81" viewBox="0 0 65 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4237 49.3367H37.7015C44.6819 49.3367 50.3404 43.1826 50.3404 35.5913C50.3404 27.9998 44.6819 21.8457 37.7015 21.8457H25.0627" stroke="black" stroke-width="1.435" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21.4515 39.5176L12.4237 49.3358L21.4515 59.154" fill="#C4C4C4"></path>
                        <path d="M21.4515 39.5176L12.4237 49.3358L21.4515 59.154" stroke="black" stroke-width="1.435" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
        </form>
        
    </div>
    

    <script>
  
    </script>
    @endsection