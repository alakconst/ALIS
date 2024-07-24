var quality = 60; //(1 to 100) (recommanded minimum 55)
    var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )

	    function Capture() {
            try {
               
                document.getElementById('imgFinger').src = "data:image/bmp;base64,";            
                document.getElementById('txtIsoTemplate').value = "";
           

                var res = CaptureFinger(quality, timeout);
                if (res.httpStaus) 
				{                  
                    if (res.data.ErrorCode == "0") 
					{
                        document.getElementById('imgFinger').src = "data:image/bmp;base64," + res.data.BitmapData;                       
                        document.getElementById('txtIsoTemplate').value = res.data.IsoTemplate;                      
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;
        }	