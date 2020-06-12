<?php

// Quotes Multidimensional Array
$quotes = array(
    [
        "quote" => "The best time to plant a tree was 20 years ago. The second best time is now.",
        "source" => "Chinese Proverb"
    ],

    [
        "quote" => "Your time is limited, so don’t waste it living someone else’s life.",
        "source" => "Mother Teresa"
    ],

    [
        "quote" => "Success is not about winning or losing but who can keep going longer without seeing results.",
        "source" => "Chris Sabaoth",
        "citation" => "Nottingham, UK",
        "year" => "2020"
    ],

    [
        "quote" => "Every child is an artist.  The problem is how to remain an artist once he grows up.",
        "source" => "Pablo Picasso"
    ],

    [
        "quote" => "What we call success is a tip of the ice-berg, what we don't see is the seed sowing and time spent watering the plants",
        "source" => "E Cadbury",
        "citation" => "Birmingham, UK",
        "year" => "2007"
    ],

    [
        "quote" => "Either you run the day, or the day runs you.",
        "source" => "Jim Rohn"
    ],

    [
        "quote" => "Whether you think you can or you think you can’t, you’re right.",
        "source" => "Henry Ford",
        "year" => "1976"
    ],

    [
        "quote" => "Wisdom is not knowing what to say but knowing if its worth saying at all",
        "source" => "George Urido",
        "citation" => "Cape Town, South Africa",
        "year" => "1995"
    ]
);


//Random Quote Generator Function

function getRandomQuote(array $array){

    $randomIndex = rand(0, count($array) - 1);

    return $array[$randomIndex];

}


//Create the printQuote funtion

function printQuote(array $array){


    $quoteElement = getRandomQuote($array);

    $quoteToDisplay = [];

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

    $quoteToDisplay[] = "</p>";


    for($i = 0; $i < count($quoteToDisplay); $i++){
        echo $quoteToDisplay[$i]. " \r\n ";
    }

}

printQuote($quotes);




