<?php
// Template to build the different pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BriteCore Contacts - Agencies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Fira+Sans:300" rel="stylesheet">
    
    <link rel="stylesheet" href="vendor/footable/css/footable.standalone.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<?php include 'templates/header.php'; ?>

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

                <button id="new-agency-btn" class="primary-btn">
                	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path d="M14 3v21m10.5-10.5h-21" fill="none" stroke="#303030" stroke-width="4" stroke-linecap="square"/></svg> 
                	New Agency</button>
            </section>    
            <section class="results">
               <table id="agencies-list" class="table" data-paging="true" data-paging-size="3"></table>
            </section>    


        </div>

        <section id="agency-information">
        	<div class="container">
        		<section class="tabs">
        			<div class="tab">
        				<input id="info-tab" type="radio" name="tab-group" checked="checked" class="custom-tab" />
				    	<label for="info-tab" class="tab-label light-text uppercase">Information</label>	
        			</div>
        			
				    <div class="tab">
					    <input id="states-tab" type="radio" name="tab-group" class="custom-tab"/>
					    <label for="states-tab" class="tab-label light-text uppercase">Operating States</label>
					</div>
				    
				    <div class="tab">
					    <input id="policies-tab" type="radio" name="tab-group" class="custom-tab" />
					    <label for="policies-tab" class="tab-label light-text uppercase">Policy Types</label>
					</div>
        		</section>
        	</div>

        	<div class="container-wrapper">
        		<div class="container">
				    <section id="tabs-content">
				    	
				        <section id="information-content" class="content-wrapper visible">
				        	<a href="#" class="edit-link">
				        		<svg width="33" height="28" viewBox="0 0 33 28" xmlns="http://www.w3.org/2000/svg"><path d="M21.752 11.903L20.5 13.155a.376.376 0 0 1-.534 0l-2.118-2.12a.379.379 0 0 1 0-.534L19.1 9.249a.848.848 0 0 1 1.2 0l1.452 1.453c.33.331.33.868 0 1.201zm-2.239 2.138l-6.929 6.933c-.146.248-.385.248-.533.102l-2.118-2.12a.379.379 0 0 1 0-.535l6.929-6.932a.378.378 0 0 1 .533 0l2.119 2.12c.147.147.147.387-.001.432zm-8.105 7.913l-3.006 1.03-.056.019a.281.281 0 0 1-.339-.34l.019-.054 1.03-3.008.019-.057a.292.292 0 0 1 .055-.081c.111-.11.29-.11.401 0l2.013 2.014a.284.284 0 0 1-.08.457l-.056.02z" fill="#219DA6" fill-rule="evenodd"/></svg>Edit
				        	</a>

				        	<div class="content-column">
				        		<div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Name</label>
						            <span id="agency-name">Agency 1</span>
					            </div>

					            <div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Address</label>
						            <span id="agency-name">44 Shirley Ave.</span>
					            </div>

					            <div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Address</label>
						            <span id="agency-name">West Chicago, IL 60185</span>
					            </div>	
				        	</div>

				        	<div class="content-column">
				        		<div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Phone</label>
						            <span id="agency-name">202-555-0143</span>
					            </div>

					            <div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Fax</label>
						            <span id="agency-name">202-555-0143</span>
					            </div>

					            <div class="info-field">
					        		<label for="agency-name" class="light-text uppercase">Email</label>
						            <span id="agency-name">hello@agency2.com</span>
					            </div>	
				        	</div>
				            
				        </section>
				        
				        <section id="states-content" class="content-wrapper">
				            <a href="#" class="edit-link">
				        		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path d="M14 3v21m10.5-10.5h-21" fill="none" stroke="#303030" stroke-width="4" stroke-linecap="square"/></svg>Add state
				        	</a>

				        	<div id="states" class="items">
				        		<div class="item">
				        			<svg class="arrow" width="54" height="28" viewBox="0 0 54 28" xmlns="http://www.w3.org/2000/svg"><path d="M27 28L1 1h52z" fill="#5E5E5E" fill-rule="evenodd"/></svg>Arizona
				        		</div>
				        		
				        		<div class="item">
				        			<svg class="arrow" width="54" height="28" viewBox="0 0 54 28" xmlns="http://www.w3.org/2000/svg"><path d="M27 28L1 1h52z" fill="#5E5E5E" fill-rule="evenodd"/></svg>Delaware
				        		</div>
				        		
				        		<div class="item">
				        			<svg class="arrow" width="54" height="28" viewBox="0 0 54 28" xmlns="http://www.w3.org/2000/svg"><path d="M27 28L1 1h52z" fill="#5E5E5E" fill-rule="evenodd"/></svg>
				        			Missouri
				        			<div class="subitems">
				        				<div class="subitem">
				        					Policy number one
				        					<span class="item-links">
				        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
				        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><path d="M13.587 18.2C6.844 18.2 1 9.6 1 9.6S6.395 1 13.587 1c7.193 0 12.138 8.6 12.138 8.6s-5.395 8.6-12.138 8.6zm-.224-4.837a3.763 3.763 0 1 0 0-7.525 3.763 3.763 0 0 0 0 7.525z" fill="#095459" fill-rule="evenodd"/></svg></a>
				        					</span>
				        				</div>
				        				
				        				<div class="subitem">
				        					Policy number two
				        					<span class="item-links">
					        					<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
					        					<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><path d="M13.587 18.2C6.844 18.2 1 9.6 1 9.6S6.395 1 13.587 1c7.193 0 12.138 8.6 12.138 8.6s-5.395 8.6-12.138 8.6zm-.224-4.837a3.763 3.763 0 1 0 0-7.525 3.763 3.763 0 0 0 0 7.525z" fill="#095459" fill-rule="evenodd"/></svg></a>
					        				</span>
				        				</div>
				        				
				        				<div class="subitem">
				        					Policy number three
				        					<span class="item-links">	
					        					<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
					        					<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><path d="M13.587 18.2C6.844 18.2 1 9.6 1 9.6S6.395 1 13.587 1c7.193 0 12.138 8.6 12.138 8.6s-5.395 8.6-12.138 8.6zm-.224-4.837a3.763 3.763 0 1 0 0-7.525 3.763 3.763 0 0 0 0 7.525z" fill="#095459" fill-rule="evenodd"/></svg></a>
					        				</span>
				        				</div>
				        				
				        				<a href="#" class="edit-link">
							        		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path d="M14 3v21m10.5-10.5h-21" fill="none" stroke="#303030" stroke-width="4" stroke-linecap="square"/></svg>Add policy
							        	</a>
				        			</div>
				        		</div>
				        	</div>
				        </section>
				        
				        <section id="policies-content" class="content-wrapper">
				        	<a href="#" class="edit-link">
				        		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27"><path d="M14 3v21m10.5-10.5h-21" fill="none" stroke="#303030" stroke-width="4" stroke-linecap="square"/></svg>Add policy</a>

				        	<div id="policies" class="items">
				        		<div class="item">
				        			Homeowners Policies
				        			<span class="item-links">
		        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
		        					</span>
				        		</div>
				        		
				        		<div class="item">
				        			Farmowners Policies
				        			<span class="item-links">
		        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
		        					</span>
				        		</div>
				        		
				        		<div class="item">
				           			Commercial Policies
				           			<span class="item-links">
		        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
		        					</span>
				        		</div>

				        		<div class="item">
				           			Liability Protection Policies
				           			<span class="item-links">
		        						<a href="#"><svg width="27" height="19" viewBox="0 0 27 19" xmlns="http://www.w3.org/2000/svg"><g stroke="#FE7B45" stroke-width="4" fill="none" fill-rule="evenodd" stroke-linecap="square"><path d="M19.163 3.837L7.837 15.163M19.163 15.163L7.837 3.837"/></g></svg></a>
		        					</span>
				        		</div>
				        	</div>
				        </section>
				    </section>                   
	            </div>
        	</div>
        </section>
    </main>

	<?php include 'templates/footer.php'; ?>
	
	<?php include 'templates/scripts.php'; ?>

</body>
</html>