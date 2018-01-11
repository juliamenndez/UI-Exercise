<?php
// Template to build the different pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BriteCore Contacts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Fira+Sans:300" rel="stylesheet">
    
    <link rel="stylesheet" href="vendor/footable/css/footable.standalone.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<header>
		<?php include 'templates/header.php'; ?>
	</header>

	<main>
        <div class="container">
            <section class="controls">
                <select name="sort-select" id="sort-select">
                    <option value="none">Sort by</option>
                    <option value="abc-asc">Alfabetical Asc</option>
                    <option value="abc-desc">Alfabetical Desc</option>
                    <option value="states-asc">States Asc</option>
                    <option value="states-desc">States Desc</option>
                </select>
                
                <div class="filter-wrapper">
                    <a href="#">Filter</a>
                    <div class="filters">
                    </div>
                </div>

                <button id="new-agency-btn" class="primary-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path d="M14 3v21m10.5-10.5h-21" fill="none" stroke="#303030" stroke-width="4" stroke-linecap="square"/></svg> New Agency</button>
            </section>    
            <section class="results">
               <table id="agencies-list" class="table" data-paging="true" data-paging-size="3"></table>
            </section>    


        </div>

        <section class="information">
            <div class="container">
                Information                    
            </div>
        </section>
    </main>
	
	<?php include 'templates/scripts.php'; ?>

</body>
</html>