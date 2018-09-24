<?php
    session_start();
?>
<table border=1; style="border-spacing: 0; margin: 1% 25%;";>
    <center><h2> Hobiku </h2></center>
    <tr>
        <th> Hobby </th>
        <th> Gambar </th>
    </tr>
    <tr>
        <td style=" width: 18%; padding: 10px;">  
            <?php 
                foreach($_SESSION['hobby'] as $pilihan) {
                echo $pilihan."<br>";
            }
            ?>
        </td>
        <td>
            <center>
            <img src="<?php echo $_SESSION['file'];?>" width=20%;>
            </center>
        </td>
    </tr>  
        <a href="form.html"> HAPUS </a>
</table>
