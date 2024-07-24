var barcode = "";
var interval;

document.addEventListener("keydown",function(evt){
	if(interval)
	clearInterval(interval);
	if(evt.code == "Enter"){
		if(barcode)
			handleBarCode(barcode);
			barcode = "";
			return;
	}
	if(evt.key != "Shift")
		barcode += evt.key;
		interval =  setInterval(() => barcode = "",20);
}
)
function handleBarCode(scanned_barcode)
{

	var barText = document.getElementById("bcode").innerHTML; 
	barText.setAttribute('value',scanned_barcode);

}