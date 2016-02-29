$(document).ready(function (e) {
      function ktanh(file){
      
        chonfile=file;
         var fileIn = file[0];
        if (fileIn.files === undefined || fileIn.files.length == 0) {
            alert("1");
            
            alert("Không có ảnh nào được chọn");
            chonfile.val(null);
           
        return false;
    }
    else
      { alert("2");
          var file = fileIn.files[0];
          type=file.type; 
          size=file.size;
         
          if(size<3000000)
          {
               if(type=="image/jpg" || type=="image/jpeg" || type=="image/png" || type=="image/gif"  )
                      {
                       return true;
                      }
                else
                {
                    alert("Vui lòng chọn 1 file ảnh");
                    chonfile.val(null);
                    return false;
                }
            
         }
            else
            {
             
              alert("Dụng lượng ảnh lớn hơn 3MB");
                chonfile.val(null);
                return false;
                
            }
      }
    }
    
dangload=false;
matkhau=true;
var http_arr = new Array();

// upload anh

function uploadanh(file,curren){
    
            html ='  <li data-id="-1" class="uk-grid-margin dangload image-item ">\n\
                      <div class="uk-progress uk-progress-striped uk-active">\n\
                      <div class="uk-progress-bar" style="width: 0%;"></div></div> \n\
                      <a class="itemview" href=""><div class="boximg"></div></a></li>';
     var  curren = curren.parent();
     curren.before(html);                    
     var dangcho=curren.prev();
     var progwith=dangcho.children('.uk-progress');             
     var formData = new FormData();
     var hash = $("[name='tem_hash']").val();
          
     formData.append('file', file[0]);     
     formData.append('tem_hash', hash);
     
        $.ajax({
            type: "POST",
            url: '/backend/default/upload',
            contentType: false,
            dataType: 'json',
            cache: false,
            processData:false,
            data:formData,            
            success: function (result)
            {  console.log(result);
                dangcho.removeClass('dangload');
                progwith.remove();
                dangcho.children().children().css('background-image', 'url('+result+')');
                html = '<a alt="ảnh" class="uk-icon-remove xoaanh"></a>';
                dangcho.append(html);
                dangcho.attr('data-id', 1);
                dangcho.children().attr('href',result);

            }
        });
                            
//     var    Form = new FormData();            
//        Form.append('hinhanh', file[0]);       
//        var request = new XMLHttpRequest();
//        http_arr.push(request);
//           request.upload.addEventListener('progress', function(e){
//                    percent = Math.round((e.loaded / e.total) * 100);
//                  progwith.children().css('width', percent+'%');
//                    progwith.children().html(percent+'%');
//                }, false);
//                
//        request.open("POST", "insertfile.php", true);
//        request.send(Form);
//
//        request.onreadystatechange = function (event) {
//            if (request.readyState == 4 && request.status == 200)
//            {
//   
//             var  ketqua = JSON.parse(request.responseText);
//                if (ketqua.tinhtrang == 1)
//                { 
//                    dangcho.removeClass('dangload');
//                    progwith.remove();
//                    
//                    dangcho.children().children().css('background-image', 'url(\'upload/' + ketqua.tenfile + '\')');
//                    
//                    html='<a alt="'+ketqua.tenfile+'" class="uk-icon-remove xoaanh"></a>';
//                     dangcho.append(html);
//                     dangcho.attr('data-id',ketqua.id);
//                      dangcho.children().attr('href',"upload/"+ketqua.tenfile);
//                      return true;
//                }
//                else
//                {
//                     curren.prop('value',null);
//                  //  alert('Có l?i x?y ra. Hãy th? l?i')
//                   imageitem.remove();  
//                     return false;
//                 
//                }
//            }
//
//        }
}
// end upload anh
$('#upload').change(function(){  
  if(ktanh($(this)))
  {
        file = $(this)[0].files; 
        uploadanh(file,$(this));
    }
})

})

