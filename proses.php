<?php
<h1> <th><CENTER>QUALITY TIME </CENTER> </th></h1>
<H2> <TH> SILAHKAN PILIH </TH></H2>

<form action="" method="post">
<input type="checkbox" name="genrefilm[]" value="horor">HOROR<br/>
<input type="checkbox" name="genrefilm[]" value="action">ACTION<br/>
<input type="checkbox" name="genrefilm[]" value="anime">ANIME<br/>
<input type="checkbox" name="genrefilm[]" value="thriller">THRILLER<br/>
<input type="checkbox" name="genrefilm[]" value="animasi">ANIMASI<br/>
 <input type="reset" value="Delete Hobi" name="Delete"> <br> <br>
<hr style="border-color: red">

<input type="checkbox" name="wisata[]" value="bali">BALI<br/>
<input type="checkbox" name="wisata[]" value="rajaampat">RAJA AMPAT<br/>
<input type="checkbox" name="wisata[]" value="pulauderawan">PULAU DERAWAN<br/>
<input type="checkbox" name="wisata[]" value="bangkabelitung">BANGKA BELITUNG<br/>
<input type="checkbox" name="wisata[]" value="labuanbajo">LABUAN BAJO<br/>
 <input type="reset" value="Delete wisata" name="Delete"> <br> <br>
<hr style="border-color: red">

    Select untuk upload image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"> <br><br>
    <hr style="border-color: red"><hr style="border-color: red">
    <input type="submit" name="kirim" value="kirim">
</form>



<?php 
if (isset($_POST['kirim'])){
	$data=$_POST["genrefilm"];

		foreach ($data as $nilai) {
			echo $nilai."<br/>"; 
		}	
}

if (isset($_POST['kirim'])){
	$data=$_POST["wisata"];

		foreach ($data as $nilai) {
			echo $nilai."<br/>";
		}	
}
?>
