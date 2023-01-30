<?php
$api3_key ='4eb2840b6d6a8fe651d8002298aac28b';
$id_ex='315162';
#movie url using id
//$response = file_get_contents('https://api.themoviedb.org/3/movie/'.$id_ex.'?api_key='.$api3_key.'');
//$response = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key='.$api3_key.'&language=en-US&page=1');
#movie url using id also more stuff like videos and images
$response =file_get_contents('https://api.themoviedb.org/3/movie/'.$id_ex.'?api_key='.$api3_key.'&append_to_response=images');
//$response = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key='.$api3_key.'&query=teen+wolf');
$users = json_decode($response);
//$users=$users->results;
//get list of popular movies
$p_response =json_decode(file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key='.$api3_key.'&language=en-US&page=1'));
$users = json_decode($response);
//array of 19 movies
$p_response=$p_response->results;
//get its properties
$p_img=array();
$p_title=array();
$p_rate=array();
for ($i=0; $i <20; $i++) { 
    # code...
    $p_img[$i]= 'https://image.tmdb.org/t/p/w500'.$p_response[$i]->backdrop_path.'' ;
    $p_title[$i]=$p_response[$i]->title;
    $p_rate[$i]=$p_response[$i]->vote_average;
}
//print('<pre>'.print_r($p_response,true).'</pre>');
//print('<pre>'.print_r($users,true).'</pre>');
 $movie_img ='https://image.tmdb.org/t/p/w500/'.$users->backdrop_path.'';
$m_img_arr= $users->images->backdrops;
$img_arr=array();
for ($i=0; $i <10; $i++) { 
    # code...
    $img_arr[$i]='https://image.tmdb.org/t/p/w500'.$m_img_arr[$i]->file_path.'';
}
//$in='https://image.tmdb.org/t/p/original/'.$m_img_arr[4]->file_path.'';
//echo $in;
//echo 'image arrays';
//print('<pre>'.print_r($img_arr,true).'</pre>');
//print('<pre>'.print_r($m_img_arr,true).'</pre>');
?>