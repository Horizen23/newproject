@extends('admin.template')
    @section('cbody')
    <div class="tabel">
        <div class="header_tabel">
            <div class="filter">
                <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.25 12L23.4318 4V0H0.477272V4L9.65909 12V20L14.25 16V12Z" fill="#8B83BA"></path>
                </svg>
                <p>กรอง</p>
            </div>
            <div class="flex">
                <a href="test">
                    <div class="addproduct btbt" id="btnaddproducteiei">
                        
                        <p>เพิ่มสินค้า +</p>
                    </div>
                </a>
            </div>
      
      
        </div>
        <div class="content_tabel">
        <table>
            <thead>
                <tr class="tbhead">
                    <th class="headcheckbox"><input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span>
                    </th><th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>สถานะ</th>
                    <th>เวลาเพิ่ม</th>
                    <th>จำนวน</th>
                    <th class="th_tr_r">ราคา</th>
                    <th>contro</th>
                </tr>
            </thead>
       
            <tbody>
                            <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 4</td>
                    <td>tt</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>123</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                            </tr><tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 15</td>
                    <td>anuchit</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>123456789</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                            </tr><tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 17</td>
                    <td>froy</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                            </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
                    <tr class="tbbodylist">
                    <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                    <td> 18</td>
                    <td>toei</td>
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        admin
                    </td>
                    <td>1</td>
                    <td>5</td>
                    <td class="th_tr_r">94  ฿</td>
                    <td>
                        <div class="contro">
                            <p class="show"> show</p>
                            <p class="delert">delert</p>
                            <p class="edit"> edit</p>
                        </div>
      
                    </td>
                        </tr>
            </tbody>
        </table>
      </div>
        <div class="bottomtbl">
            <p>Rows per page: 10</p>
        
        </div>
      </div>
    @endsection
