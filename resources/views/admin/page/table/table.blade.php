<div class="tabel">
    <div class="header_tabel">
            <h1 class="htexttb">{{$nametable}}</h1>
           
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
                    <th class="headcheckbox"><input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></th>
                    @foreach ($eieis[0] as $key=>$eiei)
                        <th>{{$key}}</th>
                    @endforeach
                    <th>
                       <div class="filter">
                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.25 12L23.4318 4V0H0.477272V4L9.65909 12V20L14.25 16V12Z" fill="#8B83BA"></path>
                            </svg>
                            <p>กรอง</p>
                        </div>
                    </th>
                </tr>
            </thead>
    
            <tbody>
        
            @foreach ($eieis as $eiei)
            <tr class="tbbodylist">
                <td class="headcheckbox"> <input type="checkbox" class="checkbox" value="#"><span>&nbsp;</span></td>
                @foreach ($eiei as $keey=>$arrayeiei)
                @if ($keey=="บทบาท")
                    <td> 
                        <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="3" r="3" fill="#007F00"></circle></svg>
                        {{$arrayeiei}}
                    </td>
                @else
                    <td>{{$arrayeiei}}</td>
                @endif
                @endforeach
                <td>
                    <div class="contro">
                        <p class="show {{$eiei['ไอดี']}}" > show</p>
                        <p class="delert {{$eiei['ไอดี']}}">delert</p>
                        <p class="edit {{$eiei['ไอดี']}}">edit฿</p>
                    </div>
                </td>
            </tr>
            @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="bottomtbl">
        <p>Rows per page: 10</p>
    
    </div>
</div>