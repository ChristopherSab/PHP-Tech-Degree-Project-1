<?php

// Quotes Multidimensional Array
$quotes = array(
    [
        "quote" => "The best time to plant a tree was 20 years ago. The second best time is now.",
        "source" => "Chinese Saying",
        "genre" => "Proverb"
    ],

    [
        "quote" => "Strategy is better than strength.",
        "source" => "African Saying",
        "genre" => "Proverb"
    ],

    [
        "quote" => "Success is not about winning or losing but how long one can keep going without seeing results.",
        "source" => "Chris Sabaoth",
        "citation" => "London",
        "year" => "2020",
        "genre" => "Quote"
    ],

    [
        "quote" => "Every child is an artist.  The problem is how to remain an artist once he grows up.",
        "source" => "Pablo Picasso",
        "genre" => "Quote"
    ],

    [
        "quote" => "What we call success is a tip of the ice-berg, what we don't see is the seed sowing and time spent watering the plants",
        "source" => "E Cadbury",
        "citation" => "Birmingham, UK",
        "year" => "2007",
        "genre" => "Quote"
    ],

    [
        "quote" => "Either you run the day, or the day runs you.",
        "source" => "Jim Rohn",
        "genre" => "Quote"
    ],

    [
        "quote" => "Whether you think you can or you think you can’t, you’re right.",
        "source" => "Henry Ford",
        "year" => "1976",
        "genre" => "Quote"
    ],

    [
        "quote" => "Wisdom is not knowing what to say but knowing if its worth saying at all",
        "source" => "George Urido",
        "citation" => "South Africa",
        "year" => "1995",
        "genre" => "Quote"
    ],
    [
        "quote" => "Bargain like a gypsy, but pay like a gentleman",
        "source" => "Hungarian Saying",
        "genre" => "Proverb"
    ],

    [
        "quote" => "All that glitters isn't gold",
        "source" => "United Kingdom",
        "genre" => "Cliche"
    ],
    [
        "quote" => "Kiss and make up",
        "source" => "United States",
        "genre" => "Cliche"
    ],
    [
        "quote" => "Read between the lines",
        "source" => "United Kingdom",
        "genre" => "Cliche"
    ]
);


//Random Quote Generator Function
function getRandomQuote(array $array){

    $randomIndex = rand(0, count($array) - 1);

    return $array[$randomIndex];

}


//This Function Takes An Unstructured Quote "Array" And Builds It up with HTML to be displayed 

function printQuote(array $array){

    $quoteElement = getRandomQuote($array);

    //All the Quote Elements Will Be Stored In This Array
    $quoteToDisplay = [];

    // If the following array elements are present they'll be added to the quotes to display array
    if( isset($quoteElement['quote'])){
        $quoteToDisplay[] = "<p class='quote'>". $quoteElement['quote']. "</p>";
    } 

    if( isset($quoteElement['source'])){
        $quoteToDisplay[] = "<p class='source'>". $quoteElement['source'];
    } else{
        $quoteToDisplay[] = "<p class='source'>";
    }
    
    if( isset($quoteElement['citation'])){
        $quoteToDisplay[] = "<span class='citation'>". $quoteElement['citation']. "</span>";
    } 
    
    if( isset($quoteElement['year'])){
        $quoteToDisplay[] = "<span class='year'>". $quoteElement['year']. "</span>";
    }

    //Display Quote Genre
    if( isset($quoteElement['genre'])){
        $quoteToDisplay[] = "<span class='genre'>". "(" . $quoteElement['genre'] .")" ."</span>";
    }

    //closing P tags added to the array
    $quoteToDisplay[] = "</p>";

    //This loops through all the array html elements that make up the quote to the displayed on the page
    for($i = 0; $i < count($quoteToDisplay); $i++){
        echo $quoteToDisplay[$i]. " \r\n ";
    }
}

//This function displays a random color from an array to set as the background-color on page refresh
function randomBackgroundColor(){

    $backgroundColors = ['#36b55c', '#3FB5A5', '#B548B2', '#FFC700', 
    '#5AB52D', '#0019FF', '#4850B5', '#7FCDCD', '#203627', '#55B4B0'];

    $randomIndex = rand(0, count($backgroundColors) - 1);

    echo "<body style=background-color:".$backgroundColors[$randomIndex].">";

}

randomBackgroundColor();

printQuote($quotes);


//The code below refreshes the PHP page every 10 seconds, displaying a new quote each time
$seconds = 10;
header("Refresh: $seconds");




