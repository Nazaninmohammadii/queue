<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue music festival</title>
    <link rel="stylesheet" href="dist/tailwind.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<?php require ("partials/header.php");?>

<main>
<div class="container">       
    <div class="tickets-merch">
        <div class="row">
        <div class="tickets-merch__heading">
            <h1 class="text-xl">Buy Tickets & <br> Merch</h1>
        </div>

<!-- General Admission -->
     <div class="tickets-option">
             <div class="general-admission__ticket01">
                <img src="img/ticket_01.svg" alt="">
            </div>

        <div class="general-admission_info"> 
            <div class="general-admission__content">
                <ul class="list">
    	            <li class="list-items__passes">
                        <p>2024 Event Passes</p>
                        <h5>General Admission</h5>
    	            </li>
                </ul>
            </div>
            <!-- &nbsp; -->
            <div class="general-admission__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$399<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week2">   
                        <h6>Weekend 2</h6>
                        <h6>$399<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>
            <!-- &nbsp; -->
            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue</p>
    	            </li>
                </ul>  
            </div>
            <!-- &nbsp; -->
            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container_images">
                    <img src="img/minus.png" width="18">
                    <img src="img/container.png" width="40">
                    <img src="img/plus.png" width="18">
                    <div class="button-container">   
                        <a href="#" class="buy-passes_button">Buy Passes</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



<!-- General Admission + Shuttle -->
    <div class="tickets-option">
             <div class="shuttle__ticket02">
                <img src="img/ticket_02.svg" alt="">
            </div>

        <div class="shuttle_info"> 
            <div class="shuttle__content">
                <ul class="list">
    	            <li class="list-items__passes">
                        <p>2024 Event Passes</p>
                        <h5>General Admission + Shuttle </h5>
    	            </li>
                </ul>
            </div>
            <!-- &nbsp; -->
            <div class="shuttle__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$499<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week2">   
                        <h6>Weekend 2</h6>
                        <h6>$499<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>
            <!-- &nbsp; -->
            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue and free parking</p>
    	            </li>
                </ul>  
            </div>
            <!-- &nbsp; -->
            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container_images">
                    <img src="img/minus.png" width="18">
                    <img src="img/container.png" width="40">
                    <img src="img/plus.png" width="18">
                    <div class="button-container">   
                        <a href="#" class="buy-passes_button">Buy Passes</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<!-- VIP -->
    <div class="tickets-option">
             <div class="VIP__ticket03">
                <img src="img/ticket_03.svg" alt="">
            </div>

        <div class="VIP_info"> 
            <div class="VIP__content">
                <ul class="list">
    	            <li class="list-items__passes">
                        <p>2024 Event Passes</p>
                        <h5>VIP</h5>
    	            </li>
                </ul>
            </div>
            <!-- &nbsp; -->
            <div class="VIP__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$1000<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week2">   
                        <h6>Weekend 2</h6>
                        <h6>$1000<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>
            <!-- &nbsp; -->
            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue and access to all VIP areas all weekend</p>
    	            </li>
                </ul>  
            </div>
            <!-- &nbsp; -->
            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container_images">
                    <img src="img/minus.png" width="18">
                    <img src="img/container.png" width="40">
                    <img src="img/plus.png" width="18">
                    <div class="button-container">   
                        <a href="#" class="buy-passes_button">Buy Passes</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



        </div>
</div>
</div>
</main>
    

<?php require ("partials/footer.php");?>

</body>
</html>