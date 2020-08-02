<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
// if statement
    if (true){
        echo "I love php"."</br>";
    }elseif(false){
        echo "I love javascript"."</br>";
    }else{
        echo "I love python"."</br>";
    }

//for loop to display 10 numbers
    for ($i=0; $i<= 10; $i++){
        echo $i."<br>";
    }
    
//switch statement
    $i = 10;
	switch ($i){
        case 10:
            echo "the value of i is 10";
            break;
        case 11:
            echo "the value of i is 11";
            break;
        case 12:
            echo "the value of i is 12";
            break;
        case 13:
            echo "the value of i is 13";
            break;
        case 14:
            echo "the value of i is 14";
            break;
        default:
            echo "there are no values in this variable";
            
    }
    echo "end of 3rd practical";
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>