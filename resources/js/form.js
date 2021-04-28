$(document).ready(function(){
    /* จัดการฟอร์ม Error */
    $("input").focus(function(e){
        const   p = e.target.offsetParent.firstElementChild;
                input = e.target;
            $(p).css("color","rgb(168 163 243)")
            $(input).addClass("fucus")
    })
    $("input").focusout(function(e){
        const   vue = e.target.value.length <= 0,
                p = e.target.offsetParent.firstElementChild;
        if(vue){
            $(p).css("color","#D9D8EB")
            $(input).removeClass("fucus")
        }
        else{
            $(p).text($(p).attr('typetext'))
            $(p).css("color","rgb(168 163 243)")
            $(input).addClass("fucus")
        }
    })

    $("input").keyup(function(e){
        const   vue = e.target.value.length <= 0,
                p = e.target.offsetParent.firstElementChild;
        if(!vue){
            $(p).css("color","rgb(168 163 243)")
            $(p).text($(p).attr('typetext'))
        }
    })

    $('select').change(function(e){
       const check =  $(this).find('option:selected').val()=="ยังไม่เลือก",
             p = e.target.offsetParent.firstElementChild;
        if(!check){
            $(p).text($(p).attr('typetext'))
            $(p).css("color","rgb(168 163 243)")
            $(this).addClass("fucus")
        }
        else{
            $(p).css("color","#D9D8EB")
            $(this).removeClass("fucus")
        }
    })
    $('.botline').submit(function(e){
        let arrayform = $(this).serializeArray();
        arrayform.forEach(element => {
             errorinput(element.name,element.value)
        });
        e.preventDefault();
    })
    function errorinput(n,v){
        var type = $("#"+n).attr('type');
        var e = $("#"+n)[0];
       
            if(type!="radio"){
                if(!v||v=="ยังไม่เลือก"){
                    $(e.offsetParent.firstElementChild).text("ยังไม่ได้กรอก")
                    $(e.offsetParent.firstElementChild).css("color","red")
                }
            }
            else{
                
            }
    }
        /* จัดการฟอร์ม Error */
})