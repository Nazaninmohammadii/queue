<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>queue music festival</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

            <div class="general-admission__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$399<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 2</h6>
                        <h6>$399<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>

            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue</p>
    	            </li>
                </ul>  
            </div>

            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container__images">
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

            <div class="shuttle__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$499<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 2</h6>
                        <h6>$499<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>

            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue and free parking</p>
    	            </li>
                </ul>  
            </div>

            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container__images">
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

            <div class="VIP__dates">
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 1</h6>
                        <h6>$1000<span> + fees</span></h6> 
                    </li>
                </ul>
                <ul class="list"> 
    	            <li class="list-items__week1">   
                        <h6>Weekend 2</h6>
                        <h6>$1000<span> + fees</span></h6> 
    	            </li>
                </ul>        
            </div>

            <div class="list-items__content"> 
                <ul class="list_02"> 
    	            <li class="list-items__venue">   
                        <p>Allows entrance to the Venue and access to all VIP areas all weekend</p>
    	            </li>
                </ul>  
            </div>

            <div class="quantity-container">
                <p>Quantity</p>
                <div class="quantity-container_grid">
                <div class="quantity-container__images">
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


<!-- Merch -->
    <div class="merch-container">
        <div class="merch_01">
            <div class="merch_image_01">
                <img src="img/merch_01.png">
            </div>

            <div class="merch_info">
                <h5>Festival Hoodie</h5>

                <div class="merch-sizes">
                        <div class="merch-size_text">
                            <p>SIZE</p>
                        </div>
                        <div class="sizes">
                            <div class="size">
                                <p>S</p>
                            </div>
                            <div class="size">
                                <p>M</p>
                            </div>
                            <div class="size">
                                <p>L</p>
                            </div>
                        </div>  
                    </div>

                <div class="merch_price">
                    <h6>$49.99</h6>
                </div>

                <div class="add-merch">   
                    <a href="#" class="add-merch_button">add to bag</a>
                </div>
            </div>    
        </div>


        <div class="merch_02">
            <div class="merch_image_02">
                <img src="img/merch_02.png">
            </div>

            <div class="merch_info">
                <h5>Festival Tee</h5>

                <div class="size-color">
                    <div class="merch-sizes">
                        <div class="merch-size_text">
                            <p>SIZE</p>
                        </div>
                        <div class="sizes">
                            <div class="size">
                                <p>S</p>
                            </div>
                            <div class="size">
                                <p>M</p>
                            </div>
                            <div class="size">
                                <p>L</p>
                            </div>
                        </div>  
                    </div>

                    <div class="merch-colors">
                        <div class="merch-text">
                            <p>COLOR</p>
                        </div>
                        <div class="colors">
                            <div class="color_01"></div>
                            <div class="color_02"></div>
                            <div class="color_03"></div>
                        </div>  
                    </div>
                </div>

                <div class="merch_price">
                    <h6>$29.99</h6>
                </div>

                <div class="add-merch">   
                    <a href="#" class="add-merch_button">add to bag</a>
                </div>
            </div>    
        </div>


        <div class="merch_03">
            <div class="merch_image_03">
                <img src="img/merch_03.png">
            </div>

            <div class="merch_info">
                <h5>Festival Tank</h5>
                
                <div class="merch-sizes">
                        <div class="merch-size_text">
                            <p>SIZE</p>
                        </div>
                        <div class="sizes">
                            <div class="size">
                                <p>S</p>
                            </div>
                            <div class="size">
                                <p>M</p>
                            </div>
                            <div class="size">
                                <p>L</p>
                            </div>
                        </div>  
                    </div>

                <div class="merch_price">
                    <h6>$29.99</h6>
                </div>

                <div class="add-merch">   
                    <a href="#" class="add-merch_button">add to bag</a>
                </div>
            </div>    
        </div>


        <div class="merch_04">
            <div class="merch_image_04">
                <img src="img/merch_04.png">
            </div>

            <div class="merch_info">
                <h5>Festival Lighter</h5>

                <div class="merch-colors">
                    <div class="merch-text">
                        <p>COLOR</p>
                    </div>
                    <div class="colors">
                        <div class="color_04"></div>
                        <div class="color_02"></div>
                        <div class="color_03"></div>
                    </div>  
                </div>

                <div class="merch_price">
                    <h6>$8.99</h6>
                </div>

                <div class="add-merch">   
                    <a href="#" class="add-merch_button">add to bag</a>
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