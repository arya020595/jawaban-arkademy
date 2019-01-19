<?php include("koneksi.php") ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style type="text/css">
    	header {
    		background-color: #CCC;
    		padding: 2%;
    	}

    	#main-konten {
    		background-color: #32383e;
    	}
    	footer {
    		padding: 2%;
    		background-color: #CCC;
    		margin-top: 0;
    	}
    </style>

    <title>Menampilkan Data dari Database Arkademy</title>
  </head>
  <body>

  	<div class="containter-fluid" id="wrap">
    <header class="container">
    	<h1 class="text-center">Data Hobi</h1>
    </header>

    <div class="container" id="main-konten">
  	<?php 
  	//tampilkan tabel arkademy
	$result=
	mysql_query("SELECT
    hobi.id_person,
    person.name,
    GROUP_CONCAT(hobi.nama_hobi SEPARATOR ', ') AS person_hobi
FROM
    `hobi`
JOIN person ON hobi.id_person = person.id_person
GROUP BY
    hobi.id_person
ORDER BY
    person.name ASC"); ?>

		<table class="table table-dark table-hover">
			    <thead>
			      <tr>
			        <th>ID Person</th>
			        <th>Nama</th>
			        <th>Person Hobbies</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php while ($row=mysql_fetch_row($result)) { ?>
			      <tr>
			        <td><?php echo  $row[0] ?></td>
			        <td><?php echo  $row[1] ?></td>
			        <td><?php echo  $row[2] ?></td>
			      </tr>
			      <?php } ?>
			    </tbody>
		  	</table>
    </div>

   	<!-- INI BAGIAN FOOTER -->
    <footer class="container">
    	<p class="text-center"><b>@Arya Rifqi Pratama</b></p>
    </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>